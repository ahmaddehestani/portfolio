<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Permission;
use App\Models\User;
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

Route::get('/', function () {
    return view('fa-home');
})->name('home');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/service', function () {
    return view('pages.service');
})->name('service');
Route::get('/admin', function () {
    return view('admin.adminPanel');
})->name('adminPanel');

