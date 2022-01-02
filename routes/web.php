<?php

use App\Models\setting;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::view("/closed","closed",["message"=>setting::find(1)->message]);


Route::get("/get_visitor","App\Http\Controllers\\visitor@create")->name("visitor");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
