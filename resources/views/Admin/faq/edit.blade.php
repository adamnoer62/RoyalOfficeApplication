@extends('layouts.admin')

@section('title', 'Edit Faq')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <div class="max-w-3xl mx-auto">
            <!-- Card with similar styling to the Blog edit form -->
            <div class="bg-white shadow-lg rounded-lg border-t-4 border-gray-300 overflow-hidden">
                <div class="p-8">
                    <h3 class="text-3xl font-semibold text-gray-800 mb-6">Edit FAQ</h3>

                    <form action="{{ route('faqs.update', $faq) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Question Input -->
                        <div class="mb-6">
                            <label for="question" class="block text-xl font-medium text-gray-700">Question</label>
                            <input type="text" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="question" name="question" value="{{ old('question', $faq->question) }}" required>
                        </div>

                        <!-- Answer Input -->
                        <div class="mb-6">
                            <label for="answer" class="block text-xl font-medium text-gray-700">Answer</label>
                            <textarea class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out transform hover:scale-105" id="answer" name="answer" rows="6" required>{{ old('answer', $faq->answer) }}</textarea>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="flex justify-between">
                            <button type="submit" class="px-8 py-3 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none transition-all duration-200 transform hover:scale-105 ease-in-out">
                                Update FAQ
                            </button>
                            <a href="{{ route('faqs.index') }}" class="px-8 py-3 border-2 border-gray-800 text-gray-800 font-semibold rounded-lg hover:bg-gray-800 hover:text-white focus:outline-none transition-all duration-200 transform hover:scale-105 ease-in-out">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
