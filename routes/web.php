<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index'])->name(name:'home');
Route::get('/category',[HomeController::class,'category'])->name(name:'category');

//admin routes
Route::get('/admin',[AdminHomeController::class,'index'])->name(name:'admin');
//admin category
Route::get('admin/category',[CategoryController::class,'index'])->name(name:'admin_category');
Route::get('admin/category/create',[CategoryController::class,'create'])->name(name:'admin_category_create');
Route::post('admin/category/store',[CategoryController::class,'store'])->name(name:'admin_category_store');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
