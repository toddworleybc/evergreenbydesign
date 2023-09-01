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



Route::name('service.')->prefix('service-areas')->group(function () {


   // Beaverton ==/
   Route::get('/beaverton-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Beaverton', [
         'openGraph' => [
            'title' => 'Beaverton Oregon | Website Design and Management Services',
            'description' => 'Experience exceptional website design and services in Beaverton, Oregon. Enjoy Hosting, Email Marketing, Mobile Design, and Content creation too!',
            'imageUrl' => asset('media/images/jpg/beaverton-opt.jpg'),
            'geo' => [
               'lat' => '45.485168',
               'long' => '-122.804489'
            ]
         ]
      ]);
   })->name('beaverton');

   // Eugene ==/
   Route::get('/eugene-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Eugene', [
         'openGraph' => [
            'title' => 'Eugene Oregon Website Design and Management Services',
            'description' => 'Discover expert website design and comprehensive management solutions for Eugene Oregon. Features Hosting, Domain, Content Creation, and beyond!',
            'imageUrl' => asset('media/images/jpg/eugene-opt.jpg'),
            'geo' => [
               'lat' => '44.052071',
               'long' => '-123.086754'
            ]
         ]
      ]);
   })->name('eugene');


   // Keizer ==/
   Route::get('/website-design-and-services-keizer-oregon', function() {
      return Inertia::render('ServiceAreas/Keizer', [
         'openGraph' => [
            'title' => 'Website Design and Services | Keizer Oregon',
            'description' => 'Affordable website design and management in Keizer, Oregon. Services include Website Hosting, Content Creation, Email Marketing, and Ongoing Maintenance.',
            'imageUrl' => asset('media/images/jpg/keizer-opt.jpg'),
            'geo' => [
               'lat' => '44.9901',
               'long' => '-123.0262'
            ]
         ]
      ]);
   })->name('keizer');


   // Newberg ==/
   Route::get('/website-design-and-services-newberg-oregon', function() {
      return Inertia::render('ServiceAreas/Newberg', [
         'openGraph' => [
            'title' => 'Website Services and Design | Newberg Oregon',
            'description' => 'Website Design and Services in Newberg, Oregon. Evergreen By Design also provides inclusive offerings: Hosting, Email marketing, Content Creation, and more',
            'imageUrl' => asset('media/images/jpg/newberg-opt.jpg'),
            'geo' => [
               'lat' => '45.3003',
               'long' => '-122.9761'
            ]
         ]
      ]);
   })->name('newberg');


   // Oregon City ==/
   Route::get('/oregon-city-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/OregonCity', [
         'openGraph' => [
            'title' => 'Oregon City Website Design and Management Services',
            'description' => 'Professional website design for Oregon City. This includes Website Management and Services like Hosting, Domain, Email Marketing, Content Creation and more!',
            'imageUrl' => asset('media/images/jpg/oregoncity-opt.jpg'),
            'geo' => [
               'lat' => '45.3556',
               'long' => '-122.6059'
            ]
         ]
      ]);
   })->name('oregoncity');



   // Roseburg ==/
   Route::get('/roseburg-oregon-website-design-and-management-services', function () {
      return Inertia::render('ServiceAreas/Roseburg', [
         'openGraph' => [
            'title' => 'Roseburg Oregon Website Design and Management Services',
            'description' => 'Discover Roseburg, Oregon\'s premier Website Design and Management Services. Experience excellent services: Hosting, Content Creation, Email Marketing',
            'imageUrl' => asset('media/images/jpg/roseburg-opt.jpg'),
            'geo' => [
               'lat' => '43.216503',
               'long' => '-123.341738'
            ]
         ]
      ]);
  })->name('roseburg');


   // Springfield ==/
   Route::get('/springfield-oregon-website-design-and-management-services', function() {
      return Inertia::render('ServiceAreas/Springfield', [
         'openGraph' => [
            'title' => 'Springfield Oregon Website Design and Management Services',
            'description' => 'Springfield, Oregon\'s Website Design and Services. From inception to execution, our comprehensive website solutions ensure your online presence!',
            'imageUrl' => asset('media/images/jpg/springfield-opt.jpg'),
            'geo' => [
               'lat' => '44.046204',
               'long' => '-123.023346'
            ]
         ]
      ]);
   })->name('springfield');


  // Wilsonville ==/
  Route::get('/website-management-and-design-wilsonville-oregon', function () {
   return Inertia::render('ServiceAreas/Wilsonville', [
      'openGraph' => [
         'title' => 'Website Management and Design | Wilsonville Oregon',
         'description' => 'Receive ongoing website management services with complete website design in Wilsonville, Oregon.  includes: hosting, email marketing, and content creation!',
         'imageUrl' => asset('media/images/jpg/wilsonville-opt.jpg'),
         'geo' => [
            'lat' => '45.3029',
            'long' => '-122.7727'
         ]
      ]
   ]);
   })->name('wilsonville');


    // Woodburn ==/
    Route::get('/woodburn-oregon-professional-website-design-and-services', function() {
      return Inertia::render('ServiceAreas/Woodburn', [
         'openGraph' => [
            'title' => 'Woodburn Oregon Professional Website Design and Services',
            'description' => 'Obtain Website Design and Management Services in Woodburn, Oregon. Secure a comprehensive business website design coupled with continuous website support!',
            'imageUrl' => asset('media/images/jpg/woodburn-opt.jpg'),
            'geo' => [
               'lat' => '45.1437',
               'long' => '-122.8554'
            ]
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
   return Inertia::render('ThankYou');
})->name('thank.you');



