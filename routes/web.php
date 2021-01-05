<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@sendcontact')->name('send.contact');
Route::get('/about', 'HomeController@about')->name('about');

Auth::routes();
 //instructor
 Route::prefix('instructor')->group(function(){
    Route::get('/login', 'Auth\InstructorLoginController@ShowLoginform')->name('instructor.login');
    Route::post('/login', 'Auth\InstructorLoginController@login')->name('instructor.login.submit');
    Route::get('/', 'Auth\InstructorController@index')->name('instructor.dashboard');
    Route::get('/category', 'Auth\InstructorController@category')->name('instructor.category');
    Route::post('/category', 'Auth\InstructorController@addcategory')->name('category.submit');
    Route::patch('/managecategory/{id}', 'Auth\InstructorController@managecategory')->name('instructor.managecategory');
    Route::DELETE('/deletecategory/{id}', 'Auth\InstructorController@deletecategory')->name('category.delete');
    Route::get('/offlinecourse', 'Auth\InstructorController@offlinecourse')->name('instructor.offlinecourse');
    Route::post('/offlinecourse', 'Auth\InstructorController@addofflinecourse')->name('offlinecourse.submit');
    Route::patch('/offlinecourse/{id}', 'Auth\InstructorController@updateofflinecourse')->name('offlinecourse.update');
    Route::DELETE('/offlinecourse/{id}', 'Auth\InstructorController@deleteofflinecourse')->name('offlinecourse.delete');
    Route::get('/offlinelesson', 'Auth\InstructorController@offlinelesson')->name('instructor.offlinelesson');
    Route::post('/offlinelesson', 'Auth\InstructorController@addlesson')->name('lesson.submit');

    Route::get('/onlinecourse', 'Auth\InstructorController@onlinecourse')->name('instructor.onlinecourse');
    Route::post('/onlinecourse', 'Auth\InstructorController@addonlinecourse')->name('course.submit');
    // Route::get('/manageonlinecourse/{id}', 'Auth\InstructorController@manageonlinecourse')->name('instructor.manageonlinecourse');
    Route::get('/onlinelesson', 'Auth\InstructorController@onlinelesson')->name('instructor.onlinelesson');
    // Route::get('/manageonlinelesson/{id}', 'Auth\InstructorController@manageonlinelesson')->name('instructor.manageonlinelesson');
    Route::get('/settings', 'Auth\InstructorController@instructor_settings')->name('instructor.settings');
    Route::PATCH('/settings/{id}', 'Auth\InstructorController@update_settings')->name('update.settings');
    Route::post('/changepassword', 'Auth\InstructorController@changepassword')->name('changepassword.settings');
    Route::get('/contact', 'Auth\InstructorController@contact')->name('instructor.contact');
 });

 // admin

 Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@ShowLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    Route::get('/addinstructor', 'Auth\AdminController@addinstructor')->name('addInstructor');
    Route::post('/addinstructor', 'Auth\AdminController@submitinstructor')->name('instructor.submit');

 });




Route::get('/auth/check', 'HomeController@checkAuth');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('category/{category}/courses', 'HomeController@courses_by_category')->name('courses_by_category');
Route::get('courses/{course}', 'HomeController@course_detail')->name('course_detail');
Route::get('offlinecourse/{offlinecourses}', 'HomeController@offlinecourse_detail')->name('offline_detail');
Route::post('offlinecourse', 'HomeController@Apply_offlinecourse_detail')->name('apply_offline_detail');

// cart
Route::get('my-carts', 'CartController@carts')->name('carts.all');
Route::post('cart/add', 'CartController@add')->name('cart.add');
Route::post('cart/remove/{id}', 'CartController@remove')->name('cart.remove');


// enroll
Route::get('enroll', 'EnrollController@enroll')->name('enroll');

// users
Route::group(['middleware' => 'auth'], function () {
    Route::get('my_courses', 'UserController@courses')->name('user.courses');
    Route::get('my_courses/{course}/lesson/{id}', 'UserController@lesson')->name('user.courses.lessons');

    // profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('', 'UserController@user_profile')->name('user.profile');
        Route::post('', 'UserController@user_profile_update')->name('user.profile.update');

        Route::view('credentials', 'users.user-credentials')->name('user.credentials');
        Route::post('credentials', 'UserController@user_credentials_update')->name('user.credentials.update');

        Route::view('photo', 'users.user-photo')->name('user.photo');
        Route::post('photo', 'UserController@user_photo_update')->name('user.photo.update');
    });

    // review
    Route::post('review', 'ReviewController@review')->name('add.review');


});
