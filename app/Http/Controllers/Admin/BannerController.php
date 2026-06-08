<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends BaseAdminController
{
    public function index(Request $request)
    {
        $query = Banner::query();

        if ($search = $request->query('q')) {
            $query->where('title', 'like', "%{$search}%");
        }

        $banners = $query->latest()->paginate(10)->withQueryString();

        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'link' => 'nullable|url|max:255',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->putFile('banners', $request->file('image'));
        }

        $data['status'] = $request->boolean('status');
        Banner::create($data);

        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'link' => 'nullable|url|max:255',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }
            $data['image'] = Storage::disk('public')->putFile('banners', $request->file('image'));
        }

        $data['status'] = $request->boolean('status');
        $banner->update($data);

        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil diperbarui.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil dihapus.');
    }
}
