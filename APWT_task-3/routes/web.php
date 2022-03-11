<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
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
    return view('login.login');
});


Route::get('/home', [userController::class, 'home'])->name('userHome');
Route::get('/user/product', [userController::class, 'product'])->name('userProduct');
Route::get('/user/ourTeam', [userController::class, 'ourTeam'])->name('ourTeam');
Route::get('/user/aboutUs', [userController::class, 'aboutUs'])->name('aboutUs');
Route::get('/user/contactUs', [userController::class, 'contactUs'])->name('contactUs');



Route::get('/homeAdmin', [adminController::class, 'home'])->name('adminHome');
Route::get('/product', [adminController::class, 'product'])->name('adminProduct');
Route::get('/ourTeam', [adminController::class, 'ourTeam'])->name('adminOurTeam');
Route::get('/aboutUs', [adminController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [adminController::class, 'contactUs'])->name('contactUs');
Route::get('/userList', [adminController::class, 'userList'])->name('userList')->middleware('validAdmin');
Route::get('/addUser', [adminController::class, 'addUser'])->name('addUser')->middleware('validAdmin');



Route::post('/addUser', [adminController::class, 'addUserSubmit'])->name('addUser');

Route::get('/deleteUser/{id}', [adminController::class, 'deleteUser'])->name('deleteUser')->middleware('validAdmin');;



Route::post('/deleteUser', [adminController::class, 'deleteUserSubmit'])->name('deleteUser');

Route::get('/editUser/{id}', [adminController::class, 'editUser'])->middleware('validAdmin');;



Route::post('/editUser', [adminController::class, 'editUserSubmit'])->name('editUser');





Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/registration', [registrationController::class, 'registration'])->name('registration');

Route::post('/login', [loginController::class, 'loginSubmit'])->name('login');
Route::post('/registration', [registrationController::class, 'registrationSubmit'])->name('registration');

Route::get('/login', [loginController::class, 'logOut'])->name('logOut');



