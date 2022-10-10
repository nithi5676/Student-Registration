<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hospitalController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/admin_dashboard', [App\Http\Controllers\LoginController::class, 'redirectTo'])->name('admin_dashboard');
//Route::get('/admin_dashboard', function () {
   // return view('admin.index');

   Route::get('/admin', [App\Http\Controllers\hospitalController::class, 'index'])->name('admin');
   Route::get('/edit-records/{user_id}', [App\Http\Controllers\hospitalController::class, 'edit'])->name('edit');
   Route::put('/update-records/{user_id}', [App\Http\Controllers\hospitalController::class, 'update'])->name('update');
   Route::delete('/delete-records/{user_id}', [App\Http\Controllers\hospitalController::class, 'destroy'])->name('delete');






