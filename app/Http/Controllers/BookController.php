<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function read()
    {
        return view('books.read');
    }

    public function data($id = 0)
    {
        $nama = 'XYZ';
        $penulis = 'ABC';

        return view('books.data',
            compact('nama', 'penulis', 'id'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $bookTitle = $request->judul_buku;
        $bookWriter = $request->penulis;

        $book = new Book;
        $book->title = $request->judul_buku;
        $book->writer_name = $request->penulis;
        $book->year = 2022;
        
        // simpan data ke database
        $book->save();

        return redirect()
            ->to(route('books.index'));
    }

    public function index()
    {
        $books = Book::all();

        return view('books.index',
            compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show',
            compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->title = $request->judul_buku;
        $book->writer_name = $request->penulis;
        $book->save();

        return redirect()
            ->to(route('books.show', $book->id));
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->to(route('books.index'));
    }
}

