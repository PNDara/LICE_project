<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function read(Request $request): View
    {
        $book = Book::paginate(3);
        
        return view('read', compact('books'));
    }
}