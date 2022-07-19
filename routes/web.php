<?php

<<<<<<< HEAD
use App\Http\Controllers\ScrapingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

=======
use App\Http\Controllers\scarpings\ScrapingCnn;
use App\Http\Controllers\ScrapingController;
use Illuminate\Support\Facades\Route;

>>>>>>> be32ac3 (criando scrapings fora do controler)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/noticias', [ScrapingController::class, 'noticias'])->name('noticias');
<<<<<<< HEAD
=======
Route::get('/testes', [ScrapingCnn::class, 'noticiasCnn'])->name('noticiasCnn');
>>>>>>> be32ac3 (criando scrapings fora do controler)
