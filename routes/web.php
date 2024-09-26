<?php

use Illuminate\Support\Facades\Route;
// utilizzo il page controller
use App\Http\Controllers\PageController as PageController;

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

// imposto la rotta 
Route::get('/trains', [PageController::class, 'index'])->name('trains');
