@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
    <section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Layanan Virtual Office - Royale Office</h1>
            <p class="text-xl mb-8">Dapatkan alamat bisnis prestisius, fasilitas lengkap, dan efisiensi biaya tanpa perlu kantor fisik.</p>
            <a href="#keuntungan" class="bg-white text-yellow-600 font-bold px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 text-lg shadow-lg">Lihat Keuntungan</a>
        </div>
    </section>

        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div class="w-full h-96 md:h-[500px] rounded-2xl overflow-hidden shadow-2xl">
                    <div class="swiper h-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('image/gambar1.jpeg') }}" alt="Interior Kantor Modern" class="w-full h-full object-cover" /></div>
                            <div class="swiper-slide"><img src="{{ asset('image/gambar2.jpeg') }}" alt="Gedung Perkantoran" class="w-full h-full object-cover" /></div>
                            <div class="swiper-slide"><img src="{{ asset('image/gambar3.jpeg') }}" alt="Tim Profesional" class="w-full h-full object-cover" /></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="text-left">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-yellow-600">Apa itu Kantor Virtual?</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kantor virtual (Virtual Office) adalah sebuah layanan yang menyediakan semua yang Anda butuhkan untuk menjalankan bisnis tanpa memerlukan ruang kantor fisik. Ini adalah solusi cerdas bagi startup, freelancer, dan perusahaan yang ingin menekan biaya operasional
                        sambil tetap menjaga citra profesional.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Dengan Royale Office, Anda mendapatkan alamat bisnis di lokasi strategis, layanan resepsionis profesional untuk menangani surat dan panggilan, serta akses ke ruang pertemuan kapan pun Anda butuhkan. Fokus pada pengembangan bisnis Anda, biarkan kami yang
                        mengurus administrasi kantor.
                    </p>
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
                        <div class="bg-green-100 text-green-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
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

        <section id="harga" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Investasi Cerdas untuk Bisnis Anda</h2>
                    <p class="text-gray-600 text-lg">Harga virtual office nya mulai dari Rp. 2.499.000 dengan fasilitas</p>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md bg-gray-50 rounded-2xl shadow-2xl p-8 lg:p-10 border-t-4 border-yellow-500 hover-lift">
                        <h3 class="text-2xl font-bold text-center text-yellow-600 mb-2">PAKET PROFESIONAL</h3>
                        <p class="text-center text-gray-500 mb-6">Solusi lengkap untuk citra dan efisiensi.</p>

                        <div class="text-center my-8">
                            <span class="text-5xl font-bold text-gray-800"> Rp. 2.499.000</span>
                            <span class="text-xl text-gray-600">/ tahun</span>
                        </div>

                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Alamat bisnis di lokasi yang strategis
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Layanan resepsionis
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Notifikasi surat menyurat via email
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Akses ruang meeting 8/bulan
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Godybag (pulpen, k.nama direktur, notes)
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