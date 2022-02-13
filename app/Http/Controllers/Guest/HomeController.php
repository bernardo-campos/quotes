<?php

namespace App\Http\Controllers\Guest;

use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $birthdays = Author::where('dob', 'like', "%-" . date('m-d'))->get();
        $deaths = Author::where('dod', 'like' , "%-" . date('m-d'))->get();

        return view('guest.welcome', [
            'birthdays' => $birthdays,
            'deaths' => $deaths,
        ]);
    }
}
