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
    Route::get('cms-motor-career-page', [CmsController::class, 'cmsMotorCareerpage'])->name('admin.cmsMotorCareerpage');
    Route::get('gallery-management', [CmsController::class, 'galleryIndex'])->name('admin.gallery');
    Route::delete('gallery-delete', [CmsController::class, 'galleryDelete'])->name('admin.galleryDelete');
    Route::post('gallery-upload', [CmsController::class, 'galleryUpload'])->name('admin.galleryUpload');
    //site-setting
    Route::get('/site-setting', [CmsController::class, 'siteShow'])->name('site.info');
    Route::post('/site-setting', [CmsController::class, 'siteUpdate'])->name('site.update');

    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});

Route::get('/admin/{any}', function() {
    return 'No page found for any';
});
?>