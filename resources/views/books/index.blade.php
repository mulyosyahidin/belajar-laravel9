@extends('layouts.master')

@section('content')
<h2>Data buku</h2>
<a href="{{ route('books.create') }}">Tambah Data</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Tindakan</th>
    </tr>
    @foreach ($books as $buku)
        <tr>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->title }}</td>
            <td>{{ $buku->writer_name }}</td>
            <td>{{ $buku->year }}</td>
            <td>
                <a href="{{ route('books.show', $buku->id) }}">Lihat</a>
                <a href="{{ route('books.edit', $buku->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection