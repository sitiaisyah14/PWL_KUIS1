<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('products', [ProductsController::class, 'products'])->name('products');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');

Route::get('employee', [EmployeeController::class, 'employee'])->name('employee');
Route::resource('item',ItemController::class);
Route::get('supplier', [SupplierController::class, 'supplier'])->name('supplier');
Route::get('customer', [CustomerController::class, 'customer'])->name('customer');

Route::get('login', [HomeContrPoller::class,'login']);
Route::get('register', [HomeController::class,'register']);
