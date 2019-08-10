<?php
//
//use Illuminate\Http\Request;
//
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//for login
Route::post('login', 'Api\VisitorController@login');
Route::post('register', 'Api\VisitorController@register');

Route::post('/details', 'Api\VisitorController@details');
//
//Route::group(['middleware' => 'visitor:api'], function(){
//    Route::post('/details', 'Api\VisitorController@details');
//});

//for admin
// category list

//Route::group(['as'=>'api.','namespace'=>'Api\\'],function () {
//    Route::apiResource('/category', 'CategoryController');
//});

Route::apiResource('/category','Api\CategoryController');

//we need category/11/subcategory
Route::group(
    ['prefix'=>'category'], function(){
//    Route::apiResource('/{category}/subcategory','Api\SubCategoryController');
}

);

Route::apiResource('/posts','Api\PostController');