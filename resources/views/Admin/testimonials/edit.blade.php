@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Edit Testimonial</h1>

    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $testimonial->name }}" required>
        </div>

        <div>
            <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Posisi</label>
            <input type="text" name="position" id="position" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $testimonial->position }}" required>
        </div>

        <div>
            <label for="testimonial" class="block text-gray-700 text-sm font-bold mb-2">Testimonial</label>
            <textarea name="testimonial" id="testimonial" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" required>{{ $testimonial->testimonial }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
    </form>
@endsection

