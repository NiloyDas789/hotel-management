<?php

use App\Http\Controllers\Backend\CompanySettingController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

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
// Frontend Routes

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/rooms', function () {
    return view('frontend.rooms');
})->name('rooms');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('gallery');


// Frontend Routes End

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('role/assign', [RoleController::class, 'assign'])->name('role.assign');
    Route::post('role/assign', [RoleController::class, 'storeAssign'])->name('assign.store');
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);

    Route::get('settings/company-setting', [CompanySettingController::class, 'editCompanySetting'])->name('company-setting.edit');
    Route::post('settings/company-setting', [CompanySettingController::class, 'updateCompanySetting'])->name('company-setting.update');
});

require __DIR__.'/auth.php';
