<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferralsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\LinksShowController;
use App\Http\Controllers\ReferralsShowController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;


// Start of generate routes
Route::get('/', function () {
    return view('home');  })->name("home");

Route::get('/about', function () {
    return view('about');  })->name("about");

Route::get('/contact', function () {
    return view('contact'); })->name("contact");


Route::get('dashboard/',[ReferralsController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/referrals/show/{referral}', [ReferralsController::class, 'show'])->name('show-referral')->middleware('auth');

Route::get('/dashboard/referrals/create', [ReferralsController::class, 'create'])->name('create-referral')->middleware('auth');
Route::post('/dashboard/referrals/store', [ReferralsController::class, 'store'])->name('store-referral')->middleware('auth');


Route::get('/dashboard/search', [SearchController::class, 'index'])->name('search')->middleware('auth');
Route::post('/dashboard/search', [SearchController::class, 'search'])->name('search-user')->middleware('auth');



Route::get('dashboard/links',[LinksController::class, 'index'])->name('links')->middleware('auth');
Route::get('/dashboard/links/create', [LinksController::class, 'create'])->name('create-link')->middleware('auth');
Route::post('/dashboard/links/store', [LinksController::class, 'store'])->name('store-link')->middleware('auth');
Route::get('/dashboard/links/show/{link}', [LinksController::class, 'show'])->name('show-link')->middleware('auth');

Route::get('/dashboard/links/{link}/edit', [LinksController::class, 'edit'])->middleware('auth');

Route::patch('/dashboard/links/{link}', [LinksController::class, 'update'])->middleware('auth');

Route::get('/dashboard/links/delete/{link}', [LinksController::class, 'delete'])->name('delete-link')->middleware('auth');

Route::delete('/dashboard/links/{link}', [LinksController::class, 'destroy'])->name('destroy-link')->middleware('auth');

/* LinksShowController urls */
/*
Route::get('/links/show/{link}', [LinksShowController::class, 'show'])->name('show-link-to-user');
*/
Route::get('/links/{slug}', [LinksShowController::class, 'show'])->name('show-link-to-user');


/* ReferralsShowController urls */

Route::get('/links/referrals/create', [ReferralsShowController::class, 'create'])->name('referrals-create-to-user');

Route::post('/links/referrals/store', [ReferralsShowController::class, 'store'])->name('store-referral-from-user');

Route::get('/links/referrals/thankyou', [ReferralsShowController::class, 'thankyou'])->name('referrals-thankyou');


Route::get('/links/referrals/download/{email}', [ReferralsShowController::class, 'download'])->name('download');



// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
