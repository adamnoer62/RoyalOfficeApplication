@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="relative text-white py-20 md:py-32">
    <div class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-teal-700 opacity-90"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1590650213165-c63523315a67?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
            Jasa Pendirian CV - Royale Office
        </h1>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
            Solusi profesional untuk pendirian CV dengan kualitas terbaik.
        </p>
        <a href="#keuntungan" class="bg-white text-yellow-700 font-bold px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 text-lg shadow-lg">
            Pelajari Lebih Lanjut
        </a>
    </div>
</section>

    <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Mulai Usaha Anda dengan Langkah Pasti</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">Persekutuan Komanditer (CV) adalah pilihan populer bagi para pengusaha yang ingin memulai bisnis dengan struktur yang lebih sederhana. Kami menawarkan layanan lengkap untuk mendirikan CV Anda, memastikan semua persyaratan hukum terpenuhi
                        dengan benar dan efisien.</p>
                    <p class="text-gray-600 leading-relaxed">Dari pembuatan akta pendirian di hadapan notaris hingga pendaftaran di Pengadilan Negeri, tim kami siap mendampingi Anda di setiap langkah, sehingga Anda dapat segera memulai operasional bisnis.</p>
                </div>
                <div class="w-full h-96 md:h-[500px] rounded-2xl overflow-hidden shadow-2xl order-first md:order-last">
                    <div class="swiper h-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1516594798947-e65505dbb29d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Diskusi Bisnis" class="w-full h-full object-cover" /></div>
                            <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1600880292210-85948a74e200?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Partner Bisnis" class="w-full h-full object-cover" /></div>
                            <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2148&q=80" alt="Dokumen Legal" class="w-full h-full object-cover" /></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="keuntungan" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Kemudahan dalam Mendirikan CV</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                        <div class="bg-gray-200 text-gray-800 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check-2"><path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M3 15h6"/><path d="m9 15 2 2 4-4"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Solusi Praktis & Cepat</h3>
                        <p class="text-gray-600">Proses pendirian CV yang lebih sederhana dan cepat dibandingkan badan usaha lain.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                        <div class="bg-gray-200 text-gray-800 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-archive"><path d="M22 8v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8"/><rect width="20" height="5" x="2" y="3" rx="1"/><path d="M10 12h4"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Paket Layanan Lengkap</h3>
                        <p class="text-gray-600">Kami menyediakan paket lengkap termasuk akta notaris, pendaftaran, dan pengurusan NIB.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                        <div class="bg-gray-200 text-gray-800 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-handshake"><path d="M14.5 16.5a1.8 1.8 0 0 0-2.5 0l-4 4a1.8 1.8 0 0 0 2.5 2.5l4-4a1.8 1.8 0 0 0 0-2.5Z"/><path d="m18.5 12.5 4-4a1.8 1.8 0 0 0-2.5-2.5l-4 4a1.8 1.8 0 0 0 2.5 2.5Z"/><path d="m13.5 5.5-4 4a1.8 1.8 0 0 0 2.5 2.5l4-4a1.8 1.8 0 0 0-2.5-2.5Z"/><path d="M2 14l1 1"/><path d="m5 11 1 1"/><path d="M12 4l1 1"/><path d="m19 11 1 1"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Pendampingan Profesional</h3>
                        <p class="text-gray-600">Tim kami akan memberikan arahan dan memastikan Anda tidak kebingungan selama proses berlangsung.</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="harga" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Investasi Cerdas untuk Bisnis Anda</h2>
                    <p class="text-gray-600 text-lg">Satu paket lengkap dengan harga transparan untuk mendukung pertumbuhan bisnis Anda dari awal.</p>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md bg-gray-50 rounded-2xl shadow-2xl p-8 lg:p-10 border-t-4 border-yellow-500 hover-lift">
                        <h3 class="text-2xl font-bold text-center text-yellow-600 mb-2">PAKET PENDIRIAN CV</h3>
                        <p class="text-center text-gray-500 mb-6">Solusi lengkap untuk pendirian CV.</p>

                        <div class="text-center my-8">
                            <span class="text-5xl font-bold text-gray-800">Rp 2.200.000</span>
                            <span class="text-xl text-gray-600">/ tahun</span>
                        </div>

                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Akta Notaris
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Pendaftaran
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Pengurusan NIB
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Pendampingan Profesional
                            </li>
                        </ul>

                        <a href="#" class="bg-yellow-500 text-white text-center font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition duration-300 w-full block text-lg shadow-lg">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection