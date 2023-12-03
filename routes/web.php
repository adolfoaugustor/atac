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
    $banners = App\Models\Banner::all();
    $clients = App\Models\Client::all();
    $servicos = App\Models\Servico::all();
    return view('layouts.home', [
        'banners' => $banners ?? null, 
        'clients' => $clients ?? null, 
        'servicos' => $servicos ?? null, 
    ]);
})->name('index.home');

Route::get('fale-conosco', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('fale-conosco', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');

Route::group(['prefix' => 'page'], function () {
    
    Route::get('/{slug}', function ($slug) {
        $page = Voyager::model('Page')->where('slug', $slug)
            ->where('status','=', 'ACTIVE')->firstOrFail();
        
        if($page->slug == 'servicos'){
            $servicos = App\Models\Servico::all();
        }
        if($page->slug == 'clientes') {
            $clients = App\Models\Client::all();
        }

        return view('page-' . $page->slug, [
            'page' => $page,
            'servicos' => $servicos ?? null,
            'clients' => $clients ?? null,
        ]);
    });
});

Route::group(['prefix' => '/admin'], function () {
    Voyager::routes();
});