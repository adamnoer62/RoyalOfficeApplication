@extends('layouts.admin')

@section('title', 'Manajemen Faq')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Faq</h1>
        <a href="{{ route('faqs.create') }}" class="px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-200">
            <i data-lucide="plus" class="inline-block w-4 h-4 mr-1"></i> Tambah Faq
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
                    <th scope="col" class="px-6 py-3">Pertanyaan</th>
                    <th scope="col" class="px-6 py-3">Jawaban</th>
                    <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($faqs as $faq)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $faq->question }}</td>
                        <td class="px-6 py-4">{{ Str::limit($faq->answer, 100) }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('faqs.edit', $faq) }}" class="text-blue-500 hover:text-blue-700 font-semibold">Edit</a>
                            <button form="delete-form-{{ $faq->id }}" class="text-red-500 hover:text-red-700 font-semibold" onclick="return confirm('Apakah Anda yakin ingin menghapus faq ini?');">Hapus</button>
                            <form id="delete-form-{{ $faq->id }}" action="{{ route('faqs.destroy', $faq) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900" colspan="3">Tidak ada faq yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection