@extends('layouts.master')

@section('content')
    ID: {{ $book->id }}
    <br>
    Judul: {{ $book->title }}
    <br>
    Penulis: {{ $book->writer->name }}
    <br>
    Tahun Terbit: {{ $book->year }}

    <form action="{{ route('books.destroy', $book->id) }}" method="post">
        @csrf
        @method('DELETE')

        <input type="submit" value="Hapus">
    </form>

    <br>
    <br>
    <a href="{{ route('books.index') }}">Kembali ke index</a>
@endsection