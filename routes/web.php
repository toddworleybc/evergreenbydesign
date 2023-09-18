<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Email Routes ===========/
Route::post('/sendemail', [SendEmailController::class, 'sendEmail'])->name("send.email");



// Promo ==============/
Route::get( '/ebd-promo', function() {
   return Inertia::render('Promo', [
      'openGraph' => [
         'title' => '30% OFF Website Design. Only $479 for complete website design.',
         'description' => 'Get your website designed for only $479. website services include logo design, SEO, responsive design, hosting, domain, and more!',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => false,
            'long' => false
         ]
      ]
   ]);
} )->name('promo');



// Pages ==================/
Route::get('/', function() {
   return Inertia::render('Home', [
      'openGraph' => [
         'title' => 'Website Design and Management Services',
         'description' => 'Start your online journey today with the best in Website Design services. Get logos, hosting, responsive design, content creation, domain, and more!',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
})->name('home');





Route::get( '/website-design-and-management', function() {
   return Inertia::render('PlanDetails', [
      'openGraph' => [
         'title' => 'Website Service Plan Details',
         'description' => 'Choose the best plan that suits all your website design and service needs! With ongoing website management including hosting, domain, and email marketing you know you\'re in good hands!',
         'imageUrl' => asset('media/images/png/management.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
} )->name('plan.details');




Route::get( '/about-evergreen-by-design', function() {
   return Inertia::render('About', [
      'openGraph' => [
         'title' => 'About - Evergreen By Design',
         'description' => 'Evergreen By Design provides all your website design and service needs including hosting, domains, email marketing, and more. Learn all about Evergreen By Designs website services today!',
         'imageUrl' => asset('media/images/png/history.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
} )->name('about');


Route::get('/terms-of-services', function() {
   return Inertia::render('TermsService', [
      'openGraph' => [
         'title' => 'Terms of Services - Evergreen By Design',
         'description' => 'Website design and management terms of services. Professional website design.',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
})->name('terms.services');


Route::get( '/website-design-and-management-pricing', function() {
   return Inertia::render('Pricing', [
      'openGraph' => [
         'title' => 'Website Design and Service Pricing',
         'description' => 'Get a professional website designer and ongoing website management with one of Evergreen By Design\'s website service plans. These plans include hosting, content management, email marketing, and more.',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
} )->name('pricing');


Route::get('/contact-evergreen-by-design', function() {
   return Inertia::render('Contact', [
      'openGraph' => [
         'title' => 'Contact - Evergreen By Design',
         'description' => 'Contact your next website designer here today! Not only does Evergreen By Design provide professional website design, but you also receive hosting, domain, content management and email marketing.',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
})->name('contact');


Route::get('/evergreey-by-design-privacy-notice', function() {
   return Inertia::render('Privacy', [
      'openGraph' => [
         'title' => 'Privacy Policy',
         'description' => 'Evergreen By Design website services and design privacy policy.',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
})->name('privacy');

Route::get('/evergreey-by-design-website-usage-terms', function() {
   return Inertia::render('WebsiteTerms', [
      'openGraph' => [
         'title' => 'Terms of Use - Evergreen By Design',
         'description' => 'Evergreen By Design\'s website terms of usage.',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => '43.216503',
            'long' => '-123.341738'
         ]
      ]
   ]);
})->name('website.terms');



Route::get('/thank-you', function(){
   return Inertia::render('ThankYou', [
      'openGraph' => [
         'title' => 'Thank You - Evergreen By Design',
         'description' => 'Thank you page',
         'imageUrl' => asset('media/images/png/main-img.png'),
         'geo' => [
            'lat' => false,
            'long' => false
         ]
      ]
   ]);
})->name('thank.you');



require __DIR__.'/service_areas.php';




