<?php

use App\Http\Controllers\Companies\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersCreateController;
// use App\Http\Controllers\CompaniesHomeController;
use App\Http\Controllers\UsersProjectsController;
use App\Http\Controllers\CompaniesProjectsController;

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
    return view('index');
});


Auth::routes();

Route::prefix('companies')
->namespace('App\Http\Controllers\Companies')
->name('companies.')
->group(function(){
    Auth::routes();


    // Route::get('/register', [RegisterController::class,'showRegistrationForm'])
    //     ->name('register');
    // Route::get('/register', [CompaniesProjectsController::class,'index'])
    // ->name('register');
});

Route::get('/users/projects', [UsersProjectsController::class,'index'])
    ->name('users.projects');
// Route::get('/home', [HomeController::class, 'index'])
//     ->name('home');
Route::get('/users/create',[UsersCreateController::class,'show'])
    ->name('users.create');
Route::post('/users/create/store',[UsersCreateController::class,'upload'])
    ->name('users.store');
