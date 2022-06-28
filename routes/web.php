<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsertypeController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/',[BaseController::class,'home'])->name('iPEL');

Route::prefix('admin')->group(function () {
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('category/list',[CategoryController::class,'index'])->name('category.list');
Route::get('category/add',[CategoryController::class,'create'])->name('category.create');
Route::post('category/add',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/edit/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete',[CategoryController::class,'destroy'])->name('category.delete');

//Service Curd
Route::get('service/list',[ServiceController::class,'index'])->name('service.list');
Route::get('service/add',[ServiceController::class,'create'])->name('service.create');
Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
Route::post('service/update/{id}',[ServiceController::class,'update'])->name('service.update');
});


Route::prefix('usertype')->group(function () {
Route::get('/show/usertype/{id}',[UsertypeController::class,'show'])->name('usertype.show');
Route::get('/show_all_users',[UsertypeController::class,'index'])->name('usertype.index');
Route::get('/add/usertype',[UsertypeController::class,'create'])->name('usertype.create');
Route::post('/store/usertype',[UsertypeController::class,'store'])->name('usertype.store');
Route::get('/edit/usertype/{id}',[UsertypeController::class,'edit'])->name('usertype.edit');
Route::post('/edit/usertype/{id}',[UsertypeController::class,'update'])->name('usertype.update');
Route::get('/delete/usertype/{id}',[UsertypeController::class,'destroy'])->name('usertype.delete');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
