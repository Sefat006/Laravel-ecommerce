<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }





    public function create()
    {
        return view('admin.categories.create');
    }




    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $category = Category::findOrFail($id);

        if ($request->hasFile('image')) {
            // Optional: delete old image if exists
            if ($category->image && file_exists(public_path('front/assets/images/' . $category->icon))) {
                unlink(public_path('front/assets/images/' . $category->icon));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images'), $imageName);
            $category->icon = $imageName;
        }

        $category->update([
            'en_category_name' => $request->en_category_name,
            'en_short_info'   => $request->en_short_info,
            'desc'             => $request->desc,
            'meta_title'       => $request->meta_title,
            'meta_dsc'         => $request->meta_dsc,
            'meta_keywords'    => $request->meta_keywords,
            'status'           => $request->status,
            'image'            => $category->image, // This now contains the new name or the old one
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }





    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }




    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'en_category_name' => 'required|string|max:255',
    //         'en_short_info'    => 'required|string|max:255',
    //         'desc'             => 'nullable|string',
    //         'meta_title'       => 'nullable|string',
    //         'meta_dsc'         => 'nullable|string',
    //         'meta_keywords'    => 'nullable|string',
    //         'status'           => 'required|boolean',
    //         'image'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     $category = Category::findOrFail($id);
    //     $imageName = $category->icon;

    //     if ($request->hasFile('image')) {
    //         // Delete old image if it exists
    //         if ($category->icon && file_exists(public_path('front/assets/images/' . $category->icon))) {
    //             unlink(public_path('front/assets/images/' . $category->image));
    //         }

    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->move(public_path('front/assets/images'), $imageName);
    //         $category->icon = $imageName;
    //     }

    //     $category->update([
    //         'en_category_name' => $request->en_category_name,
    //         'en_short_info'    => $request->en_short_info,
    //         'desc'             => $request->desc,
    //         'meta_title'       => $request->meta_title,
    //         'meta_dsc'         => $request->meta_dsc,
    //         'meta_keywords'    => $request->meta_keywords,
    //         'status'           => $request->status,
    //         'icon'            => $category->image,
    //     ]);

    //     return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    // }


    public function update(Request $request, $id)
    {
        $request->validate([
            'en_category_name' => 'required|string|max:255',
            'en_short_info'    => 'required|string|max:255',
            'desc'             => 'nullable|string',
            'meta_title'       => 'nullable|string',
            'meta_dsc'         => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
            'status'           => 'required|boolean',
            'image'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $category = Category::findOrFail($id);

        $iconName = $category->icon; // ✅ start with existing icon

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($category->icon && file_exists(public_path('front/assets/images/' . $category->icon))) {
                unlink(public_path('front/assets/images/' . $category->icon)); // ✅ was $category->image
            }

            $iconName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images'), $iconName);
        }

        $category->update([
            'en_category_name' => $request->en_category_name,
            'en_short_info'    => $request->en_short_info,
            'desc'             => $request->desc,
            'meta_title'       => $request->meta_title,
            'meta_dsc'         => $request->meta_dsc,
            'meta_keywords'    => $request->meta_keywords,
            'status'           => $request->status,
            'icon'             => $iconName, // ✅ always correct value
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }





    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // Delete image
        $imagePath = public_path('front/assets/images/' . $category->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category is deleted successfully');
    }
}
