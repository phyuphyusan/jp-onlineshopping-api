<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiresource('brands','Api\BrandController');// php artisan make:controller Api/BrandController --api --model=Brand
Route::apiresource('categories','Api\CategoryController');
Route::apiresource('subcategories','Api\SubcategoryController');
Route::apiresource('items','Api\ItemController');

//--api (not include create/edit)
//--model=Brand (not fillter by id)

//localhost:8000/api/brands

Route::apiresource('users','Api\UserController');
Route::get('filter_item/{sid}/{bid}','Api\ItemController@filter')->name('filter_item');

Route::get('filter_item','Api\ItemController@filterQuery')->name('filter_item');