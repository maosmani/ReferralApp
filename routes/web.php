<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferralsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\LinksShowController;
use App\Http\Controllers\ReferralsShowController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/',[ReferralsController::class, 'index'])->name('dashboard');

Route::get('/dashboard/referrals/show/{referral}', [ReferralsController::class, 'show'])->name('show-referral');

Route::get('/dashboard/referrals/create', [ReferralsController::class, 'create'])->name('create-referral');
Route::post('/dashboard/referrals/store', [ReferralsController::class, 'store'])->name('store-referral');


Route::get('/dashboard/search', [SearchController::class, 'index'])->name('search');
Route::post('/dashboard/search', [SearchController::class, 'search'])->name('search-user');



Route::get('dashboard/links',[LinksController::class, 'index'])->name('links');
Route::get('/dashboard/links/create', [LinksController::class, 'create'])->name('create-link');
Route::post('/dashboard/links/store', [LinksController::class, 'store'])->name('store-link');
Route::get('/dashboard/links/show/{link}', [LinksController::class, 'show'])->name('show-link');


/* LinksShowController urls */

Route::get('/links/show/{link}', [LinksShowController::class, 'show'])->name('show-link-to-user');



/* ReferralsShowController urls */

Route::get('/links/referrals/create', [ReferralsShowController::class, 'create'])->name('referrals-create-to-user');

Route::post('/links/referrals/store', [ReferralsShowController::class, 'store'])->name('store-referral-from-user');

Route::get('/links/referrals/thankyou', [ReferralsShowController::class, 'thankyou'])->name('referrals-thankyou');


Route::get('/links/referrals/download', [ReferralsShowController::class, 'download'])->name('download');