<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index', compact('pages'));
    }



    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'description'      => 'nullable|string',
            'meta_title'       => 'nullable|string|max:255',
            'meta_keywords'    => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $page = Page::findOrFail($id);

        $imageName = $page->image;

        // Handle image upload
        if ($request->hasFile('image')) {

            // delete old image
            if ($page->image && file_exists(public_path('front/assets/images/pages/' . $page->image))) {
                unlink(public_path('front/assets/images/pages/' . $page->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/assets/images/pages'), $imageName);
        }

        $page->update([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'description'      => $request->description,
            'meta_title'       => $request->meta_title,
            'meta_keywords'    => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image'            => $imageName,
        ]);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }
}
