@extends('layouts.admin')

@section('title', 'Tambah Banner Baru')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Tambah Banner Baru</h1>
    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
            <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" value="{{ old('title') }}" required>
            @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="subtitle" class="block text-gray-700 font-medium mb-2">Subjudul</label>
            <textarea name="subtitle" id="subtitle" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>{{ old('subtitle') }}</textarea>
            @error('subtitle') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-6">
            <label for="image" class="block text-gray-700 font-medium mb-2">Gambar Banner</label>
            <input type="file" name="image" id="image" class="w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" required>
            <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG, WEBP. Maks: 2MB.</p>
            @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="flex items-center justify-end">
            <a href="{{ route('banners.index') }}" class="text-gray-600 hover:text-gray-800 mr-4">Batal</a>
            <button type="submit" class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Simpan</button>
        </div>
    </form>
</div>
@endsection