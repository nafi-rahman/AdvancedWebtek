<?php

use App\Http\Controllers\pageControl;
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

Route::get('/', function () {
    return view('home');
});

route::get('/home',[pageControl::class, 'home'])->name('home');

route::get('/about',[pageControl::class, 'about'])->name('about');

route::get('/contact',[pageControl::class, 'contact'])->name('contact');

route::get('/service',[pageControl::class, 'serviece'])->name('service');

route::get('/team',[pageControl::class, 'team'])->name('team');
