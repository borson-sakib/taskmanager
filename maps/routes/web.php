<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\theteam;

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

Route::get('/', [theteam::class, 'users'])->name('landingPage');
Route::get('/beAmember', function () {
    return view('memberRegistration');
})->name('memberRegistration');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
