@extends('layout')

@section('konten')

<h4>Edit Staf</h4>

<form action="{{route('staf.update', $staf->id)}}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{$staf->nama}}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{$staf->alamat}}" class="form-control mb-2">
    <label>No Hp</label>
    <input type="text" name="no_hp" value="{{$staf->no_hp}}" class="form-control mb-2" >
    <label>Jenis kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{$staf->jenis_kelamin}}"class="form-control mb-2" >
    <label>Hobi</label>
    <input type="text" name="hobi" value="{{$staf->hobi}}"class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection