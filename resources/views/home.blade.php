{{-- /resources/views/admin/dashboard.blade.php --}}

@extends('layouts.admin')

{{-- Mengatur judul halaman --}}
@section('title', 'Selamat Datang')

@section('content')
    {{-- Panel Sambutan --}}
    <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
            {{-- Ikon --}}
            <div class="flex-shrink-0">
                <div class="p-4 bg-blue-100 rounded-full">
                    <i data-lucide="sparkles" class="w-12 h-12 text-blue-500"></i>
                </div>
            </div>
            
            {{-- Teks Sambutan --}}
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Selamat Datang Kembali, {{ Auth::user()->name ?? 'Admin' }}!
                </h1>
                {{--  <p class="mt-2 text-gray-600">
                    Semoga harimu menyenangkan. Anda bisa mulai mengelola konten melalui menu navigasi di samping.
                </p>  --}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Memastikan ikon di-render dengan benar
        lucide.createIcons();
    </script>
@endpush