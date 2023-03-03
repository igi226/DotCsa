<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Cms\CmsController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\DotProfessional\DotProfessionalController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.Postlogin');
Route::group(['middleware' => ["admin"]], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::post('profile', [DashboardController::class, 'profileUpdate'])->name('admin.profileUpdate');
    Route::post('update-password', [DashboardController::class, 'passwordUpdate'])->name('admin.passwordUpdate');
    Route::resource('dot-professionals', DotProfessionalController::class);
    Route::resource('cms', CmsController::class);
    Route::get('cms-home-page', [CmsController::class, 'cmsHomepage'])->name('admin.cmsHomepage');
    Route::get('cms-about-page', [CmsController::class, 'cmsAboutpage'])->name('admin.cmsAboutpage');


    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});

Route::get('/admin/{any}', function() {
    return 'No page found for any';
});
?>