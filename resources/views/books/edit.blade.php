@extends('layouts.master')
@section('title', 'Edit Buku')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Buku</h1>
            
            <a href="{{ route('books.show', $book->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            </div>
            <form action="{{ route('books.update', $book->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul Buku:</label>
                        <input type="text" name="judul_buku" value="{{ old('judul_buku', $book->title) }}" id="title"
                            class="form-control @error('judul_buku') is-invalid @enderror">

                        @error('judul_buku')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="year">Tahun Terbit:</label>
                        <input type="number" name="year" value="{{ old('year', $book->year) }}" id="year"
                            class="form-control @error('year') is-invalid @enderror" required="required">

                        @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="penulis">Penulis:</label>
                        <select name="writer_id" id="penulis" class="form-control">
                            @foreach ($writers as $writer)
                                <option value="{{ $writer->id }}"
                                    @if (old('writer_id', $book->writer_id) == $writer->id) selected @endif>{{ $writer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>

    </div>
@endsection