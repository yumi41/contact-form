<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/confirm',function(){
    return 'Confirmation page';
});
Route::get('/thanks', function () {
    return 'Thanks page';
});
Route::get('/admin', function () {
    return 'Admin page';
});
Route::get('/register', function () {
    return 'Register page';
});
Route::get('/login', function () {
    return 'Login page';
});