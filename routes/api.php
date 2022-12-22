<?php

use App\Models\Products;
use App\Http\Controllers\ProductsController;
use App\Models\Categories;
use App\Http\Controllers\CategoriesController;
use App\Models\Brands;
use App\Http\Controllers\BrandsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//PRODUCT CRUD
Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::put('/products/{products}', [ProductsController::class, 'update']);
Route::delete('/products/{products}', [ProductsController::class, 'destroy']);

//CATEGORIE CRUD
Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::put('/categories/{categories}', [CategoriesController::class, 'update']);
Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy']);

//BRANDS CRUD
Route::get('/brands', [BrandsController::class, 'index']);
Route::post('/brands', [BrandsController::class, 'store']);
Route::put('/brands/{brands}', [BrandsController::class, 'update']);
Route::delete('/brands/{brands}', [BrandsController::class, 'destroy']);
