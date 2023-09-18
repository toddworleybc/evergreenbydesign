<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// SERVICE AREAS ========================/


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

    // Eugene ==/
    Route::get('/website-design-and-management-services-hayesville-oregon', function() {
      return Inertia::render('ServiceAreas/Hayesville', [
         'openGraph' => [
            'title' => 'Website Design and Management Services Hayesville, Oregon',
            'description' => 'Unlock Hayesville\'s Online Potential with Evergreen By Design Website Design and Services: Where Your Website Dreams, Our Affordable Reality!',
            'imageUrl' => asset('media/images/jpg/hayesville.jpg'),
            'geo' => [
               'lat' => '44.985953',
               'long' => '-122.982873'
            ]
         ]
      ]);
   })->name('hayesville');
 
 
    // Eugene ==/
    Route::get('/hillsboro-website-design-and-services', function() {
       return Inertia::render('ServiceAreas/Hillsboro', [
          'openGraph' => [
             'title' => 'Hillsboro, OR Website Design and Services',
             'description' => 'Hillsboro, Oregon Website Design and Services: Unlock the Power of Professional Web Design Solutions in Hillsboro, OR content creation, logo design.',
             'imageUrl' => asset('media/images/jpg/hillsboro-sign.jpg'),
             'geo' => [
                'lat' => '45.522896',
                'long' => '-122.989830'
             ]
          ]
       ]);
    })->name('hillsboro');
 
 
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


    // Keizer ==/
    Route::get('/website-design-and-services-medford-oregon', function() {
        return Inertia::render('ServiceAreas/Medford', [
           'openGraph' => [
              'title' => 'Medford Oregon Website Design and Services',
              'description' => 'Elevate your Medford, Oregon business with Evergreen By Design\'s expert website design services. Your online success starts here!',
              'imageUrl' => asset('media/images/jpg/medford.jpg'),
              'geo' => [
                 'lat' => '42.326515',
                 'long' => '-122.875595'
              ]
           ]
        ]);
     })->name('medford');
 
 
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