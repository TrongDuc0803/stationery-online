<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/cart', [PagesController::class,'cart'])->name('cart')->middleware('auth');;
Route::get('/account', [PagesController::class,'account'])->name('account')->middleware('auth');
Route::get('/checkout', [PagesController::class,'checkout'])->name('checkout')->middleware('auth');
Route::get('/products/{id}', [PagesController::class,'addToCart'])->name('addToCart');

//Cart
Route::post('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('addToCart');
Route::post('/remove-from-cart/{id}', [CartController::class,'removeFromCart'])->name('removeFromCart');


//Auth
Route::get('/login', [AuthController::class,'showLogin'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class,'showRegister'])->name('register')->middleware('guest');

Route::post('/register', [AuthController::class,'postRegister'])->name('register')->middleware('guest');
Route::post('/login', [AuthController::class,'postLogin'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class,'logout'])->name('logout')->middleware('auth');


Route::get('/category/{categoryName}', [ProductController::class, 'showProductsByCategory'])->name('category.products');
Route::get('/category/{categoryName}/product/{productName}', [ProductController::class, 'show'])->name('product.show');

//search 
Route::get('/search', [SearchController::class, 'search'])->name('search');


//Checkout
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');






