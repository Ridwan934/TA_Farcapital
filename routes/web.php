<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Registrasi;
use App\Http\Livewire\Login;
use App\Http\Livewire\Index;
use App\Http\Livewire\Detail;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Create;
use App\Http\Livewire\Edit;
use App\Http\Livewire\Update; 
use App\Http\Livewire\Delete;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Registrasi::class);
Route::get('/login', Login::class);
Route::get('/index', Index::class);
Route::get('/detail', Detail::class);
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/wisata/create', Create::class);
Route::get('/wisata/edit/{id_wisata}', Edit::class)->name('edit'); //id untuk menangkap kiriman dari kontroller
//Route::post('/wisata/update/{id_wisata}', Update::class);
//Route::get('/wisata/delete/{id_wisata}', Delete::class);