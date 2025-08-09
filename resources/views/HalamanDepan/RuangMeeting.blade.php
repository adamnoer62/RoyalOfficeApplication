@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')
<section class="relative text-white py-20 md:py-32">
    <div class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-teal-700 opacity-90"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1573496773905-f5b17e76b254?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
            Ruang Meeting Profesional - Royale Office
        </h1>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
            Solusi profesional untuk ruang meeting dengan kualitas terbaik.
        </p>
        <a href="#keuntungan" class="bg-white text-yellow-700 font-bold px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 text-lg shadow-lg">
            Pelajari Lebih Lanjut
        </a>
    </div>
</section>

    <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-yellow-600">Rapat Sukses di Lokasi Terbaik</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">Kami menyediakan ruang meeting yang dirancang untuk produktivitas. Dari rapat dewan direksi, presentasi klien, hingga sesi brainstorming tim, fasilitas kami siap mendukung segala kebutuhan Anda. Lokasi strategis kami memastikan kemudahan
                        akses bagi semua peserta.</p>
                    <p class="text-gray-600 leading-relaxed">Setiap ruangan dilengkapi dengan teknologi modern, koneksi internet stabil, dan perabotan yang nyaman untuk memastikan rapat Anda berjalan lancar dan efisien.</p>
                </div>
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
            </div>
        </section>

        <section id="keuntungan" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Fasilitas Ruang Meeting Kami</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                        <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-presentation"><path d="M2 3h20v12h-4a1 1 0 0 1-1-1v-1H7v1a1 1 0 0 1-1 1H2Z"/><path d="M12 18v4"/><path d="M8 22h8"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Teknologi Canggih</h3>
                        <p class="text-gray-600">Dilengkapi proyektor HD, smart TV, papan tulis kaca, dan koneksi Wi-Fi berkecepatan tinggi.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                        <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Lokasi Strategis</h3>
                        <p class="text-gray-600">Berada di pusat bisnis yang mudah diakses dengan transportasi umum maupun kendaraan pribadi.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg hover-lift h-full flex flex-col">
                        <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coffee"><path d="M17 8h-7a4 4 0 0 0-4 4v2a4 4 0 0 0 4 4h7a4 4 0 0 0 4-4v-2a4 4 0 0 0-4-4Z"/><path d="M20 12v4"/><path d="M4 12v4"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Layanan Profesional</h3>
                        <p class="text-gray-600">Dukungan staf di tempat dan pilihan konsumsi (kopi, teh, makanan ringan) sesuai permintaan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="harga" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Penyewaan Ruang Meeting</h2>
                    <p class="text-gray-600 text-lg">Satu paket lengkap dengan harga transparan untuk mendukung pertumbuhan bisnis Anda dari awal.</p>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md bg-gray-50 rounded-2xl shadow-2xl p-8 lg:p-10 border-t-4 border-yellow-500 hover-lift">
                        <h3 class="text-2xl font-bold text-center text-yellow-600 mb-2">HARGA PENYEWAAN RUANG MEETING</h3>
                        <p class="text-center text-gray-500 mb-6">Solusi lengkap untuk citra dan efisiensi.</p>

                        <div class="text-center my-8">
                            <span class="text-5xl font-bold text-gray-800">Rp 1.000.000</span>
                            <span class="text-xl text-gray-600">/ hari</span>
                        </div>

                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Ruang meeting yang nyaman dan modern
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Koneksi Wi-Fi berkecepatan tinggi
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Peralatan presentasi yang lengkap
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>                                Pelayanan yang ramah dan profesional
                            </li>
                        </ul>

                        <a href="#" class="bg-yellow-500 text-white text-center font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition duration-300 w-full block text-lg shadow-lg">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection