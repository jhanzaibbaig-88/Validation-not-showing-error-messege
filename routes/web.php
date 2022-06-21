<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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



/*
------------------------------------------------
------------- > Log - in     < -----------------
------------- > Log - out    < -----------------
------------- > Registration < -----------------
------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/register",[UserController::class,'register']);

Route::get("/register/user",[UserController::class,'viewForm']);

Route::get('/admin', function () {
    return view('admin');
});

/*
----------------------------------------
------------- > Products < -------------
----------------------------------------
*/

Route::get("/",[ProductController::class,'index']);

Route::get('/products', function () {
    return view('productsregister');
});

//add data in DB
Route::get('/addProducts', function () {
    return view('addProducts');
});

//store data in DB
Route::post('/addProducts',[ProductController::class, 'store']);

//show data form DB
Route::get('/products',[ProductController::class, 'show']);

//edit data in DB
Route::get('/editProducts/{id}',[ProductController::class, 'edit']);

//update data in DB
Route::post('/updateProducts/{id}',[ProductController::class, 'update']);

//delete data from DB
Route::get('/products/{id}',[ProductController::class, 'destroy']);

Route::post("/login",[UserController::class,'login']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
 
