<?php
use App\Admin\Controllers\RequestForm;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;

use Doctrine\DBAL\Logging\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/maglogin', [AuthManager::class, 'maglogin'])->name('maglogin');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::post('/bookingrequests', [RequestForm::class, 'formPost'])->name('form.post');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/profileinfo', function () {
        return view('profile._profileinfo');
    })->name('profileinfo');

});



Route::get('/service', [ServiceController::class, 'showServices'])->name('service');
Route::get('/product', [ProductController::class, 'showProducts'])->name('product');


// Route::get('/service', function () {
//     return view('service');
// })->name('service');

// Route::get('/product', function () {
//     return view('product');
// })->name('product');


Route::get('/register', function () {
    return view('Register');
})->name('register');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/bookingrequests', function () {
    return view('profile._bookingrequests');
})->name('bookingrequests');

// Route::get('/purchasehistory', function() {
//     return view('profile._purchasehistory');
// })->name('purchasehistory');

Route::get('/purchasehistory', function(){
    return view('profile._purchasehistory');
})->name('purchasehistory');

Route::get('login', function () {
    return view('Login');
});

Route::get('/book', function () {
    return view('book');
})->name('book');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/requestform', function () {
    return view('requestform');
})->name('requestform');
