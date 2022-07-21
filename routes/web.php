<?php

use App\Http\Controllers\ScrapingController;
use Illuminate\Support\Facades\Route;

Route::get('/noticias', [ScrapingController::class, 'index']);

