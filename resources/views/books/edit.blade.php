@extends('layouts.master')

@section('content')
<h2>Edit buku</h2>

<form action="{{ route('books.update', $book->id) }}"
    method="POST">
    
    @csrf
    @method('PUT')

    Judul buku:
    <br>
    <input type="text" name="judul_buku" value="{{ $book->title }}">

    <br><br>

    Nama penulis:
    <br>
    <input type="text" name="penulis" value="{{ $book->writer_name }}">

    <br><br>

    <input type="submit" value="Simpan">
</form>

@endsection