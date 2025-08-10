@extends('layouts.admin')

@section('title', 'Contact view ')

@section('content')

    <h1 class="text-2xl font-bold text-gray-800">Contact</h1>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pesan
                    </th>
                    {{--  <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>  --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($contact as $contact)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $contact->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $contact->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $contact->message }}
                        </td>
                        {{--  <td class="px-6 py-4">
                            <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-red" title="Hapus">Hapus</button>
                            </form>
                        </td>  --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center">
                            Tidak ada data
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
  
@endsection