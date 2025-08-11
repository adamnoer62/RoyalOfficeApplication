@extends('layouts.app')

@section('content')
    <h1>Edit Layanan</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Layanan</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" required>{{ $service->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $service->price }}" required>
        </div>

        <div class="form-group">
            <label for="features">Fitur Layanan</label>
            <textarea class="form-control" id="features" name="features[]" required>{{ implode(', ', json_decode($service->features)) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Layanan</button>
    </form>
@endsection
