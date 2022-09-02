<?php

namespace App\Http\Controllers;

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

        echo $bookWriter;
    }
}

