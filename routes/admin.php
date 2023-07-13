<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('admin.login');
})->name('login');
Route::resource('admin/brand', BrandController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/skill', SkillController::class);
Route::resource('admin/role', roleController::class);
Route::resource('admin/user', UserController::class);
Route::resource('admin/blog', BlogController::class);
