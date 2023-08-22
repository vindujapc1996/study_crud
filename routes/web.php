<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Seeder;
use App\Http\Controllers\EmployeeController;
use App\Http\Middleware\AdminMiddleware;



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

Route::get('/',[Employeecontroller::class,'index'])->name('index');

Route::get('/login',[EmployeeController::class,'login'])->name('login');
Route::post('/showlogin',[EmployeeController::class,'showlogin'])->name('showlogin');

Route::middleware(['admin'])->group(function () {
   

Route::get('/admin/home',[EmployeeController::class,'home'])->name('home');
Route::get('/admin/register',[EmployeeController::class,'register'])->name('register');
Route::post('/admin/registration',[EmployeeController::class,'registration'])->name('registration');
Route::get('/admin/edit/{id}',[EmployeeController::class,'edit'])->name('edit');
Route::post('/admin/update/{id}',[EmployeeController::class,'update'])->name('update');
Route::get('/admin/view',[EmployeeController::class,'view'])->name('view');
Route::get('/admin/delete/{id}',[EmployeeController::class,'delete'])->name('delete');
Route::get('/logout',[employeeController::class,'logout'])->name('logout');
});