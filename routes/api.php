<?php

use App\Enums\RoleEnum;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//authenticate
Route::group(['as' => 'user.'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
    });
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});
Route::group(['middleware' => 'auth:api'], function () {
    //Role
    Route::group(['as' => 'role.'], function () {
        Route::group(['middleware' => 'role:' . RoleEnum::ADMIN->value], function () {
            Route::post('role', [RoleController::class, 'store']);
            Route::put('role/{id}', [RoleController::class, 'edit']);
            Route::delete('role/{id}', [RoleController::class, 'destroy']);
        });
        Route::get('role/{id}', [RoleController::class, 'show']);
        Route::get('roles', [RoleController::class, 'index']);
    });

    //User
    Route::group(['as' => 'user.'], function () {
        Route::group(['middleware' => 'role:' . RoleEnum::ADMIN->value], function () {
            Route::post('user', [UserController::class, 'store']);
            Route::get('user/{id}', [UserController::class, 'show']);
            Route::get('users', [UserController::class, 'index']);
            Route::put('user/{id}', [UserController::class, 'edit']);
            Route::delete('user/{id}', [UserController::class, 'destroy']);
        });
    });
});