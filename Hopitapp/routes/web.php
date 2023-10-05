<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/home',[HomeController::class, 'redirect'])->name('home2');;

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/doctors',[HomeController::class, 'doctors'])->name('doctors');

Route::get('/services',[HomeController::class, 'services'])->name('services');


Route::get('/add_doctor',[AdminController::class, 'adddoctor'])->name('add_doc_view');

Route::get('/add_service',[AdminController::class, 'addservice'])->name('add_serv_view');

Route::get('/show_doctor',[AdminController::class, 'showdoctor'])->name('show_doc');

Route::get('/show_services',[AdminController::class, 'showservices'])->name('show_serv');

Route::get('/appointment',[HomeController::class, 'appointment'])->name('appointment');

Route::get('/show_appointment',[AdminController::class, 'showappointment'])->name('show_appointment');

Route::get('/myappointment',[HomeController::class, 'myappointment'])->name('my_appointment');

Route::get('/delete_doctor/{id}',[AdminController::class, 'deletedoc'])->name('delete_doctor');

Route::get('/delete_appointment/{id}',[AdminController::class, 'deleteapp'])->name('delete_appointment');

Route::post('/upload_doctor',[AdminController::class, 'uploaddoctor'])->name('up_doc');

Route::post('/upload_service',[AdminController::class, 'uploadservice'])->name('up_serv');

Route::post('/upload_appointment',[HomeController::class, 'uploadappointment'])->name('up_appointment');

Route::post('/update_appointment/{id}',[AdminController::class, 'updateappointment'])->name('update_appointment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
