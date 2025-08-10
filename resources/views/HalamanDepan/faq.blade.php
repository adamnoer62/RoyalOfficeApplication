@extends('layouts.app')

@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Pusat Bantuan & FAQ - Royale Office</h1>
        <p class="text-xl mb-8">Temukan jawaban cepat untuk pertanyaan umum mengenai layanan kami.</p>
    </div>
    <div class="max-w-2xl mx-auto relative">
        <input type="text" id="faq-search" placeholder="Ketik pertanyaan Anda di sini..." class="w-full py-4 pl-12 pr-4 rounded-full text-gray-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 transition duration-300">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
    </div>
</section>

<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div id="faq-container" class="max-w-4xl mx-auto space-y-12">
            
            @foreach ($faqs as $faq)
                <div class="faq-category">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 border-b-2 border-indigo-200 pb-3">{{ $faq->category ?? 'General FAQ' }}</h2>
                    <div class="space-y-4">
                        <details class="faq-item bg-white p-6 rounded-lg shadow-sm group">
                            <summary class="font-semibold text-lg cursor-pointer flex justify-between items-center">
                                {{ $faq->question }}
                                <svg class="w-5 h-5 text-indigo-500 chevron" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </summary>
                            <div class="mt-4 text-gray-600 leading-relaxed">
                                {{ $faq->answer }}
                            </div>
                        </details>
                    </div>
                </div>
            @endforeach

            <div class="text-center pt-8 faq-not-found hidden">
                <h3 class="text-2xl font-bold text-gray-700">Oops! Pertanyaan tidak ditemukan.</h3>
                <p class="text-gray-500 mt-2">Coba gunakan kata kunci yang berbeda atau lihat kategori di atas.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container mx-auto px-6 py-16">
        <div class="bg-gray-100 rounded-2xl p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Masih Belum Menemukan Jawaban?</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Tim kami selalu siap membantu Anda. Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan lebih lanjut.</p>
            <a href="#" class="bg-indigo-600 text-white font-bold px-8 py-3 rounded-full hover:bg-indigo-700 transition duration-300 inline-block">Hubungi Tim Support</a>
        </div>
    </div>
</section>
@endsection
