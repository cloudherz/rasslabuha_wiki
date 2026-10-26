<?php

use App\Http\Controllers\Account\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('pages.generic.home');
})->name('home');

Route::get('/news', function () {
    return view('pages.generic.news');
})->name('news');

Route::get('/about', function () {
    return view('pages.generic.about');
})->name('about');

Route::get('/faq', function () {
    return view('pages.generic.faq');
})->name('faq');



Route::get('new', function () {
    return view('pages.explore.new');
})->name('new');

Route::get('/popular', function () {
    return view('pages.explore.popular');
})->name('popular');

Route::get('/favorites', function () {
    return view('pages.explore.favorites');
})->name('favorites');

Route::get('/topics', function () {
    return view('pages.explore.topics');
})->name('topics');



Route::get('/my_articles', function () {
    return view('pages.user.my_articles');
})->name('my_articles');

Route::get('/my_topics', function () {
    return view('pages.user.my_topics');
})->name('my_topics');

Route::get('/create_a_topic', function () {
    return view('pages.user.create_a_topic');
})->name('create_a_topic');

Route::get('/write_an_article', function () {
    return view('pages.user.write_an_article');
})->name('write_an_article');



Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/account', function () {
    return view('pages.auth.account');
})->name('account');



Route::post('/login', [LoginController::class, 'login'])->name('post.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('post.logout');

Route::post('/account/info', [InfoController::class, 'update'])->name('post.account.info');
