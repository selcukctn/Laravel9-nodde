<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminNoddesController as AdminNoddesController;
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
Route::get('/createpost',[HomeController::class,'createpost'])->name(name:'createpost');

Route::prefix('admin')->name('admin.')->group(function (){
    //admin routes
    Route::get('/',[AdminHomeController::class,'index'])->name(name:'admin');
    //admin category
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function (){
        Route::get('/','index')->name(name:'admin_category');
        Route::get('/create','create')->name(name:'admin_category_create');
        Route::post('/store','store')->name(name:'admin_category_store');
        Route::get('/edit/{id}','edit')->name(name:'admin_category_edit');
        Route::post('/update/{id}','update')->name(name:'admin_category_update');
        Route::get('/destory/{id}','destroy')->name(name:'admin_category_destroy');
        Route::get('/show/{id}','show')->name(name:'admin_category_show');
    });
    //admin noddes
    Route::prefix('/noddes')->name('noddes.')->controller(AdminNoddesController::class)->group(function (){
        Route::get('/','index')->name(name:'admin_noddes');
        Route::get('/create','create')->name(name:'admin_noddes_create');
        Route::post('/store','store')->name(name:'admin_noddes_store');
        Route::get('/edit/{id}','edit')->name(name:'admin_noddes_edit');
        Route::post('/update/{id}','update')->name(name:'admin_noddes_update');
        Route::get('/destory/{id}','destroy')->name(name:'admin_noddes_destroy');
        Route::get('/show/{id}','show')->name(name:'admin_noddes_show');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
