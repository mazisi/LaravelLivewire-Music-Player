<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('auth/facebook', [SocialiteController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialiteController::class, 'loginWithFacebook']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/artists', function () {return view('artists');});
Route::get('/view-album', function () {return view('view_artist');});
Route::get('/releases',[AlbumsController::class,'releases']);
Route::get('/sign-in', function () {return view('auth.sign_in');});
Route::get('/sign-up', function () {return view('auth.sign_up');});
Route::get('/forgot-password', function () {return view('auth.forgot_password');});
Route::get('/new-password', function () {return view('auth.enter_new_password');});
Route::get('/contact', function () {return view('contact');});

Route::get('/javascript-not-enabled', function () {return view('noscript');});

Route::controller(ArtistsController::class)->group(function () {
    Route::get('/artists', 'artists')->name('artists');
    Route::get('/artist-albums/{slug}', 'view_artist_albums')->name('artist_albums');
});



Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/users', function () {return view('dashboard.users');});
    Route::get('/dashboard', function () {return view('dashboard.index');});
     Route::get('/dashboard/artists', function () {return view('dashboard.artists.artists');});
    Route::get('/dashboard/artist-details', function () {return view('dashboard.artists.artist-details');});
    Route::get('/add-songs', function () {return view('dashboard.artists.add_songs');});
    Route::get('/dash/view-albums', function () {return view('dashboard.artists.view_albums');});
    Route::get('/dashboard/all-songs', function () {return view('dashboard.all_songs');});
});
    
   
    Route::get('/my-profile', function () {return view('dashboard.my_profile');});
    Route::get('/playlist', function () {return view('dashboard.playlist');});
});