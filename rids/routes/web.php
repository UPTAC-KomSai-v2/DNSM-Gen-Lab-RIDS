<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\IndexController;

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[UserController::class, 'UserDashboard'])-> name('dashboard');
    Route::post('/user/profile/store',[UserController::class, 'UserProfileStore'])-> name('user.profile.store');
    Route::get('/user/logout',[UserController::class, 'UserLogout'])-> name('user.logout');
    Route::post('/user/update/password',[UserController::class, 'UserUpdatePassword'])-> name('user.update.password');
});

Route::get('/product/details', [IndexController::class, 'ProductDetails'])->name('product.details');
Route::get('/mycart', [IndexController::class, 'MyCart'])->name('mycart');
Route::get('/checkout', [IndexController::class, 'CheckOut'])->name('checkout');
Route::get('/equipments', [IndexController::class, 'Equipments'])->name('equipments');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});

Route::middleware('auth', 'role:personnel')->group(function () { // to change role to personnel
    Route::get('/personnel/dashboard', [PersonnelController::class, 'PersonnelDashboard'])->name('personnel.dashboard');
    Route::get('/personnel/material-list', [PersonnelController::class, 'PersonnelMaterialList'])->name('personnel.inventory.material-list');
    Route::get('/personnel/chemical-list', [PersonnelController::class, 'PersonnelChemicalList'])->name('personnel.inventory.chemical-list');
    Route::get('/personnel/equipment-list', [PersonnelController::class, 'PersonnelEquipmentList'])->name('personnel.inventory.equipment-list');
    Route::get('/personnel/facility-list', [PersonnelController::class, 'PersonnelFacilityList'])->name('personnel.inventory.facility-list');

    Route::get('/personnel/reservation-request-list', [PersonnelController::class, 'PersonnelReservationRequestList'])->name('personnel.reservation.reservation-request-list');
    Route::get('/personnel/reservation-schedule-list', [PersonnelController::class, 'PersonnelReservationScheduleList'])->name('personnel.reservation.reservation-schedule-list');
});

require __DIR__.'/auth.php';
