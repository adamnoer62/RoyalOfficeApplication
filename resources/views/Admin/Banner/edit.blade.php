@extends('layouts.admin')

@section('title', 'Edit Banner')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Edit Banner</h1>
    <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
            <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" value="{{ old('title', $banner->title) }}" required>
            @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="subtitle" class="block text-gray-700 font-medium mb-2">Subjudul</label>
            <textarea name="subtitle" id="subtitle" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>{{ old('subtitle', $banner->subtitle) }}</textarea>
            @error('subtitle') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-6">
            <label for="image" class="block text-gray-700 font-medium mb-2">Gambar Banner</label>
            <div class="my-2">
                <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Current Banner" class="w-48 h-auto rounded-lg">
            </div>
            <input type="file" name="image" id="image" class="w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
            <p class="mt-1 text-sm text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
            @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="flex items-center justify-end">
            <a href="{{ route('banners.index') }}" class="text-gray-600 hover:text-gray-800 mr-4">Batal</a>
            <button type="submit" class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Update</button>
        </div>
    </form>
</div>
@endsection