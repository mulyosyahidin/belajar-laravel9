@extends('layouts.master')

@section('content')
<h2>Tambah buku</h2>

<form action="/books/store" method="POST">
    @csrf

    Judul buku:
    <br>
    <input type="text" name="judul_buku">

    <br><br>

    Nama penulis:
    <br>
    <input type="text" name="penulis">

    <br><br>

    <input type="submit" value="Tambah Data">
</form>

@endsection