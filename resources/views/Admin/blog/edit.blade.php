@extends('layouts.admin')

@section('title', 'Edit Blog')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <div class="max-w-3xl mx-auto">
            <!-- Card for the Edit Blog Form -->
            <div class="bg-white shadow-lg rounded-lg border-t-4 border-gray-300 overflow-hidden">
                <div class="p-8">
                    <h3 class="text-3xl font-semibold text-gray-800 text-center mb-8">Edit Blog</h3>

                    <!-- Edit Blog Form -->
                    <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title Input -->
                        <div class="form-group mb-6">
                            <label for="title" class="text-xl font-medium text-gray-700">Blog Title</label>
                            <input type="text" class="block w-full p-4 mt-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                        </div>

                        <!-- Content Input -->
                        <div class="form-group mb-6">
                            <label for="content" class="text-xl font-medium text-gray-700">Blog Content</label>
                            <textarea class="block w-full p-4 mt-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="content" name="content" rows="6" required>{{ old('content', $blog->content) }}</textarea>
                        </div>

                        <!-- Image Upload Input -->
                        <div class="form-group mb-6">
                            <label for="image" class="text-xl font-medium text-gray-700">Upload Image</label>
                            <input type="file" class="block w-full p-4 mt-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="image" name="image" accept="image/*">
                            @if ($blog->image)
                                <div class="mt-4">
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-32 h-16 object-cover rounded-md">
                                    <p class="text-sm text-gray-500 mt-2">Current Image</p>
                                </div>
                            @endif
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-between">
                            <button type="submit" class="px-8 py-3 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none transition-all duration-200 transform hover:scale-105 ease-in-out">Update Blog</button>
                            <a href="{{ route('blogs.index') }}" class="px-8 py-3 border-2 border-gray-800 text-gray-800 font-semibold rounded-lg hover:bg-gray-800 hover:text-white focus:outline-none transition-all duration-200 transform hover:scale-105 ease-in-out">Cancel</a>
                        </div>
                    </form>
                    <!-- End Edit Blog Form -->
                </div>
            </div>
        </div>
    </div>
@endsection
