@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="relative text-white py-20 md:py-32 mt-2">
    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-cyan-600 opacity-90"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Coworking Space Inspiratif</h1>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">Solusi profesional untuk coworking space dengan kualitas terbaik.</p>
        <a href="#keuntungan" class="bg-white text-yellow-600 font-bold px-8 py-3 rounded-full hover:bg-gray-100 shadow-lg text-lg">Pelajari Lebih Lanjut</a>
    </div>
</section>
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div class="text-left">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-yellow-600">Bekerja, Terhubung, & Berkembang</h2>
            <p class="text-gray-600 mb-4 leading-relaxed">Coworking Space kami bukan hanya tempat untuk bekerja, tapi sebuah ekosistem untuk berkembang. Dapatkan fleksibilitas untuk bekerja sesuai gaya Anda, baik di hot desk yang dinamis maupun dedicated desk yang personal, sambil terhubung
                dengan komunitas profesional dari berbagai industri.</p>
            <p class="text-gray-600 leading-relaxed">Nikmati lingkungan yang dirancang untuk membangkitkan kreativitas dan kolaborasi, lengkap dengan semua fasilitas yang Anda butuhkan untuk tetap produktif.</p>
        </div>
        <div class="w-full h-96 md:h-[500px] rounded-2xl overflow-hidden shadow-2xl order-first md:order-last">
            <div class="swiper h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('image/gambar1.jpeg') }}" alt="Interior Kantor Modern" class="w-full h-full object-cover" /></div>
                    <div class="swiper-slide"><img src="{{ asset('image/gambar2.jpeg') }}" alt="Gedung Perkantoran" class="w-full h-full object-cover" /></div>
                    <div class="swiper-slide"><img src="{{ asset('image/gambar3.jpeg') }}" alt="Tim Profesional" class="w-full h-full object-cover" /></div>
                </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section id="keuntungan" class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Keunggulan Coworking Space Kami</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Fleksibilitas Tinggi</h3>
                <p class="text-gray-600">Pilih paket harian, mingguan, atau bulanan sesuai kebutuhan Anda. Tanpa komitmen jangka panjang.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-2"><path d="M14 19a6 6 0 0 0-12 0"/><circle cx="8" cy="9" r="4"/><path d="M22 19a6 6 0 0 0-6-6 4 4 0 1 0 0-8"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Jaringan & Kolaborasi</h3>
                <p class="text-gray-600">Temukan peluang baru dengan berinteraksi dengan para profesional dan startup inovatif lainnya.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet"><path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"/><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"/><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Biaya Lebih Efisien</h3>
                <p class="text-gray-600">Nikmati fasilitas kantor premium tanpa beban biaya sewa, tagihan, dan perawatan yang mahal.</p>
            </div>
        </div>
    </div>
</section>

<section id="harga" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Paket Coworking Space yang Sesuai untuk Anda</h2>
            <p class="text-gray-600 text-lg">Pilih paket yang sesuai dengan kebutuhan Anda dan nikmati fasilitas kantor premium dengan harga yang kompetitif.</p>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md bg-gray-50 rounded-2xl shadow-2xl p-8 lg:p-10 border-t-4 border-yellow-500 hover-lift">
                <h3 class="text-2xl font-bold text-center text-yellow-600 mb-2">PAKET COWORKING SPACE</h3>
                <p class="text-center text-gray-500 mb-6">Solusi lengkap untuk kenyamanan dan efisiensi.</p>

                <div class="text-center my-8">
                    <span class="text-5xl font-bold text-gray-800">Rp.9.999.000</span>
                    <span class="text-xl text-gray-600">/ Tahun </span>
                </div>

                <ul class="space-y-4 text-gray-600 mb-8">
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Loker
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Internet
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Telepon
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Air minum
                    </li>
                </ul>

                <a href="https://wa.me/+6281290391922" class="bg-yellow-500 text-white text-center font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition duration-300 w-full block text-lg shadow-lg">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection