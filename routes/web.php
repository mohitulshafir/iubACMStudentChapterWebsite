<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberController;
use App\Http\Controllers\ContactController;

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

Route::get('/roadmap', function () {
    return view('roadmap');
});


Route::get('/exbody2021', function () {
    return view('exbody2021');
});

Route::get('/exbody2020', function () {
    return view('exbody2020');
});

Route::get('/exbody2019', function () {
    return view('exbody2019');
});

Route::get('/facultySponsor', function () {
    return view('facultySponsor');
});

Route::get('/exMember', function () {
    return view('exMember');
});

Route::get('/joinIUBACM', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::post('/admindashboard', [memberController::class, 'signin'])->name('admindashboard');
Route::get('/login', [memberController::class, 'signout'])->name('signout');
Route::get('/welcome',[ContactController::class,'contact']);
Route::get('memberRegistration', [memberController::class, 'memRegistration']);
Route::post('save', [memberController::class, 'store'])->name('member.store');
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::get('member', [memberController::class, 'memberList']);


