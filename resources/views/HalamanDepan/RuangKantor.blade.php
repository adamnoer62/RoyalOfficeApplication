@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="relative text-white py-20 md:py-32">
    <div class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-teal-700 opacity-90"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
            Ruang Kantor Profesional & Fleksibel - Royale Office
        </h1>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
            Tingkatkan produktivitas dan kolaborasi tim Anda di lingkungan kerja yang modern dan inspiratif.
        </p>
        <a href="#keuntungan" class="bg-white text-yellow-700 font-bold px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 text-lg shadow-lg">
            Temukan Ruang Anda
        </a>
    </div>
</section>

    <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-yellow-700">Ruang Kantor untuk Setiap Kebutuhan</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Di Royale Office, kami menyediakan ruang kantor yang dirancang untuk mendukung kesuksesan bisnis Anda. Baik Anda membutuhkan kantor pribadi untuk tim Anda, meja khusus di area coworking, atau ruang kerja yang fleksibel, kami memiliki solusinya.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Setiap ruang dilengkapi dengan furnitur modern, internet berkecepatan tinggi, dan akses ke fasilitas premium. Ciptakan lingkungan kerja yang ideal di lokasi strategis tanpa perlu khawatir tentang manajemen gedung dan biaya tak terduga.
                    </p>
                </div>
                <div class="w-full h-96 md:h-[500px] rounded-2xl overflow-hidden shadow-2xl order-first md:order-last">
                    <div class="swiper h-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('image/gambar1.jpeg') }}" alt="Interior Kantor Modern" class="w-full h-full object-cover" /></div>
                            <div class="swiper-slide"><img src="{{ asset('image/gambar2.jpeg') }}" alt="Gedung Perkantoran" class="w-full h-full object-cover" /></div>
                            <div class="swiper-slide"><img src="{{ asset('image/gambar3.jpeg') }}" alt="Tim Profesional" class="w-full h-full object-cover" /></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="keuntungan" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Keuntungan Memilih Royale Office</h2>
                    <p class="text-gray-600 text-lg">Kami menawarkan lebih dari sekadar alamat. Kami memberikan fondasi untuk kesuksesan bisnis Anda.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                        <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gem"><path d="M6 3h12l4 6-10 13L2 9Z"/><path d="M12 22V9"/><path d="m3.5 8.5 17 0"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Alamat Bisnis Prestisius</h3>
                        <p class="text-gray-600">Tingkatkan citra perusahaan Anda dengan alamat di pusat bisnis paling bergengsi di kota.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                        <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-cards"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M21 12V7a2 2 0 0 0-2-2H7"/><path d="M3 15h11a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Hemat Biaya & Fleksibel</h3>
                        <p class="text-gray-600">Nikmati penghematan biaya operasional hingga 90% dengan paket layanan yang dapat disesuaikan.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                        <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headset"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"/><path d="M12 14a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2Z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Dukungan Profesional</h3>
                        <p class="text-gray-600">Tim customer service kami siap membantu semua kebutuhan administrasi bisnis Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="ruang-kantor" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Ruang Kantor yang Tepat untuk Bisnis Anda</h2>
                    <p class="text-gray-600 text-lg">Fleksibilitas dan kenyamanan dalam satu paket untuk mendukung produktivitas tim Anda.</p>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md bg-gray-50 rounded-2xl shadow-2xl p-8 lg:p-10 border-t-4 border-yellow-500 hover-lift">
                        <h3 class="text-2xl font-bold text-center text-yellow-600 mb-2">PAKET KANTOR</h3>
                        <p class="text-center text-gray-500 mb-6">Lingkungan kerja profesional dan inspiratif.</p>

                        <div class="text-center my-8">
                            <span class="text-5xl font-bold text-gray-800">Rp 3.500.000</span>
                            <span class="text-xl text-gray-600">/ bulan</span>
                        </div>

                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Fasilitas lengkap di lokasi premium
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Dukungan operasional dan teknis
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Internet berkecepatan tinggi
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Akses ruang meeting gratis
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