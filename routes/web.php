<?php

use App\Http\Controllers\admin\adminhomecontroller;
use App\Http\Controllers\Member\MemberHomeController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });


// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/admin', [adminController::class, 'admin'])->name('admin')->middleware('status');
// });



Route::get('/', [adminhomecontroller::class, 'Index'])->name('book');

Route::get('/book/add', [adminhomecontroller::class, 'Form'])->name('book.form');
Route::post('/book/store', [adminhomecontroller::class, 'Store'])->name('book.store');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// =================  @route   Member
Route::get('/member', [MemberHomeController::class, 'Index'])->name('member.home');
