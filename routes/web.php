<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsertypeController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
//Route::get('category/delete',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/category/delete',[CategoryController::class,'destroy'])->name('category.delete');
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
