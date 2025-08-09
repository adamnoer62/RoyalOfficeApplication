@extends('layouts.app') {{-- Pastikan layout ini sudah memuat Tailwind CSS --}}

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-200">
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-2xl shadow-xl">
        
        {{-- Header Form --}}
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800">Royale Office</h1>
            <p class="mt-2 text-gray-600">Selamat Datang Kembali!</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            {{-- Input Email --}}
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                       class="w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 @error('email') border-red-500 @enderror">
                
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Input Password --}}
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 @error('password') border-red-500 @enderror">

                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Opsi Remember Me & Lupa Password --}}
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}
                           class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Ingat Saya</label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-yellow-600 hover:underline">
                        Lupa Password?
                    </a>
                @endif
            </div>

            {{-- Tombol Login --}}
            <div>
                <button type="submit" class="w-full px-4 py-3 font-bold text-white bg-yellow-600 rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-colors duration-300">
                    Login
                </button>
            </div>
        </form>

        {{-- Link ke Halaman Registrasi --}}
    
    </div>
</div>
@endsection