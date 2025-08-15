<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Judul dan deskripsi dinamis dengan nilai default --}}
    <title>@yield('title', 'Royale Office & Business Solutions')</title>
    <meta name="description" content="@yield('description', 'Layanan Virtual Office, Ruang Kantor, dan Solusi Bisnis Terpercaya')">
    <meta name="keywords" content="virtual office, ruang kantor, coworking space, pendirian PT, pendirian CV">

    {{-- Meta tags untuk social media bisa juga dibuat dinamis jika perlu --}}
    <meta property="og:title" content="@yield('title', 'Royale Office & Business Solutions')">
    <meta property="og:description" content="@yield('description', 'Layanan Virtual Office, Ruang Kantor, dan Solusi Bisnis Terpercaya')">
    <meta name="twitter:title" content="@yield('title', 'Royale Office & Business Solutions')">
    <meta name="twitter:description" content="@yield('description', 'Layanan Virtual Office, Ruang Kantor, dan Solusi Bisnis Terpercaya')">
    <link href="https://cdn.jsdelivr.net/npm/swiper@9.0.1/swiper-bundle.min.css" rel="stylesheet">
    {{-- Aset CSS dan JS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://resource.trickle.so/vendor_lib/unpkg/lucide@0.513.0/lucide.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    {{-- Gaya kustom dari file asli --}}
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #F8F9FA; }
        .navbar-blur { background-color: rgba(255, 255, 255, 0.8); backdrop-filter: saturate(180%) blur(20px); transition: background-color 0.3s ease, box-shadow 0.3s ease; }
        .swiper-pagination-bullet-active { background-color: #D97706 !important; }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }
        .parallax-bg { background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; }
        .hero-parallax { background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1932&q=80'); }
        .service-parallax { background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=2071&q=80'); }
        
        /* Custom styles for dropdown and mobile menu */
        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            min-width: 200px;
            background: white;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
            z-index: 50;
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .mobile-menu.open {
            max-height: 500px; /* Adjust based on your content */
        }
        
        @media (min-width: 768px) {
            .mobile-menu-btn {
                display: none;
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Favicon --}}
    @stack('styles')
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.0.1/swiper-bundle.min.js"></script>

    <div class="fixed bottom-4 left-4 right-4 z-50 md:hidden">
        <a href="https://wa.me/6281290391922" target="_blank" class="block text-center bg-yellow-600 hover:bg-red-700 text-white font-semibold py-3 rounded-full shadow-lg transition-all duration-300">
        HUBUNGI KAMI SEKARANG
        </a>
    </div>

    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div id="logo" class="text-2xl font-bold transition-colors duration-300 text-white">Royale Office</div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8 items-center" id="nav-menu">
                <a href="{{ url('/') }}" class="nav-link transition-colors duration-300 text-white hover:text-yellow-500">Beranda</a>
                
                <div class="dropdown relative">
                    <button class="nav-link transition-colors duration-300 text-white hover:text-yellow-500 flex items-center">
                        Layanan
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="dropdown-menu">
                        <a href="{{ route('layanan.show', ['jenis' => 'virtual-office']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Virtual Office</a>
                        <a href="{{ route('layanan.show', ['jenis' => 'ruang-kantor']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Ruang Kantor</a>
                        <a href="{{ route('layanan.show', ['jenis' => 'ruang-meeting']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Ruang Meeting</a>
                        <a href="{{ route('layanan.show', ['jenis' => 'pendirian-pt']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Pendirian PT</a>
                        <a href="{{ route('layanan.show', ['jenis' => 'pendirian-cv']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Pendirian CV</a>
                    </div>
                </div>
                
                <a href="{{ route('about') }}" class="nav-link transition-colors duration-300 text-white hover:text-yellow-500">Tentang</a>
                <a href="{{ route('blog') }}" class="nav-link transition-colors duration-300 text-white hover:text-yellow-500">Blog</a>
                <a href="{{ route('contact') }}" class="nav-link transition-colors duration-300 text-white hover:text-yellow-500">Kontak</a>
                <a href="{{ route('faq') }}" class="nav-link transition-colors duration-300 text-white hover:text-yellow-500">FAQ</a>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden transition-colors duration-300 text-white hover:text-yellow-500 flex items-center h-full px-4">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu">
                <div class="px-4 py-2 space-y-1">
                    <a href="{{ url('/') }}" class="block px-4 py-3 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Beranda</a>
                    
                    <div class="px-4 py-1">
                        <button class="mobile-dropdown-btn flex items-center justify-between w-full text-gray-700 hover:text-yellow-500 px-4 py-3 rounded-lg transition-colors">
                            Layanan
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-dropdown">
                            <a href="{{ route('layanan.show', ['jenis' => 'virtual-office']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Virtual Office</a>
                            <a href="{{ route('layanan.show', ['jenis' => 'ruang-kantor']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Ruang Kantor</a>
                            <a href="{{ route('layanan.show', ['jenis' => 'ruang-meeting']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Ruang Meeting</a>
                            <a href="{{ route('layanan.show', ['jenis' => 'pendirian-pt']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Pendirian PT</a>
                            <a href="{{ route('layanan.show', ['jenis' => 'pendirian-cv']) }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Pendirian CV</a>
                        </div>
                    </div>
                    
                    <a href="{{ route('about') }}" class="block px-4 py-3 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Tentang</a>
                    <a href="{{ route('blog') }}" class="block px-4 py-3 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Blog</a>
                    <a href="{{ route('contact') }}" class="block px-4 py-3 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">Kontak</a>
                    <a href="{{ route('faq') }}" class="block px-4 py-3 text-gray-700 hover:bg-yellow-100 rounded-lg transition-colors">FAQ</a>
                </div>
            </div>
    </header>

    <main>
        {{-- Di sinilah konten unik dari setiap halaman akan ditampilkan --}}
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-12">
        {{-- Konten Footer Lengkap --}}
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-yellow-400">Royale Office</h3>
                    <p class="text-gray-300 mb-4">Solusi terpercaya untuk kebutuhan bisnis Anda dengan layanan profesional dan berkualitas tinggi.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-yellow-400"><i data-lucide="facebook" class="w-6 h-6"></i></a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400"><i data-lucide="instagram" class="w-6 h-6"></i></a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400"><i data-lucide="linkedin" class="w-6 h-6"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('layanan.show', ['jenis' => 'virtual-office']) }}" class="hover:text-yellow-400">Virtual Office</a></li>
                        <li><a href="{{ route('layanan.show', ['jenis' => 'ruang-kantor']) }}" class="hover:text-yellow-400">Ruang Kantor</a></li>
                        <li><a href="{{ route('layanan.show', ['jenis' => 'ruang-meeting']) }}" class="hover:text-yellow-400">Ruang Meeting</a></li>
                        <li><a href="{{ route('layanan.show', ['jenis' => 'pendirian-pt']) }}" class="hover:text-yellow-400">Pendirian PT</a></li>
                        <li><a href="{{ route('layanan.show', ['jenis' => 'pendirian-cv']) }}" class="hover:text-yellow-400">Pendirian CV</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('about') }}" class="hover:text-yellow-400">Tentang Kami</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-yellow-400">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-yellow-400">Kontak</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-yellow-400">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <address class="space-y-2 text-gray-300 not-italic">
                        <p class="flex items-start"><i data-lucide="map-pin" class="w-5 h-5 mr-2 mt-1 flex-shrink-0"></i><span>Komp. Plaza Kelapa Gading,  Ruko Inkopal jl. Raya Boulevard Barat Blok C No 52 Kelapa Gading Barat, Kelapa Gading, Jakarta Utara</span></p>
                        <p class="flex items-start"><i data-lucide="phone" class="w-4 h-4 mr-2 mt-1 flex-shrink-0"></i><span>(021) 38879248</span></p>
                        <p class="flex items-start"><i data-lucide="mail" class="w-4 h-4 mr-2 mt-1 flex-shrink-0"></i><span>info@royaleoffice.com</span></p>
                    </address>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Royale Office. All rights reserved.</p>
            </div>
        </div>
    </footer>

    {{-- Script Global --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/about-script.js') }}"></script>
    <script src="{{ asset('js/blog-script.js') }}"></script>

    {{--  <script>
        // Inisialisasi Lucide Icons
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
            
            // Animasi scroll
            const fadeElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(el => observer.observe(el));
            
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
            const mobileDropdown = document.getElementById('mobile-dropdown');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('open');
                    
                    // Toggle menu icon between menu and x
                    const icon = mobileMenuBtn.querySelector('i');
                    if (mobileMenu.classList.contains('open')) {
                        icon.setAttribute('data-lucide', 'x');
                    } else {
                        icon.setAttribute('data-lucide', 'menu');
                    }
                    lucide.createIcons();
                });
            }
            
            if (mobileDropdownBtn && mobileDropdown) {
                mobileDropdownBtn.addEventListener('click', function() {
                    mobileDropdown.classList.toggle('hidden');
                    
                    // Rotate the dropdown arrow
                    const arrow = mobileDropdownBtn.querySelector('svg');
                    arrow.classList.toggle('transform');
                    arrow.classList.toggle('rotate-180');
                });
            }
        });

        // Navbar scroll effect
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
                if (mobileMenuBtn) {
                    mobileMenuBtn.classList.add('text-gray-800');
                    mobileMenuBtn.classList.remove('text-white');
                }
                navLinks.forEach(link => {
                    link.classList.add('text-gray-800');
                    link.classList.remove('text-white');
                });
            } else {
                navbar.classList.remove('bg-white', 'shadow-md', 'py-2');
                navbar.classList.add('bg-transparent', 'py-4');
                logo.classList.remove('text-gray-800');
                logo.classList.add('text-white');
                if (mobileMenuBtn) {
                    mobileMenuBtn.classList.remove('text-gray-800');
                    mobileMenuBtn.classList.add('text-white');
                }
                navLinks.forEach(link => {
                    link.classList.remove('text-gray-800');
                    link.classList.add('text-white');
                });
            }
        });
    </script>  --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();
            
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('open');
                    
                    // Toggle menu icon between menu and x
                    const icon = mobileMenuBtn.querySelector('i');
                    if (mobileMenu.classList.contains('open')) {
                        icon.setAttribute('data-lucide', 'x');
                    } else {
                        icon.setAttribute('data-lucide', 'menu');
                    }
                    lucide.createIcons();
                });
            }
            
            // Mobile dropdown toggle
            const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
            mobileDropdownBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    this.classList.toggle('open');
                    const dropdown = this.nextElementSibling;
                    dropdown.classList.toggle('open');
                });
            });
            
            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('logo');
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileMenuBtnElement = document.getElementById('mobile-menu-btn');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white', 'shadow-md', 'navbar-blur');
                    navbar.classList.remove('bg-transparent');
                    logo.classList.add('text-gray-800');
                    logo.classList.remove('text-white');
                    
                    if (mobileMenuBtnElement) {
                        mobileMenuBtnElement.classList.add('text-gray-800');
                        mobileMenuBtnElement.classList.remove('text-white');
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.add('text-gray-800');
                        link.classList.remove('text-white');
                    });
                } else {
                    navbar.classList.remove('bg-white', 'shadow-md', 'navbar-blur');
                    navbar.classList.add('bg-transparent');
                    logo.classList.remove('text-gray-800');
                    logo.classList.add('text-white');
                    
                    if (mobileMenuBtnElement) {
                        mobileMenuBtnElement.classList.remove('text-gray-800');
                        mobileMenuBtnElement.classList.add('text-white');
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.remove('text-gray-800');
                        link.classList.add('text-white');
                    });
                }
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMobileMenu = mobileMenu.contains(event.target);
                const isClickOnMobileButton = mobileMenuBtn.contains(event.target);
                
                if (!isClickInsideMobileMenu && !isClickOnMobileButton && mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    const icon = mobileMenuBtn.querySelector('i');
                    icon.setAttribute('data-lucide', 'menu');
                    lucide.createIcons();
                }
            });
            
            // Animation for elements
            const fadeElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>
    
    
    @stack('scripts')

    <style>
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .hero-parallax {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('banner.jpeg');
        }
        
        .service-parallax {
            background-image: linear-gradient(rgba(251, 191, 36, 0.9), rgba(245, 158, 11, 0.9)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .navbar-blur {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        @media (max-width: 768px) {
            .parallax-bg {
                background-attachment: scroll;
            }
        }
    </style>
</body>
</html>