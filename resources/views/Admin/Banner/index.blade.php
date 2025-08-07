@extends('layouts.admin')

@section('title', 'Manajemen Banner')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Banner</h1>
        <a href="{{ route('banners.create') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
            <i data-lucide="plus" class="inline-block w-4 h-4 mr-1"></i> Tambah Banner
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">Gambar</th>
                    <th scope="col" class="px-6 py-3">Judul</th>
                    <th scope="col" class="px-6 py-3">Subtitle</th>
                    <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($banners as $banner)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="{{ $banner->title }}" class="w-32 h-16 object-cover rounded-md">
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $banner->title }}</td>
                         <td class="px-6 py-4 font-medium text-gray-900">{{ $banner->subtitle }}</td>
                        {{--  <td class="px-6 py-4">
                            @if ($banner->is_active)
                                <span class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs font-medium text-gray-800 bg-gray-100 rounded-full">Tidak Aktif</span>
                            @endif
                        </td>  --}}
                        <td class="px-6 py-4 text-center">
                            @if (!$banner->is_active)
                                <form action="{{ route('banners.setActive', $banner) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="font-medium text-green-600 hover:underline mr-3" title="Jadikan Aktif">
                                        <i data-lucide="check-circle" class="w-5 h-5"></i>
                                    </button>
                                </form>
                            @endif
                            <a href="{{ route('banners.edit', $banner) }}" class="btn btn-sm btn-outline-blue" title="Edit">Edit</a>
                            <button form="delete-form-{{ $banner->id }}" class="btn btn-sm btn-outline-red" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?');">Hapus</button>
                            <form id="delete-form-{{ $banner->id }}" action="{{ route('banners.destroy', $banner) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-6">Tidak ada banner.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection