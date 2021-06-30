<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('Admin.login');
});

Route::prefix('admins')->group(function(){

    Route::post('/login' , [UserController::class , 'index']);
});


Route::get('/user' , [UserController::class , 'show']);
Route::get('/logout' , [UserController::class , 'logout']);


// Route::view('/addproduct' , 'Admin.add_product', ['product' => '']);
// Route::view('/viewproduct' , 'Admin.view_product');


Route::get('/addproduct' , [CategoryController::class , 'show'] );


Route::post('/addproduct1' ,[ProductController::class , 'store'] );
Route::get('/viewproduct' , [ProductController::class , 'show']);
Route::get('/viewproduct2' , [ProductController::class , 'show2']);
Route::get('/dashboard' , [ProductController::class , 'show3']);
Route::get('/buynow/{id}' , [ProductController::class , 'buy_now']);


Route::get('/editproduct/{id}' , [ProductController::class , 'edit']);
Route::get('/remove/{id}',[ProductController::class, 'destroy']);
Route::post('/editproduct/admins/updateproduct/{id}' ,[ProductController::class , 'update'] );
Route::get('/updatestatus',[ProductController::class, 'updatestatus']);

Route::prefix('users')->group(function(){
    Route::view('/register' , 'User.signup');
});

Route::post('/signup' , [UserController::class , 'store']);

Route::get('/add-to-cart/{product_id}',[CartsController::class,'store'] );
Route::get('/showcart',[CartsController::class,'show'] );
Route::get('/remove-cart/{id}' , [CartsController::class,'destroy']);


Route::post('/place-order/{product_id}',[OrderController::class , 'store']);
Route::get('/showorder' ,[OrderController::class , 'show'] );
Route::get('/remove-order/{order_id}',[OrderController::class , 'destroy']);

Route::get('/search/', [ProductController::class,'search'])->name('search');
Route::get('/viewproduct/{category_id}',[ProductController::class,'ShowDataByCategory']);
