<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Auth_dash;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthenticateDashboard;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

//=========================================================================

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



            /*
            ----------------------------------
            ========== User Website ==========
            ----------------------------------
            */
            Route::get('/', [HomeController::class , 'index'])->name('welcome');
            // Route::middleware(['auth', 'user-access:user' , 'verified'])->group(function () {
            //     Route::get('/', [HomeController::class , 'index'])->name('welcome');
            // });
            /*
            ----------------------------------
            ========== user profile ==========
            ----------------------------------
            */
            Route::middleware('auth')->group(function () {
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            });

            // Route::post('/site-login' , [AuthenticatedSessionController::class , 'loginCheck'])->name('site.login');

            // Route::get('/web-login' , [AuthenticatedSessionController::class , 'webLogin'])->name('web.login');


        });


//=========================================================================

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
