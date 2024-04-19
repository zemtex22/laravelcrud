<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/user', [UserController::class, 'new'])->name('new');

Route::post('/submit',[UserController::class, 'submit'])->name('submit');

Route::get('/inserted',[UserController::class, 'inserted'])->name('inserted');

// FOR CRUD
Route::get('/users', [UserController::class, 'index'])->name('users'); // To display all users

Route::get('/edit/{id}', [UserController::class,'edit'])->name('edit'); // To Edit a user

Route::post('/update/{id}', [UserController::class, 'update'])->name('update'); // To update an existing user

Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy'); // To delete a user

?>



