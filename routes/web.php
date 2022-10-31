<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;

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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// logins
Route::post('/user-logins', [LoginsController::class, 'logins'])->name('logins');
Route::get('/admin-home', [AdminController::class, 'login'])->name('admin.login');
Route::get('/user-home', [UsersController::class, 'login'])->name('users.login');

//admin routes
Route::get('/admin-form-book', [AdminController::class, 'bookform'])->name('admin.book.form');
Route::post('/admin-add-book', [AdminController::class, 'addbook'])->name('add.book');
Route::get('/admin-all-books', [AdminController::class, 'allbooks'])->name('admin.all.books');
Route::get('/admin-user-form', [AdminController::class, 'userform'])->name('user.reg.form');
Route::post('/admin-add-user', [AdminController::class, 'adduser'])->name('add.user');
Route::get('/admin-view-users', [AdminController::class, 'allusers'])->name('users.all');
Route::get('/admin-edit-user-form/{id}', [AdminController::class, 'edituser'])->name('edituser');
Route::get('/admin-delete-user/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
Route::post('/admin-update-user/{id}', [AdminController::class, 'update'])->name('update.user');
Route::get('/admin-edit-book/{id}', [AdminController::class, 'viewbook'])->name('admin.edit.book');
Route::post('/admin-update-book/{id}', [AdminController::class, 'updatebook'])->name('admin.update.book');
Route::get('/admin-delete-book/{id}', [AdminController::class, 'deletebook'])->name('admin.delete.book');

//users routes
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/users-signup', [RegisterController::class, 'signupform'])->name('signup.user');
Route::post('/users-register', [RegisterController::class, 'registeruser'])->name('register.user');

Route::get('/user-all-books', [UsersController::class, 'allbooks'])->name('user.all.books');
Route::get('/user-mark-book/{id}', [UsersController::class, 'markbook'])->name('mark.fav');
Route::get('/user-unmark-book/{id}', [UsersController::class, 'unmarkbook'])->name('unmark.fav');
Route::get('/user-like-book/{id}', [UsersController::class, 'likebook'])->name('like.book');
Route::get('/user-popular-books', [UsersController::class, 'popularbooks'])->name('popular.books');


