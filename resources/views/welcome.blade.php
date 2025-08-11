@extends('layouts.app')
@section('title', 'Royale Office - Solusi Bisnis Terpercaya')
@section('description', 'Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda.')

@section('content')

@if($activeBanner)
<section class="hero-slider parallax-bg min-h-screen hidden md:flex text-white">
    @foreach($allBanners as $banner)
        <div class="hero-slide parallax-bg @if($loop->first) active @endif" 
             style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/' . $banner->image_path) }}');">
            
            {{-- Teks untuk setiap slide --}}
            <div class="container mx-auto px-4 text-center">
                <h1 class="fade-in text-5xl md:text-6xl font-bold mb-6">
                    {!! $banner->title !!}
                </h1>
                <p class="fade-in text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    {{ $banner->subtitle }}
                </p>
            </div>

        </div>
    @endforeach
</section>
@endif
@if($allBanners->isNotEmpty())
<section class="md:hidden bg-gray-100 py-8 px-4 pt-20">
    <div class="relative w-full overflow-hidden rounded-2xl shadow-lg max-w-md mx-auto" id="mobile-banner-slider">
        <div class="flex transition-transform duration-500 ease-in-out" id="mobile-slider-wrapper">
            @foreach($allBanners as $banner)
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('storage/' . $banner->image_path) }}" alt="{{ $banner->title }}" class="rounded-2xl w-full h-auto object-cover" />
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="slide-in-left text-4xl font-bold text-center mb-4 text-gray-800">Semua Layanan Kami</h2>
        <p class="slide-in-right text-xl text-center mb-12 text-gray-600 max-w-2xl mx-auto">Solusi lengkap untuk kebutuhan bisnis Anda dengan standar profesional terbaik</p>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4" id="services-grid">
            {{-- Konten bisa di-generate dari sini atau lewat JS --}}
        </div>
    </div>
</section>


<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Apa Kata Klien Kami</h2>
        
        <!-- Grid Testimonial -->
        <div class="testimonial-wrapper">
            <div class="grid gap-8 md:grid-cols-3 testimonial-container">
                @foreach ($testimonials->take(3) as $testimonial)
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">"{{ $testimonial->testimonial }}"</p>
                    <div class="flex items-center space-x-4">
                        <img src="{{ $testimonial->avatar ?? 'https://randomuser.me/api/portraits/men/32.jpg' }}" alt="Client Avatar" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold text-gray-800">{{ $testimonial->name }}</h4>
                            <span class="text-sm text-gray-500">{{ $testimonial->position }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section class="service-parallax parallax-bg py-20 text-white">
    <div class="container mx-auto px-4">
        <h2 class="fade-in text-4xl font-bold text-center mb-4">Mengapa Memilih Kami?</h2>
        <p class="fade-in text-xl text-center mb-12 max-w-2xl mx-auto opacity-90">Kepercayaan ribuan klien adalah bukti komitmen kami terhadap kualitas layanan terbaik</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" id="benefits-grid">
            {{-- Konten bisa di-generate dari sini atau lewat JS --}}
        </div>
    </div>
</section>
<style>
    .hero-slider {
        position: relative;
    }
    .hero-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1.5s ease-in-out;
        z-index: 1;
        /* Penting untuk menampung konten di dalamnya */
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hero-slide.active {
        opacity: 1;
        z-index: 2; /* Slide aktif harus di atas */
    }
</style>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // --- SCRIPT UNTUK SLIDER DESKTOP ---
        const desktopSlides = document.querySelectorAll('.hero-slide');
        if (desktopSlides.length > 1) {
            let currentDesktopSlide = 0;
            setInterval(() => {
                desktopSlides[currentDesktopSlide].classList.remove('active');
                currentDesktopSlide = (currentDesktopSlide + 1) % desktopSlides.length;
                desktopSlides[currentDesktopSlide].classList.add('active');
            }, 5000); // Ganti gambar setiap 5 detik
        }
    
        // --- SCRIPT UNTUK SLIDER MOBILE ---
        const mobileSliderWrapper = document.getElementById('mobile-slider-wrapper');
        if (mobileSliderWrapper) {
            const mobileSlides = mobileSliderWrapper.querySelectorAll('div.flex-shrink-0');
            const totalMobileSlides = mobileSlides.length;
            if (totalMobileSlides > 1) {
                let currentMobileSlide = 0;
                setInterval(() => {
                    currentMobileSlide = (currentMobileSlide + 1) % totalMobileSlides;
                    mobileSliderWrapper.style.transform = `translateX(-${currentMobileSlide * 100}%)`;
                }, 5000); // Ganti gambar setiap 5 detik
            }
        }
    
    });

    const services = [
        { name: 'Virtual Office', icon: 'building', color: 'bg-yellow-500', url: '{{ route('layanan.show', 'virtual-office') }}' },
        { name: 'Ruang Kantor', icon: 'home', color: 'bg-green-500', url: '{{ route('layanan.show', 'ruang-kantor') }}' },
        { name: 'Ruang Meeting', icon: 'users', color: 'bg-purple-500', url: '{{ route('layanan.show', 'ruang-meeting') }}' },
        { name: 'Coworking Space', icon: 'laptop', color: 'bg-orange-500', url: '{{ route('layanan.show', 'coworking-space') }}' },
        { name: 'Pendirian PT', icon: 'file-text', color: 'bg-red-500', url: '{{ route('layanan.show', 'pendirian-pt') }}' },
        { name: 'Pendirian CV', icon: 'briefcase', color: 'bg-indigo-500', url: '{{ route('layanan.show', 'pendirian-cv') }}' }
    ];

    // Render services function
    function renderServices() {
        const servicesGrid = document.getElementById('services-grid');
        servicesGrid.innerHTML = services.map((service, index) => `
            <div class="service-card bg-white p-4 sm:p-6 md:p-8 rounded-xl shadow-lg text-center ${
                index % 2 === 0 ? 'slide-in-left' : 'slide-in-right'
            }" style="animation-delay: ${index * 0.1}s">
                <div class="${service.color} w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="${service.icon}" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">${service.name}</h3>
                <p class="hidden md:block text-gray-600 mb-4">
                    Solusi profesional untuk ${service.name.toLowerCase()} dengan kualitas terbaik
                </p>
                <a href="${service.url}" class="text-yellow-600 hover:text-yellow-800 font-semibold">
                    Pelajari Lebih →
                </a>
            </div>
        `).join('');
    }

    document.addEventListener('DOMContentLoaded', function() {
        renderServices();
    });

    let testimonialWrapper = document.querySelector('.testimonial-wrapper');
    let testimonialContainer = document.querySelector('.testimonial-container');

    let testimonialWidth = testimonialContainer.offsetWidth; // Mengukur lebar dari container testimonial
    let currentScroll = 0;

    setInterval(() => {
        currentScroll += 1; // Geser testimonial sedikit demi sedikit
        if (currentScroll > testimonialWidth) {
            currentScroll = 0; // Reset jika sudah mencapai batas
        }
        testimonialWrapper.scrollLeft = currentScroll;
    }, 50);
    </script>
@endpush