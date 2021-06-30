<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Product_listController;
use App\Http\Controllers\Api\User_listController;
use App\Http\Controllers\Api\Category_listcontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/user',[User_listController::class , 'index']);
Route::post( '/signup',[User_listController::class , 'store']);

Route::get('/products',[Product_listController::class , 'index'])->middleware('auth:api');
Route::get('/categories',[Category_listcontroller::class , 'index'])->middleware('auth:api');
Route::post('/addproducts',[Product_listController::class, 'store'])->middleware('auth:api');
Route::delete('delete-product/{id}' , [Product_listController::class, 'delete'])->middleware('auth:api');
Route::get('/viewproduct/{id}',[Product_listController::class , 'viewProduct'])->middleware('auth:api');
Route::get('/viewproduct/{cat_id}',[Product_listController::class,'ShowDataByCategory'])->middleware('auth:api');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
