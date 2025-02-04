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


Route::post('/register', 'Auth\UserAuthController@register');
Route::post('/login', 'Auth\UserAuthController@login');

Route::apiResource('/employee', 'EmployeeController')->middleware('auth:api');
Route::apiResource('/serie', 'SerieController');
Route::apiResource('/empleoInformal', 'EmpleoInformalController');
Route::apiResource('/empleo', 'EmpleoController');
/* Route::apiResource('/user', 'UserController'); */
