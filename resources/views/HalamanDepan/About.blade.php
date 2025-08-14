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
                    Royale Office didirikan pada tahun 2025 dengan visi Menjadi mitra strategis yang berkelanjutan memalui layanan professional yang terpercaya, solutif dan berorientasi pada pertumbuhan Bersama.
                </p>
                <p class="text-gray-600 mb-6">
                    Berawal dari sebuah tim kecil, Royal Office menghadirkan layanan Virtual Office yang memadukan alamat prestisius, fasilitas administrasi lengkap, dan dukungan perizinan usaha. Semua itu dirancang untuk membantu pelaku usaha menghemat biaya operasional tanpa mengorbankan profesionalisme.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/logo.jpeg') }}" alt="Office" class="rounded-xl shadow-lg w-full h-80 md:h-96">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Misi & Visi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Misi -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="target" class="w-8 h-8 text-yellow-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Misi Kami</h3>
                <ol class="list-decimal list-inside text-gray-600 text-left space-y-2">
                    <li>Menyediakan layanan kantor modern berbasis teknologi dengan standar kualitas tinggi.</li>
                    <li>Menciptakan lingkungan kerja yang nyaman, profesional, responsif, strategis, dan terjangkau.</li>
                    <li>Mendampingi klien di setiap tahap perkembangan bisnis mereka.</li>
                    <li>Menjalin hubungan jangka panjang yang saling menguntungkan dengan mitra dan klien.</li>
                    <li>Menjadi mitra strategis yang berkesinambungan dalam mendukung pertumbuhan bisnis.</li>
                    <li>Terus berinovasi dan meningkatkan kompetensi tim secara berkelanjutan.</li>
                </ol>
            </div>
            <!-- Visi -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="eye" class="w-8 h-8 text-yellow-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Visi Kami</h3>
                <p class="text-gray-600 text-center">
                    Menjadi mitra strategis terpercaya yang mendorong pertumbuhan bersama melalui layanan profesional, solutif, dan berkelanjutan.
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