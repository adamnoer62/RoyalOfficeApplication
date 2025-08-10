@extends('layouts.app')

@section('title', $blog->title)
@section('description', Str::limit($blog->content, 150))

@section('content')
<section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $blog->title }}</h1>
        <p class="text-xl mb-8">{{ $blog->created_at->format('d M Y') }}</p>
    </div>
</section>

<!-- Full Blog Content -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
            <div class="p-8">
                <p class="text-gray-600 mb-4">{{ $blog->content }}</p>
                <!-- Optional: Add any additional details or call-to-action here -->
            </div>
        </div>
    </div>
</section>

<!-- Optionally, add related blog posts or other sections here -->

@endsection
