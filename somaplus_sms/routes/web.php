<?php

use App\Http\Controllers\SchoolTrustController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\featuresController;
use App\Http\Controllers\homeContoller;
use App\Http\Controllers\homeController;

// Route::get('/', function () {
//   //   $schoolTrustController = new SchoolTrustController();
//   //   $schoolsData = $schoolTrustController->index();
//   // $featuresData = new featuresController;
//   // $featuresData = $featuresData->index();
//   // return view('welcome', compact('schoolsData','featuresData'));
                
//   //   // return view('welcome', ['schoolsData' => $schoolsData],


  
// })->name('welcome');

 Route::get('/', [homeController::class, 'index'])->name('welcome');



// Route::get('/features' ,function(){
//   return view('features');
// });
Route::get('/features', [featuresController::class, 'allFeatures'])->name('features');

Route::get('/pricing', function (){
  return view('pricing');
});
Route::get('/customers-case-studies', function(){
  return view('features.customers');
  });
  Route::get('/contactUs', function(){
    return view('contact');
  });
Route::get('/Book-a-demo',
  [DemoController::class, 'showBookingPage']
  )->name('book-demo');


  // Route::get('/book-demo', )->name('book-demo');
  Route::get('/select-date-time', [DemoController::class, 'showDateTimePage'])->name('select-date-time');
  Route::get('/booking-confirmation', [DemoController::class, 'showConfirmation'])->name('booking-confirmation');
  Route::get('/book-demo', [DemoController::class, 'showDetailsPage'])->name('book-demo');
  Route::post('/bookDemo', [DemoController::class, 'bookDemo'])->name('bookDemo');


  Route::post('/newFeature',[featuresController::class,'store']);
  Route::get('/newFeature',[featuresController::class,'index'])->name('features.store');