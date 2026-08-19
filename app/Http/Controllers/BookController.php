<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'anime', 'author' => 'Jjun amaro', 'year' => 1888],
            ['title' => 'holly', 'author' => 'justine tacorda', 'year' => 1892],
            ['title' => 'wordtech', 'author' => 'ronnie vargas', 'year' => 1983],
            ['title' => 'blank', 'author' => 'lhorenz magtibay', 'year' => 1985],
            ['title' => 'eimreh', 'author' => 'eimreh san', 'year' => 2009],
        ];

        return view('books.index', ['books' => $books]);
    }

}
