<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        return view('admin.authors.index', [
            'authors' => Author::withCount('quotes')->paginate()
        ]);
    }
}
