<?php

use App\Http\Controllers\aboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\admin\adminHomeController;
use App\Http\Controllers\admin\adminaboutusController;
use App\Http\Controllers\admin\adminProductController;
use App\Http\Controllers\admin\adminContactController;
use App\Models\Product;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

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
Route::get('test',function(){
    $products = Product::all()->where('categories','=','white-marble');
return view('products-card-view',compact('products'));
});
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/product', [productController::class, 'index'])->name('products');
Route::get('/aboutus', [aboutusController::class, 'index'])->name('aboutus');
Route::get('/product/{id}', [productController::class, 'get'])->name('product');
Route::get('/contact', [contactController::class, 'index'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [adminHomeController::class, 'index'])->name('adminhome');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/product', [adminProductController::class, 'index'])->name('adminproducts');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/aboutus', [adminaboutusController::class, 'index'])->name('adminaboutus');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/product/{id}', [adminProductController::class, 'get'])->name('adminproduct');
Route::middleware(['auth:sanctum', 'verified'])->post('/addproduct', [adminProductController::class, 'create'])->name('createproduct');
Route::middleware(['auth:sanctum', 'verified'])->post('/addcategory', [adminProductController::class, 'createCategory'])->name('createcategory');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/contact', [adminContactController::class, 'index'])->name('admincontact');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/delete-product', [adminProductController::class, 'deleteProduct'])->name('deleteproduct');
Route::get('/gettoken', [productController::class, 'gettoken']);
Route::get('/adddata', [adminController::class, 'initFooterData'])->name('initFooterData');
Route::middleware(['auth:sanctum', 'verified'])->post('/change-footer-data', [adminController::class, 'updateFooterData'])->name('editfooterdata');
Route::middleware(['auth:sanctum', 'verified'])->post('/change-product-detail', [adminProductController::class, 'update'])->name('editproduct');

Route::get('/getproducts', [productController::class, 'getproducts'])->name('getproducts');

Route::get('/admingetproducts', [adminProductController::class, 'getproducts'])->name('admingetproducts');

Route::get('createadmin', [adminController::class, 'create'])->name('createAdmin');

