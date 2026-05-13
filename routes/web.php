<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieViewController;

Route::get('/', [MovieViewController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieViewController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieViewController::class, 'store'])->name('movies.store');
Route::get('/movies/{id}', [MovieViewController::class, 'show'])->name('movies.show');
Route::get('/movies/{id}/edit', [MovieViewController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{id}', [MovieViewController::class, 'update'])->name('movies.update');
Route::delete('/movies/{id}', [MovieViewController::class, 'destroy'])->name('movies.destroy');