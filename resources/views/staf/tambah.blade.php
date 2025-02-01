@extends('dashboard')

@section('konten')

<h4>Tambah Staf</h4>

<form action="{{ route('staf.submit') }}" method="post">
    @csrf
    
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2 @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2 @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
    @error('alamat')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    
    <label>No Hp</label>
    <input type="text" name="no_hp" class="form-control mb-2 @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">
    @error('no_hp')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    
    <label>Jenis kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2 @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin') }}">
    @error('jenis_kelamin')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    
    <label>Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2 @error('hobi') is-invalid @enderror" value="{{ old('hobi') }}">
    @error('hobi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <button class="btn btn-primary">Tambah</button>
</form>


@endsection