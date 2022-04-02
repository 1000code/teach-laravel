<?php

use App\Http\Controllers\Admin\adminhomecontroller;
use App\Http\Controllers\Admin\AdminHomeController as AdminAdminHomeController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Member\MemberHomeController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();




// ====================  Private Route
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [AdminHomeController::class, 'Index'])->name('book');
    Route::get('/book/add', [AdminHomeController::class, 'Form'])->name('book.form');
    Route::post('/book/store', [AdminHomeController::class, 'Store'])->name('book.store');


    // =================  @route   Admin
    Route::get('/admin', [AdminHomeController::class, 'Index'])->name('admin.home')->middleware('isAdmin');
    Route::get('/admin/role', [AdminRoleController::class, 'Index'])->name('admin.role')->middleware('isAdmin');

    Route::get('/admin/role/update/{slug}', [AdminRoleController::class, 'FormUpdate'])->name('admin.role.update')->middleware('isAdmin');





    Route::get('/agent', [AdminHomeController::class, 'Agent'])->name('agent.home')->middleware('isAgent');


    // ================= @route Member
    Route::get('/member', [MemberHomeController::class, 'Index'])->name('member.home');
});
