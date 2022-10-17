<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;


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

Route::get('/', function () {
    $data = Product::all();
    return view('welcome',compact('data'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homePage', [App\Http\Controllers\HomeController::class, 'view_welcome_page'])->name('view_welcome_page');

//reset password
Route::get('email', [App\Http\Controllers\AdminController::class, 'email'])->name('email');

//register users
Route::post('register', [App\Http\Controllers\RegisterController::class, 'register_users']);

//about page 
Route::get('about', [App\Http\Controllers\AboutController::class, 'view_about_page'])->name('view_about_page');

//support page 
Route::get('support', [App\Http\Controllers\SupportController::class, 'view_support_page'])->name('view_support_page');

//buy page 
Route::get('buy', [App\Http\Controllers\BuyController::class, 'view_buy_page'])->name('view_buy_page');

//sell page 
Route::get('sell', [App\Http\Controllers\SellController::class, 'view_sell_page'])->name('view_sell_page');


//AdminDash 
Route::get('AdminDash', [App\Http\Controllers\AdminController::class, 'view_adminDash_page'])->name('view_adminDash_page');



//UserDash
Route::get('UserDash', [App\Http\Controllers\UserController::class, 'view_userDash_page'])->name('view_userDash_page');

//buying
Route::get('buying', [App\Http\Controllers\BuyingController::class, 'buying'])->name('buying');
Route::post('buying', [App\Http\Controllers\BuyingController::class, 'save_buying']);

//selling
Route::get('selling', [App\Http\Controllers\SellingController::class, 'selling'])->name('selling');
Route::post('selling', [App\Http\Controllers\SellingController::class, 'save_selling']);


//admin
Route::get('viewUsers', [App\Http\Controllers\UserController::class, 'admin_view_users'])->name('admin_view_users');
Route::get('AdminEditUser/{id}', [App\Http\Controllers\UserController::class, 'admin_edit_users'])->name('admin_edit_users');
Route::post('AdminEditUser', [App\Http\Controllers\UserController::class, 'update_users_data']);
Route::get('admin_order_sell', [App\Http\Controllers\OrderController::class, 'admin_view_orders_sell'])->name('admin_view_orders_sell');
Route::get('admin_get_user/{id}', [App\Http\Controllers\UserController::class, 'admin_get_user'])->name('admin_get_user');
Route::get('admin_get_order_sell/{id}', [App\Http\Controllers\OrderController::class, 'admin_get_order_sell'])->name('admin_get_order_sell');
Route::get('admin_order_buy', [App\Http\Controllers\OrderController::class, 'admin_view_orders_buy'])->name('admin_view_orders_buy');
Route::get('AdminEditBuy/{id}', [App\Http\Controllers\OrderController::class, 'admin_edit_buy'])->name('admin_edit_buy');
Route::post('AdminEditBuy', [App\Http\Controllers\OrderController::class, 'update_order_buy']);
Route::get('AdminEditSell/{id}', [App\Http\Controllers\OrderController::class, 'admin_edit_sell'])->name('admin_edit_sell');
Route::post('AdminEditSell', [App\Http\Controllers\OrderController::class, 'update_order_sell']);
//crypto address
Route::get('crypto_address', [App\Http\Controllers\AdminController::class, 'crypto_address'])->name('crypto_address');
Route::get('AdminEditAddress/{id}', [App\Http\Controllers\AdminController::class, 'admin_edit_address'])->name('admin_edit_address');
Route::post('AdminEditAddress', [App\Http\Controllers\AdminController::class, 'update_address']);
//product
Route::get('product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('AdminEditProduct/{id}', [App\Http\Controllers\ProductController::class, 'admin_edit_product'])->name('admin_edit_product');
Route::post('AdminEditProduct', [App\Http\Controllers\ProductController::class, 'update_product']);
//payment
Route::get('payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
Route::get('AdminEditPayment/{id}', [App\Http\Controllers\PaymentController::class, 'admin_edit_payment'])->name('admin_edit_payment');
Route::post('AdminEditPayment', [App\Http\Controllers\PaymentController::class, 'update_payment']);

//currency selling
Route::get('selling_currency_conversion', [App\Http\Controllers\SellingController::class, 'selling_currency_conv'])->name('selling_currency_conv');
Route::get('AdminEditSellingCurrency/{id}', [App\Http\Controllers\SellingController::class, 'admin_edit_selling_currency_conv'])->name('admin_edit_selling_currency_conv');
Route::post('AdminEditSellingCurrency', [App\Http\Controllers\SellingController::class, 'update_selling_currency_conv']);


//currency buying
Route::get('buying_currency_conversion', [App\Http\Controllers\BuyingController::class, 'buying_currency_conv'])->name('buying_currency_conv');
Route::get('AdminEditBuyingCurrency/{id}', [App\Http\Controllers\BuyingController::class, 'admin_edit_buying_currency_conv'])->name('admin_edit_buying_currency_conv');
Route::post('AdminEditBuyingCurrency', [App\Http\Controllers\BuyingController::class, 'update_buying_currency_conv']);



//oerders
Route::get('user_order_sell', [App\Http\Controllers\OrderController::class, 'user_view_orders_sell'])->name('user_view_orders');
//Route::get('user_view_sell/{id}', [App\Http\Controllers\OrderController::class, 'view_sell']); //first time change password
Route::get('user_order_buy', [App\Http\Controllers\OrderController::class, 'user_view_orders_buy'])->name('user_view_orders_buy');


//user accoiunt
Route::get('user_account', [App\Http\Controllers\UserController::class, 'view_user_account'])->name('view_user_account');
Route::get('UserChangePassword/{id}', [App\Http\Controllers\UserController::class, 'change_pass']);
Route::post('/UserChangePassword', [App\Http\Controllers\UserController::class, 'update_user_pass']);

//admin account
Route::get('AdminChangePassword/{id}', [App\Http\Controllers\AdminController::class, 'admin_change_pass']);
Route::post('/AdminChangePassword', [App\Http\Controllers\AdminController::class, 'update_admin_pass']);


