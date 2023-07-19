<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

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



Route::name('service.')->prefix('service-areas')->group(function () {


   // Beaverton ==/
   Route::get('/beaverton-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Beaverton');
   })->name('beaverton');

   // Eugene ==/
   Route::get('/eugene-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Eugene');
   })->name('eugene');


   // Keizer ==/
   Route::get('/website-design-and-services-keizer-oregon', function() {
      return Inertia::render('ServiceAreas/Keizer');
   })->name('keizer');


   // Oregon City ==/
   Route::get('/oregon-city-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/OregonCity');
   })->name('oregoncity');



   // Roseburg ==/
   Route::get('/roseburg-oregon-website-design-and-management-services', function () {
      return Inertia::render('ServiceAreas/Roseburg');
  })->name('roseburg');


  // Wilsonville ==/
  Route::get('/website-management-and-design-wilsonville-oregon', function () {
   return Inertia::render('ServiceAreas/Wilsonville');
   })->name('wilsonville');




   // Springfield ==/
   Route::get('/springfield-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Springfield');
   })->name('springfield');
   
});


Route::name('admin.')->group(function () {
   Route::get('/users', function () {
       // Route assigned name "admin.users"...
   })->name('users');
});

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



Route::get('/thank-you', function(){
   return Inertia::render('ThankYou');
})->name('thank.you');



