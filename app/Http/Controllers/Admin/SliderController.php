<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.sliders.index', compact('sliders'));
    }





    public function create()
    {
        return view('admin.sliders.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images/slider'), $imageName);
        }

        Slider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => $imageName,
            'link' => $request->link,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider created Successfully');
    }





    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));
    }




    public function update(Request $request, $id)
    {

        $slider = Slider::findOrFail($id);
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            $oldPath = public_path('front/assets/images/slider/' . $slider->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images/slider'), $imageName);
            $slider->image = $imageName;
        }

        $slider->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'link' => $request->link,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated successfully.');
    }






    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        // Delete image
        $imagePath = public_path('front/assets/images/slider/' . $slider->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
