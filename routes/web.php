<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminNoddesController as AdminNoddesController;
use App\Http\Controllers\NoddesController as NoddesController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\FaqController as FaqController;
use App\Http\Controllers\AdminPanel\AdminIletisimController as AdminIletisimController;
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
Route::get('/iletisim',[HomeController::class,'iletisim'])->name(name:'iletisim');
Route::get('/hakkimizda',[HomeController::class,'hakkimizda'])->name(name:'hakkimizda');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name(name:'storecomment');
Route::get('/faq',[HomeController::class,'faq'])->name(name:'faq');
Route::get('/createpost/show/{id}',[NoddesController::class,'show'])->name(name:'noddes_show');

Route::prefix('createpost')->name('noddes.')->controller(NoddesController::class)->group(function (){
    Route::get('/','index')->name(name:'noddes');
    Route::get('/create','create')->name(name:'noddes_create');
    Route::post('/store','store')->name(name:'noddes_store');
    Route::post('/commentstore','commentstore')->name(name:'noddes_comment_store');
    Route::get('/edit/{id}','edit')->name(name:'noddes_edit');
    Route::post('/update/{id}','update')->name(name:'noddes_update');
    Route::get('/destory/{id}','destroy')->name(name:'noddes_destroy');
    Route::get('/show/{id}','show')->name(name:'noddes_show');
});

Route::prefix('admin')->name('admin.')->group(function (){
    //admin routes
    Route::get('/',[AdminHomeController::class,'index'])->name(name:'index');
    Route::get('/setting',[AdminHomeController::class,'setting'])->name(name:'setting');
    Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name(name:'setting.update');
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
    //admin faq
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){
        Route::get('/','index')->name(name:'admin_faq');
        Route::get('/create','create')->name(name:'admin_faq_create');
        Route::post('/store','store')->name(name:'admin_faq_store');
        Route::get('/edit/{id}','edit')->name(name:'admin_faq_edit');
        Route::post('/update/{id}','update')->name(name:'admin_faq_update');
        Route::get('/destory/{id}','destroy')->name(name:'admin_faq_destroy');
        Route::get('/show/{id}','show')->name(name:'admin_faq_show');
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
    //admin iletisim
    Route::prefix('/iletisim')->name('iletisim.')->controller(AdminIletisimController::class)->group(function (){
        Route::get('/','index')->name(name:'iletisim');
        Route::get('/create','create')->name(name:'iletisim_create');
        Route::post('/store','store')->name(name:'iletisim_store');
        Route::get('/destory/{id}','destroy')->name(name:'admin_iletisim_destroy');
        Route::get('/show/{id}','show')->name(name:'admin_iletisim_show');
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
