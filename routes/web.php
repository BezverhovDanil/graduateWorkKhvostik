<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPriceController;
use App\Http\Controllers\ReviewController;

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


Route::get('/onas', function () {
    return view('onas');
});
Route::get('/price', [AdminPriceController::class, 'showPrice'])->name('prices.index');


Auth::routes();

Route::get('/', [App\Http\Controllers\sliderController::class, 'showSlider']);
Route::post('/send-email', 'App\Http\Controllers\MailController@sendEmail')->name('send.email');
Route::post('/send-email-telegram', 'App\Http\Controllers\MailController@sendEmailTelegram')->name('send.email.telegram');
Route::get('/contact-us', 'App\Http\Controllers\MailController@showContactForm')->name('contact.form');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/prices', [AdminPriceController::class, 'index'])->name('prices.index');
    Route::get('/prices/create', [AdminPriceController::class, 'create'])->name('prices.create');
    Route::post('/prices', [AdminPriceController::class, 'store'])->name('prices.store');
    Route::get('/prices/{price}/edit', [AdminPriceController::class, 'edit'])->name('prices.edit');
    Route::put('/prices/{price}', [AdminPriceController::class, 'update'])->name('prices.update');
    Route::delete('/prices/{price}', [AdminPriceController::class, 'destroy'])->name('prices.destroy');
    Route::put('/reviews/{review}/approve', [AdminPriceController::class, 'approveReview'])->name('reviews.approve');
    Route::delete('/reviews/{review}', [AdminPriceController::class, 'destroyReview'])->name('reviews.destroy');
});



Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.clinic.index');
Route::post('/reviews', [ReviewController::class, 'clinic'])->name('reviews.clinic.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
