<?php

use App\Enums\RoleEnum;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'role.'], function () {
    // Route::group(['middleware' => 'role:' . RoleEnum::ADMIN->value], function () {
    //     Route::group(['middleware' => 'auth:api'], function () {
    //         Route::post('role', [RoleController::class, 'store']);
    //         Route::put('role/{id}', [RoleController::class, 'edit']);
    //         Route::delete('role/{id}', [RoleController::class, 'destroy']);
    //     });
    // });
    Route::get('role/{id}', [RoleController::class, 'show']);
    Route::get('roles', [RoleController::class, 'index']);
});

Route::group(['as' => 'user.'], function () {
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{id}', [UserController::class, 'show']);
    Route::get('users', [UserController::class, 'index']);
    Route::put('user/{id}', [UserController::class, 'edit']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);
});