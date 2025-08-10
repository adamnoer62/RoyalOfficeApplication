@extends('layouts.admin')

@section('title', 'Create Blog')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <div class="max-w-3xl mx-auto">
            <!-- Main Card for form -->
            <div class="bg-white shadow-lg rounded-lg border-t-4 border-gray-300 overflow-hidden animate__animated animate__fadeIn animate__delay-1s">
                <div class="p-8">
                    <h3 class="text-3xl font-semibold text-gray-800 text-center mb-8">Create a New Blog</h3>

                    <!-- Form Starts Here -->
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title Input -->
                        <div class="form-group mb-6">
                            <label for="title" class="text-xl font-medium text-gray-700">Blog Title</label>
                            <input type="text" class="block w-full p-4 mt-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="title" name="title" value="{{ old('title') }}" required>
                        </div>

                        <!-- Content Input -->
                        <div class="form-group mb-6">
                            <label for="content" class="text-xl font-medium text-gray-700">Blog Content</label>
                            <textarea class="block w-full p-4 mt-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
                        </div>

                        <!-- Image Upload Input -->
                        <div class="form-group mb-6">
                            <label for="image" class="text-xl font-medium text-gray-700">Upload Image</label>
                            <input type="file" class="block w-full p-4 mt-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="image" name="image" accept="image/*" required>
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-between">
                            <button type="submit" class="px-8 py-3 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none transition-all duration-200 transform hover:scale-105 ease-in-out">Create Blog</button>
                            <a href="{{ route('blogs.index') }}" class="px-8 py-3 border-2 border-gray-800 text-gray-800 font-semibold rounded-lg hover:bg-gray-800 hover:text-white focus:outline-none transition-all duration-200 transform hover:scale-105 ease-in-out">Cancel</a>
                        </div>
                    </form>
                    <!-- Form Ends Here -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <!-- Custom Animation CSS -->
    <style>
        /* Add fade-in animation to the form */
        .animate__fadeIn {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endpush
