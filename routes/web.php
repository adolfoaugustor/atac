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
    // $categories = Voyager::model('Category')->all();
    return view('layouts.home');
})->name('index.home');

Route::group(['prefix' => 'page'], function () {
    Route::get('/{slug}', function ($slug) {
        $page = Voyager::model('Page')->where('slug', $slug)
            ->where('status','=', 'ACTIVE')->firstOrFail();
            
        $categories = null;
            
        if($slug === 'fale-conosco'){
            $categories = Voyager::model('Category')->all();
        }

        return view('page-' . $page->slug, ['page' => $page, 'categories' => $categories]);
    });
});

Route::group(['prefix' => '/admin'], function () {
    Voyager::routes();
});