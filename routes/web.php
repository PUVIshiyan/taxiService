<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Role;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('drivers',DriverController::class);

// Route::get('/admin.Dashboard',function(){
//     return view('pages.index');
// });


Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
});
