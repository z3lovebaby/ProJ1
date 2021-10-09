<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingAdminController;

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


Route::get('/admin', [
    AdminController::class, 'LoginAdmin'
]);
Route::post('/admin', [
    AdminController::class, 'postLoginAdmin'
]);
Route::get('/logout', [
    AdminController::class, 'logoutAdmin'
])->name('logoutAdmin');

Route::get('/home', function () {
    return view('home');
});


Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function (){
        Route::get('/',[
            'as'=>'categories.index',
            'uses'=>'App\Http\Controllers\CategoryController@index',
        ]);
        Route::get('/create',[
            'as'=>'categories.create',
            'uses'=>'App\Http\Controllers\CategoryController@create',
        ]);
        Route::post('/store',[
            'as'=>'categories.store',
            'uses'=>'App\Http\Controllers\CategoryController@store',
        ]);
    
         Route::get('/edit/{id}',[
            'as'=>'categories.edit',
            'uses'=>'App\Http\Controllers\CategoryController@edit',
        ]);
          Route::post('/update/{id}',[
            'as'=>'categories.update',
            'uses'=>'App\Http\Controllers\CategoryController@update',
        ]);
    
          Route::get('/delete/{id}',[
            'as'=>'categories.delete',
            'uses'=>'App\Http\Controllers\CategoryController@delete',
        ]);
    });
    
    Route::prefix('menus')->group(function (){
        Route::get('/',[
            'as'=>'menus.index',
            'uses'=>'App\Http\Controllers\MenuController@index',
        ]);
        Route::get('/create',[
            'as'=>'menus.create',
            'uses'=>'App\Http\Controllers\MenuController@create',
        ]);
        Route::post('/store',[
            'as'=>'menus.store',
            'uses'=>'App\Http\Controllers\MenuController@store',
        ]);
        Route::get('/edit/{id}',[
            'as'=>'menus.edit',
            'uses'=>'App\Http\Controllers\MenuController@edit',
        ]);
          Route::post('/update/{id}',[
            'as'=>'menus.update',
            'uses'=>'App\Http\Controllers\MenuController@update',
        ]);
    
          Route::get('/delete/{id}',[
            'as'=>'menus.delete',
            'uses'=>'App\Http\Controllers\MenuController@delete',
        ]);
    });
    
    Route::prefix('sachs')->group(function (){
        Route::get('/',[
            'as'=>'sachs.index',
            'uses'=>'App\Http\Controllers\SachController@index',
        ]);
        Route::get('/create',[
            'as'=>'sachs.create',
            'uses'=>'App\Http\Controllers\SachController@create',
        ]);
    });


    Route::prefix('advert')->group(function (){
        Route::get('/', [
            AdvertAdminController::class, 'index'
        ])->name('advert.index');
        Route::get('/create', [
            AdvertAdminController::class, 'create'
        ])->name('advert.create');
        Route::post('/store', [
            AdvertAdminController::class, 'store'
        ])->name('advert.store');
        Route::get('/edit/{id}', [
            AdvertAdminController::class, 'edit'
        ])->name('advert.edit');
        Route::post('/update/{id}', [
            AdvertAdminController::class, 'update'
        ])->name('advert.update');
        Route::get('/delete/{id}', [
            AdvertAdminController::class, 'delete'
        ])->name('advert.delete');
        
    });
    
    Route::prefix('Settings')->group(function () {
        Route::get('/', [
            SettingAdminController::class, 'index'
        ])->name('settings.index');
        Route::get('/create', [
            SettingAdminController::class, 'create'
        ])->name('settings.create');
        Route::post('/store', [
            SettingAdminController::class, 'store'
        ])->name('settings.store');
        Route::get('/edit/{id}', [
            SettingAdminController::class, 'edit'
        ])->name('settings.edit');
        Route::post('/update/{id}', [
            SettingAdminController::class, 'update'
        ])->name('settings.update');
        Route::get('/delete/{id}', [
            SettingAdminController::class, 'delete'
        ])->name('settings.delete');
        
    });
    Route::prefix('News')->group(function (){
        Route::get('/',[
            'as'=>'news.index',
            'uses'=>'App\Http\Controllers\NewsController@index',
        ]);
        Route::get('/create',[
            'as'=>'news.create',
            'uses'=>'App\Http\Controllers\NewsController@create',
        ]);
        Route::post('/store',[
            'as'=>'news.store',
            'uses'=>'App\Http\Controllers\NewsController@store',
        ]);
        //  Route::get('/edit/{id}',[
        //     'as'=>'categories.edit',
        //     'uses'=>'App\Http\Controllers\CategoryController@edit',
        // ]);
        //   Route::post('/update/{id}',[
        //     'as'=>'categories.update',
        //     'uses'=>'App\Http\Controllers\CategoryController@update',
        // ]);
    
        //   Route::get('/delete/{id}',[
        //     'as'=>'categories.delete',
        //     'uses'=>'App\Http\Controllers\CategoryController@delete',
        // ]);
    });
    
});