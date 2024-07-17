<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function movie()
    {
        $moviesList = Movie::all();
        return view('pages.movie', compact('moviesList'));
    }

    public function anime()
    {
        $animeList = Anime::all();
        return view('pages.anime', compact('animeList'));
    }
}
