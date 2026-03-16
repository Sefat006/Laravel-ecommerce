<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }




    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'review' => 'required|string',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images'), $imageName);
        }

        Testimonial::create([
            'name' => $request->name,
            'profession' => $request->profession,
            'review' => $request->review,
            'image' => $imageName,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }



    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }




    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'review' => 'required|string',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            $oldPath = public_path('front/assets/images/' . $testimonial->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images'), $imageName);
            $testimonial->image = $imageName;
        }

        $testimonial->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'review' => $request->review,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial is updated successfully.');
    }





    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete image
        $imagePath = public_path('front/assets/images/' . $testimonial->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'testimonial deleted successfully.');
    }
}
