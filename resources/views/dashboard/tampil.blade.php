@extends('dashboard')

@section('konten')     
 
    @if (Auth::check())
    <div class="text-center">
        <b>Hallo , {{ Auth::user()->name }}, Anda Berhasil Login</b>
    </div>
    @endif

@endsection