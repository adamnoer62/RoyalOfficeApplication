<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('Admin.Banner.index', compact('banners'));
    }

    public function create()
    {
        return view('Admin.Banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $path = $request->file('image')->store('banners', 'public');

        Banner::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image_path' => $path,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    public function edit(Banner $banner)
    {
        return view('Admin.Banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $path = $banner->image_path;
        if ($request->hasFile('image')) {
          
            Storage::disk('public')->delete($banner->image_path);
       
            $path = $request->file('image')->store('banners', 'public');
        }

        $banner->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image_path' => $path,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner berhasil diperbarui.');
    }

    public function destroy(Banner $banner)
    {
        // Hapus file gambar dari storage
        Storage::disk('public')->delete($banner->image_path);
        // Hapus record dari database
        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil dihapus.');
    }

    public function setActive(Banner $banner)
    {
        // Gunakan transaction untuk memastikan konsistensi data
        DB::transaction(function () use ($banner) {
            // Set semua banner menjadi tidak aktif
            Banner::where('is_active', true)->update(['is_active' => false]);
            // Aktifkan banner yang dipilih
            $banner->update(['is_active' => true]);
        });

        return redirect()->route('admin.banners.index')->with('success', "Banner '{$banner->title}' berhasil diaktifkan.");
    }
}