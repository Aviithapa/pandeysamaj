<?php

//Route Dashboard

use App\Http\Controllers\Admin\CommunityMemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('dashboard/user', UserController::class)->middleware(['auth']);
Route::resource('dashboard/community-member', CommunityMemberController::class)->middleware(['auth']);
