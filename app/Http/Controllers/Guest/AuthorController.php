<?php

namespace App\Http\Controllers\Guest;

use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('guest.authors.index');
    }

    public function show(Author $author)
    {
        $author->load('quotes')->loadCount('quotes');
        return view('guest.authors.show', compact('author'));
    }
}
