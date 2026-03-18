<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brands.index', compact('brands'));
    }



    public function create()
    {
        return view('admin.brands.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            'en_brand_name' => 'required|string|max:255',
            'status'        => 'required|boolean',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images/brands'), $imageName);
        }

        Brand::create([
            'en_brand_name' => $request->en_brand_name,
            'slug'          => Str::slug($request->en_brand_name) . '-' . uniqid(),
            'image'         => $imageName,
            'status'        => $request->status,
        ]);

        return redirect()->route('admin.brands.index')
            ->with('success', 'Brand created successfully.');
    }



    // ✅ Edit
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }



    // ✅ Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'en_brand_name' => 'required|string|max:255',
            'status'        => 'required|boolean',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $brand = Brand::findOrFail($id);

        $imageName = $brand->image;

        if ($request->hasFile('image')) {

            // delete old image
            if ($brand->image && file_exists(public_path('front/assets/images/brands/' . $brand->image))) {
                unlink(public_path('front/assets/images/brands/' . $brand->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images/brands'), $imageName);
        }

        $brand->update([
            'en_brand_name' => $request->en_brand_name,
            'slug'          => Str::slug($request->en_brand_name) . '-' . uniqid(),
            'image'         => $imageName,
            'status'        => $request->status,
        ]);

        return redirect()->route('admin.brands.index')
            ->with('success', 'Brand updated successfully.');
    }



    // ✅ Destroy
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        // delete image
        if ($brand->image && file_exists(public_path('front/assets/images/brands/' . $brand->image))) {
            unlink(public_path('front/assets/images/brands/' . $brand->image));
        }

        $brand->delete();

        return redirect()->route('admin.brands.index')
            ->with('success', 'Brand deleted successfully.');
    }
}
