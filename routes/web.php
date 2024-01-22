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

Route::get('fale-conosco', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('fale-conosco', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('sobre', [App\Http\Controllers\AbountController::class, 'index'])->name('abount.index');
Route::get('clientes', [App\Http\Controllers\ClientsController::class, 'index'])->name('client.index');
Route::get('servicos', [App\Http\Controllers\ServicesController::class, 'index'])->name('service.index');
Route::get('links', [App\Http\Controllers\LinksUteisController::class, 'index'])->name('link.index');

Route::group(['prefix' => '/admin'], function () {
    Voyager::routes();
});
