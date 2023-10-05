<?php

use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\EquipmentSellerController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\CourseController;
use App\Models\User;
use App\Models\Course;
use App\Models\EquipmentSeller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;


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
 
Route::get('/',function(){
  return view('startingPage');

});
Route::get('/home', function () {
  $data = null;
  if(Session::has('userid')){
      $data = User::find(Session::get('userid'));
  }
 
  $equipment = EquipmentSeller::latest()->get();
  return view('home',compact('data','equipment'));
})->name('home');


Route::get('/signup',[UserController::class,'signupPage'])->name('signupPage');
Route::get('/login',[UserController::class,'loginPage'])->name('loginPage');


Route::post('/signup',[UserController::class,'signup'])->name('signup');
Route::post('/login',[UserController::class,'login'])->name('login');


Route::get('/admin-dashboard', [GovernmentController::class, 'adminDashboardPage'])->name('adminDashboardPage');
Route::get('/admin-view-courses', [GovernmentController::class, 'adminViewCoursesPage'])->name('adminViewCoursesPage');

Route::post('/coursesPost',[CourseController::class,'postCourse'])->name('coursesPost');
Route::get('/loan-request', [GovernmentController::class, 'loanRequestPage'])->name('loanRequestPage');
Route::get('/admin-market-price', [GovernmentController::class, 'adminMarketPricePage'])->name('adminMarketPricePage');


Route::get('/farmer-course',function(){
  $courses=Course::all();
  $data = null;
  if(Session::has('userid')){
      $data = User::find(Session::get('userid'));
  }
  return view('farmer.course',compact('courses', 'data'));

});
Route::get('/visitorpage',[VisitorController::class,'visitorPage'])->name('visitorpage');

Route::get('/sellerpage',[EquipmentSellerController::class,'sellerPage'])->name('sellerpage');
Route::post('/sellerpage',[EquipmentSellerController::class,'postSellerPage'])->name('postequipment');

Route::get('/jobseekerpage',[JobSeekerController::class,'jobSeekerPage'])->name('jobseekerpage');

Route::get('/farmer-loan-apply',function(){
    $data = null;
    if(Session::has('userid')){
        $data = User::find(Session::get('userid'));
    }
    return view('farmer.loanApply',compact('data'));
  });
  Route::get('/farmer-seasonal-worker',function(){
    $data = null;
    if(Session::has('userid')){
        $data = User::find(Session::get('userid'));
    }
    return view('farmer.seasonalWorker',compact('data'));
  });
  Route::get('/farmer-service',function(){
    $data = null;
    if(Session::has('userid')){
        $data = User::find(Session::get('userid'));
    }
    return view('farmer.service',compact('data'));
  });
  Route::get('/farmer-calender',function(){
    $data = null;
    if(Session::has('userid')){
        $data = User::find(Session::get('userid'));
    }
    return view('farmer.calender',compact('data'));
  });
  Route::get('/farmer-order-page/{id}',function($id){
    $data = null;
    $equip = EquipmentSeller::find($id);
    if(Session::has('userid')){
        $data = User::find(Session::get('userid'));
    }
    return view('farmer.orderPage',compact('data','equip'));
  });
  Route::get('/farmer-product',function(){
    $data = null;
    $products = EquipmentSeller::all();
    if(Session::has('userid')){
        $data = User::find(Session::get('userid'));
    }
    return view('farmer.product',compact('data','products'));
  });
Route::get('/orderSuccess',[UserController::class,'orderSuccess'])->name('orderSuccess');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/visitor',[UserController::class,'visitor']);
Route::post('/submit_job_application',[UserController::class,'submit_job_application'])->name('submit_job_application');
Route::post('/addProduct',[EquipmentSellerController::class,'addProduct'])->name('addProduct');