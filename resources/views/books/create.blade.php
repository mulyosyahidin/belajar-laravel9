@extends('layouts.master')

@section('content')
<h2>Tambah buku</h2>

<form action="/books/store" method="POST">
    @csrf

    Judul buku:
    <br>
    <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror"
        value="{{ old('judul_buku') }}">
    @error('judul_buku')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <br><br>

    Nama penulis:
    <br>
    <input type="text" name="penulis">

    <br><br>
    Email:
    <br>
    <input type="text" name="email">

    <br><br>
    NPM:
    <br>
    <input type="text" name="npm">

    <br><br>

    <div class="form-group">
        <label for="penulis">Penulis:</label>
        <select name="writer_id" id="penulis" class="form-control">
            @foreach ($writers as $writer)
                <option value="{{ $writer->id }}">{{ $writer->name }}</option>
            @endforeach
        </select>
    </div>

    <br><br>

    <input type="submit" value="Tambah Data">
</form>

@endsection