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
      return Inertia::render('ServiceAreas/Beaverton', [
         'openGraph' => [
            'title' => 'Beaverton Oregon | Website Design and Management Services',
            'description' => 'Evergreen By Design provides great website design and services for the area of Beaverton Oregon. This also includes, Hosting, Email Marketing, Content Management!',
            'imageUrl' => asset('media/images/jpg/beaverton-opt.jpg'),
         ]
      ]);
   })->name('beaverton');

   // Eugene ==/
   Route::get('/eugene-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Eugene', [
         'openGraph' => [
            'title' => 'Eugene Oregon Website Design and Management Services',
            'description' => 'Get a professional website designer and FULL website management services all here at Evergreen By Design. This includes Hosting, Domain, Content Management and more!',
            'imageUrl' => asset('media/images/jpg/eugene-opt.jpg'),
         ]
      ]);
   })->name('eugene');


   // Keizer ==/
   Route::get('/website-design-and-services-keizer-oregon', function() {
      return Inertia::render('ServiceAreas/Keizer', [
         'openGraph' => [
            'title' => 'Website Design and Services | Keizer Oregon',
            'description' => 'Affordable website design and management services for Keizer Oregon including, Website Hosting, Content Management, Email Marketing, Ongoing Maintenance...',
            'imageUrl' => asset('media/images/jpg/keizer-opt.jpg'),
         ]
      ]);
   })->name('keizer');


   // Newberg ==/
   Route::get('/website-design-and-services-newberg-oregon', function() {
      return Inertia::render('ServiceAreas/Newberg', [
         'openGraph' => [
            'title' => 'Website Services and Design | Newberg Oregon',
            'description' => 'Website Services and design now available in Newberg, Oregon. Hire a professional website designer and get services that include Hosting, Email marketing...',
            'imageUrl' => asset('media/images/jpg/newberg-opt.jpg'),
         ]
      ]);
   })->name('newberg');


   // Oregon City ==/
   Route::get('/oregon-city-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/OregonCity', [
         'openGraph' => [
            'title' => 'Oregon City Website Design and Management Services',
            'description' => 'Professional website design for Oregon City. This includes Website Management and Services like Hosting, Domain, Email Marketing, Ongoing Maintenance and more!',
            'imageUrl' => asset('media/images/jpg/oregoncity-opt.jpg'),
         ]
      ]);
   })->name('oregoncity');



   // Roseburg ==/
   Route::get('/roseburg-oregon-website-design-and-management-services', function () {
      return Inertia::render('ServiceAreas/Roseburg', [
         'openGraph' => [
            'title' => 'Roseburg Oregon Website Design and Management Services',
            'description' => 'Roseburg Oregon Website Design and Management Services. Locally owned is a top website designer business providing you with the best in website services!',
            'imageUrl' => asset('media/images/jpg/roseburg-opt.jpg'),
         ]
      ]);
  })->name('roseburg');


   // Springfield ==/
   Route::get('/springfield-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Springfield', [
         'openGraph' => [
            'title' => 'Springfield Oregon Website Design and Management Services',
            'description' => 'Springfield Oregon Website Design and Management Services. These website services provide everything you need to get your website up and running. Contact Today.',
            'imageUrl' => asset('media/images/jpg/springfield-opt.jpg'),
         ]
      ]);
   })->name('springfield');


  // Wilsonville ==/
  Route::get('/website-management-and-design-wilsonville-oregon', function () {
   return Inertia::render('ServiceAreas/Wilsonville', [
      'openGraph' => [
         'title' => 'Website Management and Design | Wilsonville Oregon',
         'description' => 'Get ongoing website management services with FULL website design in Wilsonville Oregon! Includes Hosting, Email Marketing, Content Management, and more!',
         'imageUrl' => asset('media/images/jpg/wilsonville-opt.jpg'),
      ]
   ]);
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


Route::post('/sendemail', [SendEmailController::class, 'sendEmail'])->name("send.email");


Route::get( '/website-design-and-management', function() {
   return Inertia::render('PlanDetails', [
      'openGraph' => [
         'title' => 'Website Service Plan Details',
         'description' => 'Choose the best plan that suits all your website design and service needs! With ongoing website management including hosting, domain, and email marketing you know you\'re in good hands!',
         'imageUrl' => asset('media/images/png/management.png'),
      ]
   ]);
} )->name('plan.details');




Route::get( '/about-evergreen-by-design', function() {
   return Inertia::render('About', [
      'openGraph' => [
         'title' => 'About - Evergreen By Design',
         'description' => 'Evergreen By Design provides all your website design and service needs including hosting, domains, email marketing, and more. Learn all about Evergreen By Designs website services today!',
         'imageUrl' => asset('media/images/png/history.png'),
      ]
   ]);
} )->name('about');


Route::get('/terms-of-services', function() {
   return Inertia::render('TermsService', [
      'openGraph' => [
         'title' => 'Terms of Services - Evergreen By Design',
         'description' => 'Website design and management terms of services. Professional website design.',
         'imageUrl' => asset('media/images/png/main-img.png'),
      ]
   ]);
})->name('terms.services');


Route::get( '/website-design-and-management-pricing', function() {
   return Inertia::render('Pricing', [
      'openGraph' => [
         'title' => 'Website Design and Service Pricing',
         'description' => 'Get a professional website designer and ongoing website management with one of Evergreen By Design\'s website service plans. These plans include hosting, content management, email marketing, and more.',
         'imageUrl' => asset('media/images/png/main-img.png'),
      ]
   ]);
} )->name('pricing');


Route::get('/contact-evergreen-by-design', function() {
   return Inertia::render('Contact', [
      'openGraph' => [
         'title' => 'Contact - Evergreen By Design',
         'description' => 'Contact your next website designer here today! Not only does Evergreen By Design provide professional website design, but you also receive hosting, domain, content management and email marketing.',
         'imageUrl' => asset('media/images/png/main-img.png'),
      ]
   ]);
})->name('contact');


Route::get('/evergreey-by-design-privacy-notice', function() {
   return Inertia::render('Privacy', [
      'openGraph' => [
         'title' => 'Privacy Policy',
         'description' => 'Evergreen By Design website services and design privacy policy.',
         'imageUrl' => asset('media/images/png/main-img.png'),
      ]
   ]);
})->name('privacy');

Route::get('/evergreey-by-design-website-usage-terms', function() {
   return Inertia::render('WebsiteTerms', [
      'openGraph' => [
         'title' => 'Terms of Use - Evergreen By Design',
         'description' => 'Evergreen By Design\'s website terms of usage.',
         'imageUrl' => asset('media/images/png/main-img.png'),
      ]
   ]);
})->name('website.terms');



Route::get('/thank-you', function(){
   return Inertia::render('ThankYou');
})->name('thank.you');



