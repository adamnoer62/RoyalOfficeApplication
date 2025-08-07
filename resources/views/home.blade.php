{{-- /resources/views/admin/dashboard.blade.php --}}

@extends('layouts.admin')

{{-- Mengatur judul halaman --}}
@section('title', 'Dashboard Utama')

@section('content')
    {{-- Stat Cards --}}
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Klien</p>
                    <p class="text-3xl font-bold text-gray-800">1,250</p>
                </div>
                <div class="p-3 bg-blue-100 rounded-full">
                    <i data-lucide="users" class="w-6 h-6 text-blue-500"></i>
                </div>
            </div>
        </div>

        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Pendapatan (Bulan Ini)</p>
                    <p class="text-3xl font-bold text-gray-800">Rp 45jt</p>
                </div>
                <div class="p-3 bg-green-100 rounded-full">
                    <i data-lucide="dollar-sign" class="w-6 h-6 text-green-500"></i>
                </div>
            </div>
        </div>

        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Pesan Baru</p>
                    <p class="text-3xl font-bold text-gray-800">12</p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i data-lucide="mail" class="w-6 h-6 text-yellow-500"></i>
                </div>
            </div>
        </div>
         <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Postingan Blog</p>
                    <p class="text-3xl font-bold text-gray-800">34</p>
                </div>
                <div class="p-3 bg-red-100 rounded-full">
                    <i data-lucide="file-text" class="w-6 h-6 text-red-500"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Data Terbaru --}}
    <div class="mt-8 bg-white rounded-lg shadow-md">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-700">Klien Terbaru</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama Klien</th>
                        <th scope="col" class="px-6 py-3">Layanan</th>
                        <th scope="col" class="px-6 py-3">Tanggal Bergabung</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">PT. Maju Mundur</td>
                        <td class="px-6 py-4">Virtual Office</td>
                        <td class="px-6 py-4">01 Agustus 2025</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span></td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">CV. Sejahtera Bersama</td>
                        <td class="px-6 py-4">Pendirian CV</td>
                        <td class="px-6 py-4">28 Juli 2025</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span></td>
                    </tr>
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">Startup Inovasi Digital</td>
                        <td class="px-6 py-4">Ruang Kantor</td>
                        <td class="px-6 py-4">25 Juli 2025</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium text-yellow-800 bg-yellow-100 rounded-full">Menunggu Pembayaran</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Jika halaman ini butuh script khusus, tambahkan di sini --}}
    {{-- <script src="{{ asset('js/chart.js') }}"></script> --}}
    <script>
        // Pastikan ikon di content juga di-render
        lucide.createIcons();
    </script>
@endpush