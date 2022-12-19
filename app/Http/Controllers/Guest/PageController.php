<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = movies::all();
        return view('home', compact('movies'));
    }
}
