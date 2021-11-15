<?php

use App\Http\Controllers\Buyer\BuyerCategoryController;
use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Buyer\BuyerProductController;
use App\Http\Controllers\Buyer\BuyerSellerController;
use App\Http\Controllers\Buyer\BuyerTransactionController;

use App\Http\Controllers\Product\ProductBuyerController;
use App\Http\Controllers\Product\ProductBuyerTransactionController;
 use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\ProductTransactionController;
use App\Http\Controllers\Seller\SellerBuyerController;
 use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\SellerProductController;
use App\Http\Controllers\Seller\SellerTransactionController;
use App\Http\Controllers\Transaction\TransactionCategoryController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\Transaction\TransactionSellerController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
| Buyer
*/

Route::resource('buyers', BuyerController::class)->only(['index', 'show']);
Route::resource('buyers.products', BuyerProductController::class)->only(['index']);
Route::resource('buyers.transactions', BuyerTransactionController::class)->only(['index']);
Route::resource('buyers.sellers', BuyerSellerController::class)->only(['index']);



Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::resource('products.transactions', ProductTransactionController::class)->only(['index', 'show']);
Route::resource('products.buyers', ProductBuyerController::class)->only(['index', 'show']);
 Route::resource('products.buyers.transactions', ProductBuyerTransactionController::class)->only(['store']);



Route::resource('sellers', SellerController::class)->only(['index', 'show']);
Route::resource('sellers.transactions', SellerTransactionController::class)->only(['index', 'show']);
 Route::resource('sellers.buyers', SellerBuyerController::class)->only(['index', 'show']);
Route::resource('sellers.products', SellerProductController::class)->except(['create', 'show', 'edit']);;

Route::resource('transactions', TransactionController::class)->only(['index', 'show']);
 Route::resource('transactions.sellers', TransactionSellerController::class)->only(['index', 'show']);


Route::resource('users', UserController::class)->except(['create', 'edit']);
