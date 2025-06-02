<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (): View {
    return view('welcome');
});

Route::get("/about", function(){
  return view("about");
});