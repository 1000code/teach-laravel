<?php

use App\Http\Controllers\Admin\adminhomecontroller;
use App\Http\Controllers\Admin\AdminHomeController as AdminAdminHomeController;
use App\Http\Controllers\Member\MemberHomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/admin', [adminController::class, 'admin'])->name('admin')->middleware('status');
// });

Auth::routes();


Route::get('/', [AdminHomeController::class, 'Index'])->name('book');
Route::get('/book/add', [AdminHomeController::class, 'Form'])->name('book.form');
Route::post('/book/store', [AdminHomeController::class, 'Store'])->name('book.store');









// =================  @route   Admin
Route::get('/admin', [AdminHomeController::class, 'Index'])->name('admin.home');

// ================= @route Member
Route::get('/member', [MemberHomeController::class, 'Index'])->name('member.home');
