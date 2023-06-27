<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sendEmailController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

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


Route::get('/', function() {
   return Inertia::render('Home');
})->name('home');

Route::post('/sendemail', [SendEmailController::class, 'sendEmail'])->name("send.email");


Route::get( '/website-design-and-management', function() {
   return Inertia::render('PlanDetails');
} )->name('plan.details');

Route::get( '/about-evergreen-by-design', function() {
   return Inertia::render('About');
} )->name('about');


Route::get('/terms-of-services', function() {
   return Inertia::render('TermsService');
})->name('terms.services');


Route::get( '/website-design-and-management-pricing', function() {
   return Inertia::render('Pricing');
} )->name('pricing');


Route::get('/contact-evergreen-by-design', function() {
   return Inertia::render('Contact');
})->name('contact');


Route::get('/evergreey-by-design-privacy-notice', function() {
   return Inertia::render('Privacy');
})->name('privacy');

Route::get('/evergreey-by-design-website-usage-terms', function() {
   return Inertia::render('WebsiteTerms');
})->name('website.terms');


// Route::get('/test', function() {
//    echo storage_path('ebd-welcome-packet.pdf');
// });


Route::get('/thank-you', function(){
   return Inertia::render('ThankYou');
})->name('thank.you');


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

