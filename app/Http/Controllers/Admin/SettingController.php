<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);

        $request->validate([
            'site_name'     => 'required|string|max:255',
            'address'       => 'required|string|max:255',
            'phone'         => 'required|string',
            'email'         => 'required|email',
            'fb'            => 'nullable|url',
            'twitter'       => 'nullable|url',
            'linkedin'      => 'nullable|url',
            'instagram'     => 'nullable|url',
            'copyright'     => 'nullable|string',
            'map_iframe'    => 'nullable|string',
            'meta_title'    => 'required|string|max:60',
            'meta_desc'     => 'required|string|max:160',
            'meta_keywords' => 'required|string',
            'logo'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'favicon'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'og_image'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Keep old images by default
        $logoName    = $setting->logo;
        $faviconName = $setting->favicon;
        $ogImageName = $setting->og_image;

        // ===== LOGO =====
        if ($request->hasFile('logo')) {
            if ($setting->logo && file_exists(public_path('front/assets/images/settings/' . $setting->logo))) {
                unlink(public_path('front/assets/images/settings/' . $setting->logo));
            }

            $logoName = time() . '_logo.' . $request->logo->extension();
            $request->logo->move(public_path('front/assets/images/settings'), $logoName);
        }

        // ===== FAVICON =====
        if ($request->hasFile('favicon')) {
            if ($setting->favicon && file_exists(public_path('front/assets/images/settings/' . $setting->favicon))) {
                unlink(public_path('front/assets/images/settings/' . $setting->favicon));
            }

            $faviconName = time() . '_favicon.' . $request->favicon->extension();
            $request->favicon->move(public_path('front/assets/images/settings'), $faviconName);
        }

        // ===== OG IMAGE =====
        if ($request->hasFile('og_image')) {
            if ($setting->og_image && file_exists(public_path('front/assets/images/settings/' . $setting->og_image))) {
                unlink(public_path('front/assets/images/settings/' . $setting->og_image));
            }

            $ogImageName = time() . '_og.' . $request->og_image->extension();
            $request->og_image->move(public_path('front/assets/images/settings'), $ogImageName);
        }

        // ===== UPDATE DATA =====
        $setting->update([
            'site_name'     => $request->site_name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'fb'            => $request->fb,
            'twitter'       => $request->twitter,
            'linkedin'      => $request->linkedin,
            'instagram'     => $request->instagram,
            'copyright'     => $request->copyright,
            'map_iframe'    => $request->map_iframe,
            'meta_title'    => $request->meta_title,
            'meta_desc'     => $request->meta_desc,
            'meta_keywords' => $request->meta_keywords,
            'logo'          => $logoName,
            'favicon'       => $faviconName,
            'og_image'      => $ogImageName,
        ]);

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
