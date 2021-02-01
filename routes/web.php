<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;


//AIzaSyB4uIzr2xKw_H1bOTUqVIRPsL-0RTl8Qb4


//662368113590-90r7geklt04jn2tui66t6egk3dk0hjdt.apps.googleusercontent.com


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/analytics', [ AnalyticsController::class, 'analytics' ] )->name('analytics');
