<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'] )->name('home');
Route::name('users')->group(function () {
    Route::post("/register", [UserController::class,"create"])->name(".register");
    Route::post("/login", [UserController::class,"login"])->name(".login");
    Route::post("/logout", [UserController::class,"logout"])->name(".logout");
});
Route::name("Q&A")->group(function () {
    Route::get("/questions", [QuestionController::class,"index"]);
    Route::get("/questions/create", [QuestionController::class,"create"]) ->name(".create") -> middleware("auth");
    Route::post("/questions/submit",[QuestionController::class,"submit"]) ->name(".submit");
    Route::get("/questions/{id?}", [QuestionController::class,"single_question"]) ->name(".question");
});
Route::get('/joinroom', function () {
    return view('joinroom');
})->name('joinroom');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/modules', function () {
    return view('modules');
})->name('modules');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/room1', function () {
    return view('room1');
})->name('room1');;
Route::get('/room2', function () {
    return view('room2');
})->name('room2');;
Route::get('/room3', function () {
    return view('room3');
})->name('room3');;
