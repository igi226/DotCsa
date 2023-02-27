<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\DotProfessional\DotProfessionalController;
use App\Models\DotProfessional;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.Postlogin');
Route::group(['middleware' => ["admin"]], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('dot-professionals', DotProfessionalController::class);
    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});

Route::get('{any?}', function ($any) {
    return "no result found for" . $any;
})->where('any', '.*');
?>