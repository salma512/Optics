<?php

use App\Models\Brands;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\sanctumAuthContoller;

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

//PROTECTED ROUTES
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductsController::class, 'store']);
    Route::put('/products/{products}', [ProductsController::class, 'update']);
    Route::delete('/products/{products}', [ProductsController::class, 'destroy']);

    Route::post('/categories', [CategoriesController::class, 'store']);
    Route::put('/categories/{categories}', [CategoriesController::class, 'update']);
    Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy']);

    Route::post('/brands', [BrandsController::class, 'store']);
    Route::put('/brands/{brands}', [BrandsController::class, 'update']);
    Route::delete('/brands/{brands}', [BrandsController::class, 'destroy']);

    Route::post('/orders', [OrdersController::class, 'store']);
    Route::put('/orders/{orders}', [OrdersController::class, 'update']);
    Route::delete('/orders/{orders}', [OrdersController::class, 'destroy']);

    Route::post('/logout', [sanctumAuthContoller::class, 'logout']);
});


//PUBLIC ROUTES
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('isAdmin');

Route::post('/register', [sanctumAuthContoller::class, 'register']);
Route::post('/login', [sanctumAuthContoller::class, 'login']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::get('/products/search/{name}', [ProductsController::class, 'search']);

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/brands', [BrandsController::class, 'index']);

Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/orders/{id}', [OrdersController::class, 'show']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
