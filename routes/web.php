<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\LaravelInvoiceController;
use App\Http\Controllers\DomPdfController;


Route::get('/', function (Request $request){
   return view('invoice');
});


//Route::get('/', function () {
//
//    return view('welcome');
//});
//
//Route::post('/', function (Request $request) {
//    dd($request->all());
//});
//
////laravel live-wire package
//Route::get('/counter', Counter::class);

