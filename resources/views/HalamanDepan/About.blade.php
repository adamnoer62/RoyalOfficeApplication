@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Royale Office</h1>
        <p class="text-xl mb-8">Partner Terpercaya untuk Solusi Bisnis Anda</p>
    </div>
</section>

<!-- Company Story -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Cerita Kami</h2>
                <p class="text-gray-600 mb-4">
                    Royale Office didirikan pada tahun 2015 dengan visi menjadi penyedia solusi bisnis terdepan di Indonesia. Kami memahami tantangan yang dihadapi oleh pengusaha modern, terutama dalam hal efisiensi operasional dan image profesional.
                </p>
                <p class="text-gray-600 mb-6">
                    Dengan pengalaman lebih dari 8 tahun, kami telah melayani ribuan klien dari berbagai industri, mulai dari startup hingga perusahaan multinasional. Komitmen kami adalah memberikan layanan berkualitas tinggi dengan harga yang kompetitif.
                </p>
            </div>
            <div>
                <img src="RoyalOffice.jpeg" alt="Office" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Misi & Visi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="target" class="w-8 h-8 text-yellow-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Misi Kami</h3>
                <p class="text-gray-600 text-center">
                    Memberikan solusi bisnis yang inovatif dan terjangkau untuk membantu setiap pengusaha mencapai kesuksesan dengan layanan profesional dan dukungan terbaik.
                </p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="eye" class="w-8 h-8 text-yellow-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Visi Kami</h3>
                <p class="text-gray-600 text-center">
                    Menjadi penyedia solusi bisnis nomor satu di Indonesia yang dikenal karena inovasi, kualitas layanan, dan komitmen terhadap kesuksesan klien.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Tim Profesional Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="team-grid">
            <!-- Team members will be populated by JavaScript -->
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Nilai-Nilai Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8" id="values-grid">
            <!-- Values will be populated by JavaScript -->
        </div>
    </div>
</section>


@endsection