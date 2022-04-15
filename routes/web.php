
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
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
Route::group(['prefix' => 'backoffice'], function () {
    Auth::routes();
    Route::middleware(['auth'])->group(function () {
        // diisi halaman yang akan kena session karena login di halaman backoffice
        Route::get('/home', [HomeController::class, 'index']);
        Route::resource('/members', MemberController::class);
        Route::resource('/orders', BookingController::class);
        Route::resource('/products', InventoryController::class);
    });
    Route::middleware(['admin'])->group(function () {
        // diisi halaman yang hanya boleh admin yang mengaksesnya
        // Route::get('/analisis', [AnalisisController::class, 'index']);
    });
});
Route::redirect('/backoffice', '/backoffice/home', 301);
Route::get('/', function () {
    return view('admin.home');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
