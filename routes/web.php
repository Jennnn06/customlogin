<?php

//TIP: Call AuthManager Class
use App\Http\Controllers\AuthManager;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//TIP
//Create a function that will return to registration form
/*Route::get('/registration', function(){
    return view('registration');
});*/

//TIP
//Call AuthManager Class at Controller
//Add name to avoid complications

//Class name is home, can be called from Authmanager
Route::get('/', function () {
    return view('welcome');
})->name('home');

//Setter and Getter ng php
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

//Logout
Route::get('logout', [AuthManager::class, 'logout'])->name('logout');

//Access profile
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', function(){
        return("Hi");
    });
});
