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
   return Inertia::render('Home', [
      'openGraph' => [
         'title' => 'Website Design and Management Services',
         'description' => 'Looking for a professional website designer and website services like hosting, domain, and email marketing? Get all your website services here at Evergreen By Design.',
         'imageUrl' => asset('media/images/png/main-img.png'),
      ]
   ]);
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


   // Newberg ==/
   Route::get('/website-design-and-services-newberg-oregon', function() {
      return Inertia::render('ServiceAreas/Newberg');
   })->name('newberg');


   // Oregon City ==/
   Route::get('/oregon-city-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/OregonCity');
   })->name('oregoncity');



   // Roseburg ==/
   Route::get('/roseburg-oregon-website-design-and-management-services', function () {
      return Inertia::render('ServiceAreas/Roseburg');
  })->name('roseburg');


   // Springfield ==/
   Route::get('/springfield-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Springfield');
   })->name('springfield');


  // Wilsonville ==/
  Route::get('/website-management-and-design-wilsonville-oregon', function () {
   return Inertia::render('ServiceAreas/Wilsonville');
   })->name('wilsonville');


    // Woodburn ==/
    Route::get('/woodburn-oregon-professional-website-design-and-services', function() {
      return Inertia::render('ServiceAreas/Woodburn', [
         'openGraph' => [
            'title' => 'Woodburn Oregon Professional Website Design and Services',
            'description' => 'Website Design and Management Services for Woodburn Oregon. Get a full website designed for your business with ongoing website services!',
            'imageUrl' => asset('media/images/jpg/woodburn-opt.jpg'),
         ]
      ]);
   })->name('woodburn');




  
   
});


// Route::name('admin.')->group(function () {
//    Route::get('/users', function () {
//        // Route assigned name "admin.users"...
//    })->name('users');
// });

Route::post('/sendemail', [SendEmailController::class, 'sendEmail'])->name("send.email");


Route::get( '/website-design-and-management', function() {
   return Inertia::render('PlanDetails');
} )->name('plan.details');




Route::get( '/about-evergreen-by-design', function() {
   return Inertia::render('About', [
      'openGraph' => [
         'title' => 'About - Evergreen By Design',
         'description' => 'Evergreen By Design provides all your website design and service needs including hosting, domains, email marketing, and more. Learn all about Evergreen By Designs website services today!',
         'imageUrl' => asset('media/images/svg/history.svg'),
      ]
   ]);
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



