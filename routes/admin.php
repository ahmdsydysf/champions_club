<?php

use App\Http\Controllers\SliderImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthenticateDashboard;
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

            /*
            ----------------------------------
            ========== Admin Dashboard =======
            ----------------------------------
            */


            Route::prefix('dashboard')
            ->name('dashboard.')
            ->group(function () {

                Route::middleware('isAdmin')->group(function(){
                    Route::get('/' , function(){
                        return view('dashboard');
                    })->name('main');
                    // slider images route
                    Route::resource('slider_image' , SliderImageController::class);
                });



                require __DIR__.'/admin_auth.php';
            });


