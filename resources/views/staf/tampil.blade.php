@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Staf</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('staf.tambah')}}">Tambah Staf</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Jenis kelamin</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>
    @foreach ($staf as $no=>$data)
 <tr>
    <td>{{ $no+1 }}</td>
    <td>{{ $data->nama }}</td>
    <td>{{ $data->alamat }}</td>
    <td>{{ $data->no_hp }}</td>
    <td>{{ $data->jenis_kelamin }}</td>
    <td>{{ $data->hobi }}</td>
    <td>
        <a href="{{route('staf.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{route('staf.delete', $data->id)}}" method="post">
            @csrf
            <button class="btn btn-sm btn-danger">Hapus</button>
        </form>
    </td>
</tr>
    @endforeach
        
</table>

@endsection