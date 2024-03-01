@extends('layout.main')

@section('container')
    <h1>Ini Halaman About</h1>
    <h2>Nama : {{ $nama }} </h2>
    <h2>Email : {{ $email }}</h2>
    <h2>No Telp : {{ $notelp }}</h2>

@endsection

