<?php


use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/sogand', function () {
//    return view('sogand');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('students', StudentController::class);


Route::get('categories',[AdminCategoriesController::class, 'index'])->name('categories');
Route::post('categories',[AdminCategoriesController::class,'store'])->name('categories.store');
Route::get('categories/edit/{id}',[AdminCategoriesController::class,'edit'])->name('categories.edit');
Route::patch('categories/update/{id}',[AdminCategoriesController::class,'update'])->name('categories.update');
Route::delete('categories/destroy/{id}',[AdminCategoriesController::class,'destroy'])->name('categories.destroy');

Route::get('books',[BookController::class, 'index'])->name('books');
Route::post('books',[BookController::class,'store'])->name('books.store');
Route::get('books/edit/{id}',[BookController::class,'edit'])->name('books.edit');
Route::patch('books/update/{id}',[BookController::class,'update'])->name('books.update');
Route::delete('books/destroy/{id}',[BookController::class,'destroy'])->name('books.destroy');


Route::get('teachers',[TeacherController::class, 'index'])->name('teachers');
Route::post('teachers',[TeacherController::class,'store'])->name('teachers.store');
Route::get('teachers/show/{id}',[TeacherController::class,'show'])->name('teachers.show');
Route::get('teachers/edit/{id}',[TeacherController::class,'edit'])->name('teachers.edit');
Route::patch('teachers/update/{id}',[TeacherController::class,'update'])->name('teachers.update');
Route::delete('teachers/destroy/{id}',[TeacherController::class,'destroy'])->name('teachers.destroy');


Route::get('payments',[PaymentController::class, 'index'])->name('payments');
Route::post('payments',[PaymentController::class,'store'])->name('payments.store');
Route::get('payments/edit/{id}',[PaymentController::class,'edit'])->name('payments.edit');
Route::patch('payments/update/{id}',[PaymentController::class,'update'])->name('payments.update');
Route::delete('payments/destroy/{id}',[PaymentController::class,'destroy'])->name('payments.destroy');


Route::get('exams',[ExamController::class, 'index'])->name('exams');
Route::post('exams',[ExamController::class,'store'])->name('exams.store');
Route::get('exams/show/{id}',[ExamController::class,'show'])->name('exams.show');
Route::get('exams/edit/{id}',[ExamController::class,'edit'])->name('exams.edit');
Route::patch('exams/update/{id}',[ExamController::class,'update'])->name('exams.update');
Route::delete('exams/destroy/{id}',[ExamController::class,'destroy'])->name('exams.destroy');



Route::get('courses',[CourseController::class, 'index'])->name('courses');
Route::post('courses',[CourseController::class,'store'])->name('courses.store');
Route::get('courses/edit/{id}',[CourseController::class,'edit'])->name('courses.edit');
Route::patch('courses/update/{id}',[CourseController::class,'update'])->name('courses.update');
Route::delete('courses/destroy/{id}',[CourseController::class,'destroy'])->name('courses.destroy');


Route::get('full-calender', [FullCalenderController::class, 'index'])->name('calender');

Route::post('full-calender/action', [FullCalenderController::class, 'action']);



Route::get('google-line-chart', [HomeController::class, 'googleLineChart'])->name('chartjs');

//Route::get('/send-email', [MailController::class, 'sendEmail']);
//
//
//
//Route::get('send-mail', function () {
//
//    $details = [
//        'title' => 'Mail from ItSolutionStuff.com',
//        'body' => 'This is for testing email using smtp'
//    ];
//
//    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
//
//    dd("Email is Sent.");
//});
