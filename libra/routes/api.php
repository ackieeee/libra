<?php

use Illuminate\Http\Request;

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

Route::middleware(['api'])->group(function () {
    Route::get('medicines', 'MedicineController@index');
    Route::get('medicines/{medicine}', 'MedicineController@show');
});

Route::group(["middleware" => "guest:api"], function () {
    Route::post("/login", "ApiController@login");
});

Route::group(["middleware" => "auth:api"], function () {
    Route::get("/me", "ApiController@me");
});

Route::get('/testCache', function () {
    Cache::put('name', 'aaa', 100);

    return Cache::get('name');
});
