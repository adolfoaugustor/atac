<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('layouts.home');
})->name('index.home');

Route::get('/{slug}', function ($slug) {
    $page = Voyager::model('Page')->where('slug', $slug)->firstOrFail();

    if($slug === 'sobre'){
        return view('page-sobre', ['page' => $page]);
    }
    redirect('index.home');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});