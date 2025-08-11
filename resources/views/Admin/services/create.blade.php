@extends('layouts.app')

@section('content')
    <h1>Tambah Layanan Baru</h1>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Layanan</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="form-group">
            <label for="features">Fitur Layanan</label>
            <textarea class="form-control" id="features" name="features[]" required>
                {
                    "alamat_bisnis": "Alamat bisnis di lokasi yang strategis",
                    "layanan_resepsionis": "Layanan resepsionis",
                    ...
                }
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Layanan</button>
    </form>
@endsection
