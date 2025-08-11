<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Admin Dashboard') - Royale Office</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://resource.trickle.so/vendor_lib/unpkg/lucide@0.513.0/lucide.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f3f4f6; }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #888; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
        .active-link { background-color: #ca8a04; color: #ffffff; }
    </style>
    

    @stack('styles')
</head>
<body class="antialiased">

    <div class="flex h-screen bg-gray-100">
        <aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-gray-800 text-white transition-transform -translate-x-full md:translate-x-0">
            <div class="flex items-center justify-center h-20 border-b border-gray-700">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-yellow-400">Royale<span class="text-white">Admin</span></a>
            </div>
            <nav class="mt-4 flex flex-col justify-between flex-1">
                {{-- Bagian Atas Navigasi --}}
                <div>
                    {{-- class active-link akan ditambahkan secara dinamis --}}
                    <a href="{{ route('home') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Request::is('admin/dashboard*') ? 'active-link' : '' }}">
                        <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('banners.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Request::is('admin/banners*') ? 'active-link' : '' }}">
                        <i data-lucide="image" class="w-5 h-5 mr-3"></i>
                        Banner
                    </a>
                    {{-- Contoh untuk link lain (saat ini non-aktif) --}}
                    <a href="{{ route('blogs.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Request::is('admin/blogs*') ? 'active-link' : '' }}">
                        <i data-lucide="file-text" class="w-5 h-5 mr-3"></i>
                        Postingan Blog
                    </a>
                    <a href="{{ route('faqs.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Request::is('admin/faq*') ? 'active-link' : '' }}">
                        <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                        Faq
                    </a>
                    <a href="{{ route('contacts.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Request::is('admin/contacts*') ? 'active-link' : '' }}">
                        <i data-lucide="inbox" class="w-5 h-5 mr-3"></i>
                        Pesan Masuk
                    </a>
                    <a href="{{ route('testimonials.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Request::is('admin/testimonials*') ? 'active-link' : '' }}">
                        <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                        Testimoni
                    </a>
                </div>

                {{-- Bagian Bawah Navigasi --}}
                <div class="mb-4">
                    {{--  <a href="#" class="flex items-center px-6 py-3 text-gray-400 cursor-not-allowed transition-colors duration-200">
                        <i data-lucide="settings" class="w-5 h-5 mr-3"></i>
                        Pengaturan
                    </a>  --}}
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();"
                       class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-700 hover:text-white transition-colors duration-200 border-t border-gray-700">
                        <i data-lucide="log-out" class="w-5 h-5 mr-3"></i>
                        Logout
                    </a>
                    <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </nav>
        </aside>

        <div class="flex flex-col flex-1 md:ml-64">
            <header class="flex items-center justify-between h-20 px-6 bg-white border-b border-gray-200 sticky top-0 z-30">
                <div class="flex items-center">
                    <button id="sidebar-toggle" class="p-2 -ml-2 mr-2 text-gray-600 rounded-md md:hidden hover:bg-gray-100 hover:text-gray-800">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800">
                        @yield('title', 'Dashboard')
                    </h1>
                </div>

                @auth
                <div class="relative">
                    <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                        {{-- Nama pengguna dinamis --}}
                        <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                        {{-- Avatar dinamis berdasarkan nama pengguna --}}
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=ca8a04&color=fff&rounded=true" alt="User Avatar" class="w-10 h-10 rounded-full">
                    </button>
                    <div id="user-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-500 hover:text-white">Profil Saya</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-500 hover:text-white">Pengaturan Akun</a>
                        <div class="border-t border-gray-100"></div>
                        
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-600 hover:text-white">
                           Logout
                        </a>
                        <form id="logout-form-header" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
                @endauth
            </header>

            <main class="flex-1 p-6 lg:p-8 overflow-y-auto">
                @yield('content')
            </main>
        </div>
        
        <div id="sidebar-overlay" class="fixed inset-0 bg-black opacity-50 z-20 hidden md:hidden"></div>
    </div>

    {{-- Script JavaScript tidak perlu diubah --}}
    <script>
        lucide.createIcons();
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');
        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }
        if (sidebarToggle) { sidebarToggle.addEventListener('click', toggleSidebar); }
        if (sidebarOverlay) { sidebarOverlay.addEventListener('click', toggleSidebar); }
        if (userMenuButton && userMenu) {
            userMenuButton.addEventListener('click', (e) => {
                e.stopPropagation();
                userMenu.classList.toggle('hidden');
            });
            window.addEventListener('click', (e) => {
                if (!userMenu.classList.contains('hidden') && !userMenuButton.contains(e.target)) {
                    userMenu.classList.add('hidden');
                }
            });
        }
    </script>
    
    @stack('scripts')
</body>
</html>