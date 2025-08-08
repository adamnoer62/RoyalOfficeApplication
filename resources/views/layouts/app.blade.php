<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Royale Office & Business Solutions')</title>
    <meta name="description" content="@yield('description', 'Layanan Virtual Office, Ruang Kantor, dan Solusi Bisnis Terpercaya')">
    <meta name="keywords" content="virtual office, ruang kantor, coworking space, pendirian PT, pendirian CV">

    <meta property="og:title" content="@yield('title', 'Royale Office & Business Solutions')">
    <meta property="og:description" content="@yield('description', 'Layanan Virtual Office, Ruang Kantor, dan Solusi Bisnis Terpercaya')">
    <meta name="twitter:title" content="@yield('title', 'Royale Office & Business Solutions')">
    <meta name="twitter:description" content="@yield('description', 'Layanan Virtual Office, Ruang Kantor, dan Solusi Bisnis Terpercaya')">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://resource.trickle.so/vendor_lib/unpkg/lucide@0.513.0/lucide.min.js"></script>

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #F8F9FA; }
        .navbar-blur { background-color: rgba(255, 255, 255, 0.8); backdrop-filter: saturate(180%) blur(20px); transition: background-color 0.3s ease, box-shadow 0.3s ease; }
        .swiper-pagination-bullet-active { background-color: #D97706 !important; }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }
        .parallax-bg { background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; }
        .hero-parallax { background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1932&q=80'); }
        .service-parallax { background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=2071&q=80'); }
        /* Animasi slide mobile menu */
        #mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }
        #mobile-menu.show {
            max-height: 500px; /* cukup besar untuk semua menu */
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>

<body>
    <div class="fixed bottom-4 left-4 right-4 z-50 md:hidden">
        <a href="https://wa.me/6281290391922" target="_blank" class="block text-center bg-yellow-600 hover:bg-red-700 text-white font-semibold py-3 rounded-full shadow-lg transition-all duration-300">
            HUBUNGI KAMI SEKARANG
        </a>
    </div>

    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div id="logo" class="text-2xl font-bold transition-colors duration-300 text-white">Royale Office</div>
            <nav class="hidden md:flex space-x-8 items-center" id="nav-menu">
                <a href="{{ url('/') }}" class="nav-link text-white hover:text-yellow-500">Beranda</a>
                <div class="relative">
                    <button id="dropdownToggle" class="nav-link text-white hover:text-yellow-500 flex items-center">Layanan<svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg></button>
                    <div id="dropdownMenu" class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden z-50">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Virtual Office</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Ruang Kantor</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Ruang Meeting</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Pendirian PT</a>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="nav-link text-white hover:text-yellow-500">Tentang</a>
                <a href="{{ route('blog') }}" class="nav-link text-white hover:text-yellow-500">Blog</a>
                <a href="{{ route('contact') }}" class="nav-link text-white hover:text-yellow-500">Kontak</a>
                <a href="#" class="nav-link text-white hover:text-yellow-500">FAQ</a>
            </nav>
            <button id="mobile-menu-btn" class="md:hidden text-white">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="md:hidden bg-white shadow-lg">
            <nav class="flex flex-col p-4 space-y-2">
                <a href="{{ url('/') }}" class="text-gray-800 hover:text-yellow-500">Beranda</a>
                <a href="#" class="text-gray-800 hover:text-yellow-500">Virtual Office</a>
                <a href="#" class="text-gray-800 hover:text-yellow-500">Ruang Kantor</a>
                <a href="#" class="text-gray-800 hover:text-yellow-500">Ruang Meeting</a>
                <a href="{{ route('about') }}" class="text-gray-800 hover:text-yellow-500">Tentang</a>
                <a href="{{ route('blog') }}" class="text-gray-800 hover:text-yellow-500">Blog</a>
                <a href="{{ route('contact') }}" class="text-gray-800 hover:text-yellow-500">Kontak</a>
                <a href="#" class="text-gray-800 hover:text-yellow-500">FAQ</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-12">
        {{-- Footer Content --}}
    </footer>

    {{-- SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // render ikon
            lucide.createIcons();

            // Navbar scroll
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('logo');
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white', 'shadow-md', 'py-2');
                    navbar.classList.remove('bg-transparent', 'py-4');
                    logo.classList.add('text-gray-800');
                    logo.classList.remove('text-white');
                    mobileMenuBtn.classList.add('text-gray-800');
                    mobileMenuBtn.classList.remove('text-white');
                    navLinks.forEach(link => {
                        link.classList.add('text-gray-800');
                        link.classList.remove('text-white');
                    });
                } else {
                    navbar.classList.remove('bg-white', 'shadow-md', 'py-2');
                    navbar.classList.add('bg-transparent', 'py-4');
                    logo.classList.remove('text-gray-800');
                    logo.classList.add('text-white');
                    mobileMenuBtn.classList.remove('text-gray-800');
                    mobileMenuBtn.classList.add('text-white');
                    navLinks.forEach(link => {
                        link.classList.remove('text-gray-800');
                        link.classList.add('text-white');
                    });
                }
            });

            // Dropdown
            const toggleBtn = document.getElementById('dropdownToggle');
            const dropdown = document.getElementById('dropdownMenu');
            toggleBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdown.classList.toggle('hidden');
            });
            window.addEventListener('click', () => dropdown.classList.add('hidden'));
            dropdown.addEventListener('click', (e) => e.stopPropagation());

            // Mobile Menu Toggle + animasi
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('show');
            });
        });
    </script>
</body>
</html>
