<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $users = Admin::latest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }




    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6|confirmed',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'status' => 'required|in:0,1',
        ]);

        $filename = null;

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('front/assets/images/'), $filename);
        }

        // Create user
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // ✅ hashed
            'image' => $filename,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }






    public function edit($id)
    {
        $user = Admin::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }




    public function update(Request $request, $id)
    {
        $user = Admin::findOrFail($id);

        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $id,
            'password' => 'nullable|min:6|confirmed', // 👈 important
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'status' => 'required|in:0,1',
        ]);

        // Update basic fields
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;

        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        // Image upload
        if ($request->hasFile('image')) {

            $oldPath = public_path('front/assets/images/' . $user->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('front/assets/images/'), $filename);

            $user->image = $filename;
        }

        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'User updated successfully.');
    }







    public function destroy($id)
    {
        $user = Admin::findOrFail($id);
        // Delete image
        $imagePath = public_path('front/assets/images/' . $user->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User is deleted successfully.');
    }
}
