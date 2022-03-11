<?php

use App\Http\Controllers\pageControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userControl;
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
    return view('users.login');
});

route::get('/home',[pageControl::class, 'home'])->name('home');

route::get('/about',[pageControl::class, 'about'])->name('about');

route::get('/contact',[pageControl::class, 'contact'])->name('contact');

route::get('/service',[pageControl::class, 'serviece'])->name('service');

route::get('/team',[pageControl::class, 'team'])->name('team');

route::get('/login',[userControl::class, 'login'])->name('login');
route::get('/register',[userControl::class, 'register'])->name('register');

route::post('/login',[userControl::class, 'loginSub'])->name('login');
route::post('/register',[userControl::class, 'registerSub'])->name('register');

route::get('/login',[userControl::class, 'logOut'])->name('logOut');
