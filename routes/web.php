<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@show');
Route::get('/updates/{id}/{subject}', 'HomeController@showUpdates');
Route::get('/register', 'HomeController@register');
Route::get('/rankings', 'HomeController@rank');
Route::get('/bloodcastle-rankings', 'HomeController@bcrank');
Route::get('/gens-rankings', 'HomeController@gensrank');
Route::get('/donations', 'HomeController@donations');

Route::get('/mission', 'HomeController@mission');
Route::get('/vision', 'HomeController@vision');
Route::get('/faq', 'HomeController@faq');
Route::get('/tos', 'HomeController@tos');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/about-us', 'HomeController@about');
Route::get('/contact-us', 'HomeController@contact');

Route::get('/forgot-password', 'HomeController@forgotpw');
Route::post('/forgot-password', 'HomeController@postForgotpw');
Route::post('/save', 'HomeController@reg');
Route::post('/login', 'HomeController@login');
Route::get('/login', 'HomeController@show');
Route::get('/logout', 'HomeController@logout');
Route::post('/duelmaster', 'HomeController@postDuelmaster');
Route::get('/lottery', 'HomeController@lottery');
Route::post('/lottery', 'HomeController@postLottery');
Route::get('/main', 'HomeController@mainLauncher');
Route::get('/news', 'HomeController@newsLauncher');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    var_dump($exitCode);
});

/*
* Authenticated user only.
*/
Route::get('/account/info', 'AccountController@info')->middleware('auth');
Route::get('/account/characters', 'AccountController@unstockCharacters')->middleware('auth');
Route::get('/account/rename', 'AccountController@renameCharacter')->middleware('auth');
Route::post('/account/rename', 'AccountController@processRename')->middleware('auth');
Route::post('/account/resetstats', 'AccountController@resetStats')->middleware('auth');
Route::get('/account/transfer', 'AccountController@transferCharacter')->middleware('auth');


Route::get('/account/wcoins', 'AccountController@getTranferWcoins')->middleware('auth');
Route::post('/account/wcoins', 'AccountController@postTranferWcoins')->middleware('auth');


Route::get('/account/vip', 'AccountController@goVIP')->middleware('auth');
Route::post('/account/vip', 'AccountController@postVIP')->middleware('auth');
Route::get('/account/change-password', 'AccountController@changePassword')->middleware('auth');
Route::post('/account/change-password', 'AccountController@postchangePassword')->middleware('auth');
Route::get('/account/donate', 'AccountController@donate')->middleware('auth');
Route::post('/account/process-donate', 'AccountController@donateProcess')->middleware('auth');
Route::get('/account/donation-history', 'AccountController@donationHistory')->middleware('auth');
