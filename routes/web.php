<?php

use App\Http\Controllers\aboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\admin\adminHomeController;
use App\Http\Controllers\admin\adminaboutusController;
use App\Http\Controllers\admin\adminProductController;

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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/products', [productController::class, 'index'])->name('products');
Route::get('/aboutus', [aboutusController::class, 'index'])->name('aboutus');
Route::get('/product/{id}', [productController::class, 'get'])->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [adminHomeController::class, 'index'])->name('adminhome');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/products', [adminProductController::class, 'index'])->name('adminproducts');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/aboutus', [adminaboutusController::class, 'index'])->name('adminaboutus');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/product/{id}', [adminProductController::class, 'get'])->name('adminproduct');
Route::middleware(['auth:sanctum', 'verified'])->post('/addproduct', [adminProductController::class, 'create'])->name('createproduct');
Route::get('/gettoken', [productController::class, 'gettoken']);
Route::get('/adddata', [adminController::class, 'initFooterData'])->name('initFooterData');
Route::post('/change-address', [adminController::class, 'updateAddress'])->name('editaddress');
Route::post('/change-contact-detail', [adminController::class, 'updateAddress'])->name('editcontact');
Route::post('/change-product-detail', [adminProductController::class, 'update'])->name('editproduct');

Route::get('createadmin', [adminController::class, 'create'])->name('createAdmin');

