<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::group(["prefix" => "auth", "as" => "auth."], function () {
        Route::get("login", [\App\Http\Controllers\Admin\AuthController::class, "showLogin"])->name("showLogin");
        Route::post("login", [\App\Http\Controllers\Admin\AuthController::class, "login"])->name("login");
        Route::post("logout", [\App\Http\Controllers\Admin\AuthController::class, "logout"])->name("logout");
//        Route::get("register", [\App\Http\Controllers\Admin\AuthController::class, "showRegister"])->name("showRegister");
//        Route::post("register", [\App\Http\Controllers\Admin\AuthController::class, "register"])->name("register");
    });
    Route::group(["middleware" => "auth:admin"], function () {

        Route::group(["prefix" => "admins", "as" => "admins."], function () {
            Route::get("/", [\App\Http\Controllers\Admin\AdminController::class, "index"])->name("index");
            Route::post("/", [\App\Http\Controllers\Admin\AdminController::class, "create"])->name("add");
            Route::put("/{admin}", [\App\Http\Controllers\Admin\AdminController::class, "update"])->name("update");
            Route::delete("/{admin}", [\App\Http\Controllers\Admin\AdminController::class, "delete"])->name("delete");
        });

        Route::group(["prefix" => "categories", "as" => "categories."], function () {
            Route::get("/", [\App\Http\Controllers\Admin\CategoryController::class, "index"])->name("index");
            Route::post("/", [\App\Http\Controllers\Admin\CategoryController::class, "create"])->name("add");
            Route::put("/{category}", [\App\Http\Controllers\Admin\CategoryController::class, "update"])->name("update");
            Route::delete("/{category}", [\App\Http\Controllers\Admin\CategoryController::class, "delete"])->name("delete");

        });
        Route::group(["prefix" => "skills", "as" => "skills."], function () {
            Route::get("/", [\App\Http\Controllers\Admin\SkillsController::class, "index"])->name("index");
            Route::post("/", [\App\Http\Controllers\Admin\SkillsController::class, "create"])->name("add");
            Route::put("/{type}", [\App\Http\Controllers\Admin\SkillsController::class, "update"])->name("update");
            Route::delete("/{type}", [\App\Http\Controllers\Admin\SkillsController::class, "delete"])->name("delete");

        });
        Route::group(["prefix" => "currencies", "as" => "currencies."], function () {
            Route::get("/", [\App\Http\Controllers\Admin\CurrencyController::class, "index"])->name("index");
            Route::post("/", [\App\Http\Controllers\Admin\CurrencyController::class, "create"])->name("add");
            Route::put("/{currency}", [\App\Http\Controllers\Admin\CurrencyController::class, "update"])->name("update");
            Route::delete("/{currency}", [\App\Http\Controllers\Admin\CurrencyController::class, "delete"])->name("delete");

        });
    });
});
Route::group(["prefix" => "provider", "as" => "provider."], function () {
    Route::group(["prefix" => "auth", "as" => "auth."], function () {
        Route::get("login", [\App\Http\Controllers\ServiceProvider\AuthController::class, "showLogin"])->name("showLogin");
        Route::post("login", [\App\Http\Controllers\ServiceProvider\AuthController::class, "login"])->name("login");
        Route::post("logout", [\App\Http\Controllers\ServiceProvider\AuthController::class, "logout"])->name("logout");
        Route::get("register", [\App\Http\Controllers\ServiceProvider\AuthController::class, "showRegister"])->name("showRegister");
        Route::post("register", [\App\Http\Controllers\ServiceProvider\AuthController::class, "register"])->name("register");
    });
    Route::group(["middleware" => "auth:provider"], function () {

        Route::group(["prefix" => "profile", "as" => "profile."], function () {
            Route::get("/", [\App\Http\Controllers\ServiceProvider\ProfileController::class, "index"])->name("index");
        });

    });
});
