<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('index',[AdminController::class,'index']);

    // User
    Route::resource('user', UserController::class);
    Route::post('uploadUser',[UserController::class,'uploadUser']);
    Route::post('approve',[UserController::class,'approve']);

    // Category
    Route::resource('category', CategoryController::class);

    // Brand
    Route::resource('brand', BrandController::class);
    Route::post('uploadImage',[BrandController::class,'uploadImage']);

    // Discount
    Route::get('discount',[DiscountController::class,'index'])->name('discount.index');
    Route::get('discountcreate',[DiscountController::class,'create'])->name('discount.create');
    Route::delete('discountdelete/{id}',[DiscountController::class,'delete'])->name('discount.delete');
    Route::post('discountsave',[DiscountController::class,'store']);

    // Product
    Route::get('product',[ProductController::class,'index']);
    Route::post('addproduct',[ProductController::class,'addproduct']);
    Route::post('productimage',[ProductController::class,'image']);
    Route::post('addsize',[ProductController::class,'size']);
    Route::post('addattr',[ProductController::class,'attr']);
    Route::post('addattritem',[ProductController::class,'attritem']);
    Route::post('addbrand',[ProductController::class,'brand']);
    Route::post('adddiscount',[ProductController::class,'discount']);

    // Attribute
    Route::post('attributegroup',[AttributeController::class,'attributegroup']);
    Route::post('attribute',[AttributeController::class,'attribute']);
    Route::post('attributeitem',[AttributeController::class,'attributeitem']);
    Route::post('size',[AttributeController::class,'size']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
