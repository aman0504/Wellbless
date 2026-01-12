<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Admin\Categories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', function () {
    auth()->logout();
    // return redirect()->route('login');
})->name('logout');

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/categories', 'categories')->name('admin.categories');
});
