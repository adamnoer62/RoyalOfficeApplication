@extends('layouts.app')

@section('title', 'Contact Us - Royale Office')
@section('description', 'Temukan Alamat dan Kontak Royale Office')

@section('content')
<section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us - Royale Office</h1>
        <p class="text-xl mb-8">Temukan Alamat dan Kontak Royale Office</p>
    </div>
</section>

<!-- Contact Form -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Send Us a Message</h2>

            <!-- Show success message -->
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 mb-4 rounded-md">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- Contact Form -->
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-md" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full py-3 bg-yellow-600 hover:bg-yellow-700 text-white font-semibold rounded-md transition duration-200">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
