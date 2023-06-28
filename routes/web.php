<?php
namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuesionerController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
        return view('welcome');
    });
// Route::get('/dashboard', 'KuesionerController@index');
Route::middleware('auth','kaprodi')->group(function(){
    // Route::resource('kuesioner',[KuesionerController::class]);
});

Auth::routes();

// Route::resource('kuesioner','index');

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/kuesioner',[KuesionerController::class,'index']);
