@extends('layouts.master')
@section('title', 'Buku ' . $book->title)

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>

            <a href="{{ route('books.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-condensed table-hover table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>{{ $book->id }}</td>
                    </tr>
                    <tr>
                        <td>Judul Buku</td>
                        <td>{{ $book->title }}</td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td>{{ $book->year }}</td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td>{{ $book->writer->name }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer text-right">
                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Hapus" class="btn btn-danger">
                </form>
            </div>
        </div>

    </div>
@endsection
