<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\APIIController;
Use App\Http\Controllers\APIInfoKeluhanController;
Use App\Http\Controllers\APIKuesionerAdminController;
Use App\Http\Controllers\APIKuesionerControlController;
Use App\Http\Controllers\APICreateKuesionerController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\APIPengumumanAdminController;
Use App\Http\Controllers\UserAPIController;
Use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\CrapIndex;

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

Route::middleware('auth:sanctum')->get('/userss', function (Request $request) {
    return $request->user();
});
//Route::get('/kuesioners', [APIKuesionerController::class, 'kuesioners']);
//Route::get('/infokeluhann', [APIInfoKeluhanController::class, 'infokeluhans']);
//Route::get('/users', [APIIController::class, 'users']);

//Route::post('auth/register', [AuthController::class, 'register']);
//Route::post('auth/login', [AuthController::class, 'login']);
//Route::post('auth/register', 'API\AuthController@register');
//Route::post('auth/login', 'API\UserController@login');
//Route::post('auth/logout', [AuthController::class, 'logout']);
//Route::get('users/profile', [UserAPIController::class, 'profile'])->middleware('auth:api');

//Route::post('post',[APIInfoKeluhanController::class, 'add'])->middleware('auth:api');


Route::group([
    'prefix' => 'auth'
], function () {
    //LOGIN
    Route::post('login', [AuthController::class, 'login']);
    //REGISTER
    Route::put('register', [AuthController::class, 'signup']);

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        //LOGOUT
        Route::get('logout', [AuthController::class, 'logout']);

        //PROFILE ( READ , UPDATE )
        Route::get('user', [AuthController::class, 'user']);
        Route::post('updateprofile', [AuthController::class, 'update']);
        Route::patch('/upprofile/{id}', [AuthController::class, 'updateuser']);


        //INFO KELUHAN (CREATE, READ, UPDATE- ,DELETE-)
        Route::post('ctkeluhan', [APIInfoKeluhanController::class, 'add2']);
        Route::get('infokeluhan/{id}', [APIInfoKeluhanController::class, 'readinfokeluhan']);
        Route::patch('upkeluhan/{id}', [APIInfoKeluhanController::class, 'updateinfokeluhan']);
        Route::resource('dlkeluhan', APIInfokeluhanController::class);



        //KUESIONER (CREATE)
        Route::post('ctkuesioner', [APICreateKuesionerController::class, 'createkuesioner']);

       // PENGUMUMAN MASYARAKAT
       Route::get('rdpengumumanmasyarakat', [APIPengumumanAdminController::class,'readpengumuman']);
        //ADMIN
        
        //KUESIONER CONTROL (CREATE,READ,DELETE )
        Route::get('categoriopd', [APIKuesionerAdminController::class, 'categories']);
        Route::post('ctopd', [APIKuesionerAdminController::class, 'addopd']);
        Route::post('ctcategory', [APIKuesionerAdminController::class, 'addcategory']);
        Route::delete('/dlopd/{id}', [APIKuesionerAdminController::class, 'destroy']);
        Route::delete('/dlcategory/{id}', [APIKuesionerAdminController::class, 'destroy2']);

        //KUESIONER VIEW ( READ)
        Route::get('kuesionercontrol', [APIKuesionerAdminController::class, 'kuesioners']);

        //INFO KELUHAN VIEW ADMIN (READ, DELETE-)
        Route::get('infokeluhanadmin', [APIInfoKeluhanAdminController::class, 'readinfokeluhanadmin']);
      

        //PENGUMUMAN ADMIN (CREATE , READ)
        Route::put('ctpengumuman', [APIPengumumanAdminController::class,'add3']);
        Route::get('rdpengumuman', [APIPengumumanAdminController::class,'readpengumuman']);
        Route::resource('dlpengumuman', APIPengumumanAdminController::class);
       
        
    });
  
    Route::get('/home', 'HomeController@index')->name('home');
});