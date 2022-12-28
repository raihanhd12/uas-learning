<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\DashboardLessonController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardPrivacyController;
use App\Http\Controllers\DashboardSectionController;
use App\Http\Controllers\DashboardDisclaimerController;
use App\Http\Controllers\DashboardInstructorController;
use App\Http\Controllers\DashboardMembershipController;
use App\Http\Controllers\DashboardCourseLevelController;
use App\Http\Controllers\DashboardCoursePriceController;
use App\Http\Controllers\DashboardBlogCategoryController;
use App\Http\Controllers\DashboardCourseCategoryController;



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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/instructors', [InstructorController::class, 'index']);
Route::get('/instructor/{instructor:id}', [InstructorController::class, 'show']);
Route::get('/aboutus', [AboutUsController::class, 'index']);
Route::get('/privacy', [PrivacyController::class, 'index']);

Route::get('/contactus', [ContactUsController::class, 'index']);
Route::post('/contactus', [ContactUsController::class, 'store']);
Route::get('/disclaimer', [DisclaimerController::class, 'index']);

Route::get('/memberships', [MembershipController::class, 'index']);
Route::get('/membership/{membership:id}', [MembershipController::class, 'show'])->middleware('auth');
Route::post('/checkout', [MembershipController::class, 'store'])->middleware('auth');

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{course:id}', [CourseController::class, 'show']);
Route::post('/course_user/{course:id}', [CourseController::class, 'store'])->middleware('auth');
Route::get('/coursecategories', [CourseController::class, 'indexCategory']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{blog:id}', [BlogController::class, 'show']);
Route::get('/categories', [BlogController::class, 'indexCategory']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/registeradmin', [RegisterAdminController::class, 'index'])->middleware('guest');
Route::post('/registeradmin', [RegisterAdminController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

Route::resource('/dashboard/blogs', DashboardBlogController::class)->middleware('admin');
Route::resource('/dashboard/blog_category', DashboardBlogCategoryController::class)->except('show')->middleware('admin');


Route::resource('/dashboard/courses', DashboardCourseController::class)->middleware('admin');
Route::resource('/dashboard/instructors', DashboardInstructorController::class)->middleware('admin');
Route::resource('/dashboard/course_category', DashboardCourseCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/course_level', DashboardCourseLevelController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/course_price', DashboardCoursePriceController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/lesson', DashboardLessonController::class)->middleware('admin');
Route::resource('/dashboard/privacy', DashboardPrivacyController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/disclaimer', DashboardDisclaimerController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/contact', DashboardContactController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/membership', DashboardMembershipController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/users', DashboardUserController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/section', DashboardSectionController::class)->except('show')->middleware('admin');

Route::resource('/course_user', CourseUserController::class)->middleware('active');
Route::get('/lesson/{course:id}', [LessonController::class, 'index'])->middleware('active');

Route::get('/migrate', function(){
    // Memanggil command artisan untuk sql dan db
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
});

Route::get('/configClear', function(){
    // Untuk clear
    Artisan::call('config:clear');
});
