<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Menampilkan semua layanan
    public function index()
    {
        $services = Service::all();
        return view('Admin.services.index', compact('services'));
    }

    // Menampilkan form untuk menambah layanan
    public function create()
    {
        return view('Admin.services.create');
    }

    // Menyimpan layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'features' => 'required|array',
        ]);

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'features' => json_encode($request->features), // Menyimpan fitur sebagai JSON
        ]);

        return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit layanan
    public function edit(Service $service)
    {
        return view('Admin.services.edit', compact('service'));
    }

    // Memperbarui layanan
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'features' => 'required|array',
        ]);

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'features' => json_encode($request->features),
        ]);

        return redirect()->route('services.index')->with('success', 'Layanan berhasil diperbarui!');
    }

    // Menghapus layanan
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus!');
    }
}
