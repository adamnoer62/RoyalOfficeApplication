@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog Royale Office</h1>
        <p class="text-xl mb-8">Tips, Artikel, dan Insight Terbaru untuk Bisnis Anda</p>
    </div>
</section>

<!-- Blog Content -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Featured Article -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold mb-8 text-gray-800">Artikel Pilihan</h2>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Featured" class="w-full h-64 object-cover">
                <div class="p-8">
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Virtual Office</span>
                    <h3 class="text-2xl font-bold mt-4 mb-3">5 Keuntungan Virtual Office untuk Startup</h3>
                    <p class="text-gray-600 mb-4">Pelajari bagaimana virtual office dapat membantu startup menghemat biaya operasional sambil tetap mempertahankan image profesional...</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2 text-gray-500 text-sm">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>15 Jan 2025</span>
                        </div>
                        <button class="text-yellow-600 hover:text-yellow-800 font-semibold">Baca Selengkapnya →</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div>
            <h2 class="text-3xl font-bold mb-8 text-gray-800">Artikel Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">
                <!-- Blog posts will be populated by JavaScript -->
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-yellow-600 hover:bg-yellow-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                Muat Artikel Lainnya
            </button>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Dapatkan Update Terbaru</h2>
        <p class="text-xl mb-8 text-gray-300">Berlangganan newsletter untuk mendapatkan artikel bisnis terbaru</p>
        <div class="max-w-md mx-auto flex">
            <input type="email" placeholder="Email Anda" class="flex-1 px-4 py-3 rounded-l-lg text-gray-900">
            <button class="bg-yellow-600 hover:bg-yellow-700 px-6 py-3 rounded-r-lg font-semibold transition-colors duration-300">
                Berlangganan
            </button>
        </div>
    </div>
</section>



@endsection