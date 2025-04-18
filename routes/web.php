<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/role-access', function () {
    return view('access.index');
});

Route::get('/manage-user', function () {
    return view('user.index');
});

Route::get('/manage-customer', function () {
    return view('customer.index');
});

Route::get('/manage-he-warehouse', function () {
    return view('he-warehouse.index');
});

Route::get('/manage-sp-warehouse', function () {
    return view('sp-warehouse.index');
});

Route::get('/manage-heavy-duty', function () {
    return view('heavy-duty.index');
});

Route::get('/manage-spare-part', function () {
    return view('spare-part.index');
});
