<?php

use App\Http\Controllers\ProfileController;
use App\Models\Books;
use App\Models\Content;
use App\Models\Course;
use App\Models\Workday;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  $books = Books::all();
    return view('index', [
      'books' => $books
    ]);
});

Route::get('/course', function () {
  $courses = Course::all();
      
  return view('course',[
          'courses' => $courses ]);
  });

Route::get('/about', function () {
  $contents = Content::all();
  $workdays = Workday::all();

  return view('about',[
              'contents' => $contents ,
              'workdays' => $workdays ]);
      });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
