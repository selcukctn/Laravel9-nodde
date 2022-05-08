<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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
Route::get('admin/category',[AdminCategoryController::class,'index'])->name(name:'admin_category');
Route::get('admin/category/create',[AdminCategoryController::class,'create'])->name(name:'admin_category_create');
Route::post('admin/category/store',[AdminCategoryController::class,'store'])->name(name:'admin_category_store');
Route::get('admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name(name:'admin_category_edit');
Route::post('admin/category/update/{id}',[AdminCategoryController::class,'update'])->name(name:'admin_category_update');
Route::get('admin/category/destory/{id}',[AdminCategoryController::class,'destroy'])->name(name:'admin_category_destroy');
Route::get('admin/category/show/{id}',[AdminCategoryController::class,'show'])->name(name:'admin_category_show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
