<?php

use App\Enums\RoleEnum;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
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

    //Student
    Route::group(['as' => 'student.'], function () {
        Route::post('student', [StudentController::class, 'store']);
        Route::put('student/{id}', [StudentController::class, 'edit']);
        Route::delete('student/{id}', [StudentController::class, 'destroy']);
        Route::get('student/{id}', [StudentController::class, 'show']);
        Route::get('students', [StudentController::class, 'index']);
    });

    //Teacher
    Route::group(['as' => 'teacher.'], function () {
        Route::group(['middleware' => 'role:' . RoleEnum::ADMIN->value], function () {
            Route::post('teacher', [TeacherController::class, 'store']);
            Route::put('teacher/{id}', [TeacherController::class, 'edit']);
            Route::delete('teacher/{id}', [TeacherController::class, 'destroy']);
        });
        Route::get('teacher/{id}', [TeacherController::class, 'show']);
        Route::get('teachers', [TeacherController::class, 'index']);
    });

    //Room
    Route::group(['as' => 'room.'], function () {
        Route::group(['middleware' => 'role:' . RoleEnum::ADMIN->value], function () {
            Route::post('room', [RoomController::class, 'store']);
            Route::put('room/{id}', [RoomController::class, 'edit']);
            Route::delete('room/{id}', [RoomController::class, 'destroy']);
        });
        Route::get('room/{id}', [RoomController::class, 'show']);
        Route::get('rooms', [RoomController::class, 'index']);
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