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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/",[\App\Http\Controllers\HomeController::class,"index"])->name("welcome");
Route::get("/category/{category}",[\App\Http\Controllers\HomeController::class,"categoryProviders"])->name("category.providers");
Route::get("/providerProfile/{provider}",[\App\Http\Controllers\HomeController::class,"providerProfile"])->name("provider-profile");
Route::get("/providerProfile/{provider}/download",[\App\Http\Controllers\HomeController::class,"downloadCV"])->name("download-cv");
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
        Route::group(["prefix" => "complaints", "as" => "complaint."], function () {
            Route::get("/", [\App\Http\Controllers\Admin\ComplaintsController::class, "index"])->name("index");
            Route::post("/{complaint}", [\App\Http\Controllers\Admin\ComplaintsController::class, "create"])->name("create");
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
            Route::post("/addSkill", [\App\Http\Controllers\ServiceProvider\ProfileController::class, "addSkill"])->name("addSkill");
            Route::put("/updateProfile", [\App\Http\Controllers\ServiceProvider\ProfileController::class, "updateProfile"])->name("updateProfile");
            Route::put("/setHourlyPrice", [\App\Http\Controllers\ServiceProvider\ProfileController::class, "setHourlyPrice"])->name("setHourlyPrice");
        });

        Route::group(["prefix" => "skill", "as" => "skill."], function () {
            Route::get("/", [\App\Http\Controllers\ServiceProvider\SkillController::class, "index"])->name("index");
            Route::delete("/deleteSkill/{type}", [\App\Http\Controllers\ServiceProvider\SkillController::class, "delete"])->name("deleteSkill");
        });


        Route::group(["prefix" => "work", "as" => "work."], function () {
            Route::get("/", [\App\Http\Controllers\ServiceProvider\WorksController::class, "index"])->name("index");
            Route::post("/", [\App\Http\Controllers\ServiceProvider\WorksController::class, "create"])->name("create");
            Route::delete("/deleteWork/{work}", [\App\Http\Controllers\ServiceProvider\WorksController::class, "delete"])->name("deleteWork");

        });
        Route::group(["prefix" => "complaints", "as" => "complaint."], function () {
            Route::get("/", [\App\Http\Controllers\ServiceProvider\ComplaintsController::class, "index"])->name("index");
        });
        Route::group(["prefix" => "posts", "as" => "post."], function () {
            Route::get("/", [\App\Http\Controllers\ServiceProvider\PostsController::class, "index"])->name("index");
            Route::get("/myBids", [\App\Http\Controllers\ServiceProvider\PostsController::class, "myBids"])->name("my-posts");
            Route::post("/{post}", [\App\Http\Controllers\ServiceProvider\PostsController::class, "createBid"])->name("create");

        });

    });
});

Route::group(["prefix" => "user", "as" => "user.", "middleware" => "auth:web"], function () {
    Route::group(["prefix" => "profile", "as" => "profile."], function () {
        Route::get("/", [\App\Http\Controllers\User\ProfileController::class, "index"])->name("index");
        Route::put("/", [\App\Http\Controllers\User\ProfileController::class, "update_profile"])->name("updateProfile");
    });
    Route::group(["prefix" => "complaints", "as" => "complaint."], function () {
        Route::get("/", [\App\Http\Controllers\User\ComplaintsController::class, "index"])->name("index");
        Route::post("/{provider}", [\App\Http\Controllers\User\ComplaintsController::class, "create"])->name("create");
    });
    Route::group(["prefix" => "rate", "as" => "rate."], function () {
        Route::post("/{provider}", [\App\Http\Controllers\User\RateController::class, "create"])->name("create");
//            Route::delete("/deleteSkill/{type}", [\App\Http\Controllers\ServiceProvider\SkillController::class, "delete"])->name("deleteSkill");
    });
    Route::group(["prefix" => "posts", "as" => "post."], function () {
        Route::get("/", [\App\Http\Controllers\User\PostsController::class, "index"])->name("index");
        Route::get("/myPosts", [\App\Http\Controllers\User\PostsController::class, "posts"])->name("my-posts");
        Route::post("/", [\App\Http\Controllers\User\PostsController::class, "create"])->name("create");
        Route::get("/bids/{post}", [\App\Http\Controllers\User\BidsController::class, "index"])->name("show-bids");
        Route::post("/bids/{bid}", [\App\Http\Controllers\User\BidsController::class, "accept"])->name("accept-bids");
        Route::get("/acceptedBids", [\App\Http\Controllers\User\BidsController::class, "acceptedBidPosts"])->name("accepted-bids");
    });
});
