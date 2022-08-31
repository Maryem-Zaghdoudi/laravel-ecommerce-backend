<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Models\ProductCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
Route::resource('products', ProductController::class);
Route::get('category/{id}', [CategoryController::class , 'get_subcategories']);
Route::get('category0/{id}', [CategoryController::class , 'get_subcategories_position0']);
Route::post('search', [ProductCategoryController::class , 'search']);

Route::get('product/{id}', [ProductController::class , 'find_product']);
Route::get('count', [ProductController::class , 'count']);

Route::get('products_by_tag/{id}', [ProductController::class, 'products_by_tag']);
Route::get('products_by_category/{id}', [ProductController::class, 'products_by_category']);

Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);



