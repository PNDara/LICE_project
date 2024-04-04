<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Books;
use Illuminate\Http\Request;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class BookController extends Controller
{
  public function create()
  {
      return view('book.create');
  } 

  public function store(Request $request) {
    $attributes = $request->validate([
      'author_id' => 'required',
      'title' => 'required',
      'genre' => 'required',
      'release_date' => 'required',
      'price' => 'required',
      'description' => 'required',
    ]);

    Books::create($attributes);

    return redirect('/');
  }
}
