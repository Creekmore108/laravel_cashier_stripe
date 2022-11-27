<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\ShowPlansController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription');
    Route::get('/checkout/{planId}', [SubscriptionController::class, 'checkout'])->name('subCheckout');
    Route::post('/process', [SubscriptionController::class, 'process'])->name('process');

    Route::get('/showplans', [ShowPlansController::class, 'index'])->name('showplans');

    Route::get('/addplan', [PlansController::class, 'index'])->name('addplan');
    Route::post('/storeplan', [PlansController::class, 'storePlan'])->name('storeplan');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::post('single-charge', [HomeController::class, 'singleCharge'])->name('single.charge');

require __DIR__.'/auth.php';
