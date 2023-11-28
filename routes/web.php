<?php

use App\Livewire\ShowHomePage;
use App\Livewire\ShowAboutPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', ShowHomePage::class)->name('home');
Route::get('/about', ShowAboutPage::class)->name('about');