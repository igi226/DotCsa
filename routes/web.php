<?php

use App\Http\Controllers\User\Index\IndexController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('aboutUs');
Route::get('/motor-carrier-support', [IndexController::class, 'motorCarrierSupport'])->name('motorCarrierSupport');
Route::post('/register-form', [IndexController::class, 'registerRequest'])->name('registerRequest');
Route::get('/field-training-events', [IndexController::class, 'fieldTrainingEvents'])->name('fieldTrainingEvents');
Route::get('/life&supplemental-insuarnce-for-drivers&motor-carriers', [IndexController::class, 'DriversMotorCarriers'])->name('DriversMotorCarriers');
Route::get('/P&C-insurance-underwriting-dot-safety-training', [IndexController::class, 'DotSafetyTraining'])->name('DotSafetyTraining');
Route::get('/P&C-insurance-policy-sales-for-your-business-and-your-truck', [IndexController::class, 'businessAndYourTruck'])->name('businessAndYourTruck');

Route::get('/expert-witness', [IndexController::class, 'expertWitness'])->name('expertWitness');
Route::get('admin/', function() {
    return redirect('admin/dashboard');
    });
Route::fallback( function() {
    return view('404PageNotFound');
    });
