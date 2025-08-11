<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    // Menampilkan semua testimonial
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('Admin.testimonials.index', compact('testimonials'));
    }

    // Form untuk membuat testimonial baru
    public function create()
    {
        return view('Admin.testimonials.create');
    }

    // Menyimpan testimonial baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'testimonial' => 'required|string',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'position' => $request->position,
            'testimonial' => $request->testimonial,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil ditambahkan');
    }

    // Form untuk mengedit testimonial
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('Admin.testimonials.edit', compact('testimonial'));
    }

    // Mengupdate testimonial
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'testimonial' => 'required|string',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'name' => $request->name,
            'position' => $request->position,
            'testimonial' => $request->testimonial,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil diupdate');
    }

    // Menghapus testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil dihapus');
    }
}
