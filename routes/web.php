<?php
use App\Http\Controllers\Admin\HitungController;
use \App\Http\Controllers\Admin\KriteriaController;
use \App\Http\Controllers\Admin\AlternatifController;
use \App\Http\Controllers\Admin\MobilController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\MessageController;
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
Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('homepage');
Auth::routes(['verify' => true]);
Route::get('detail/{mobil:slug}', [\App\Http\Controllers\HomeController::class,'detail'])->name('detail');
Route::get('about', [\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('contact', [\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class,'contactStore'])->name('contact.store');
Route::get('spk',[\App\Http\Controllers\HomeController::class,'spk'])->name('spk');
Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

// Route untuk reset password
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard.index')
->middleware('is_admin');

Route::get('admin/messages',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin.messages.index');

Route::resource('admin/mobils', \App\Http\Controllers\Admin\MobilController::class);
Route::resource('admin/kriteria', KriteriaController::class);
Route::resource('admin/alternatif', AlternatifController::class);

Route::get('admin/hitung', [\App\Http\Controllers\Admin\HitungController::class, 'hitung'])->name('hitung');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
