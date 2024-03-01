<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// route::get('/', [HomeController::class, 'index']);


// route::get('/welcome', function(){
//     return view ('welcome');
// });

// route::get('/user/{id}', function($id){
//     return 'user dengan ID '. $id;
// });

// route::prefix('admin')->group(function () {
//     route::get('/dashboard', function(){
//         return 'admin dashboard';
//     });
//     route::get('/users', function(){
//         return 'users dashboard';
//     });
// });

// route::get('/listbarang/{kode}/{nama}', function ($kode,$nama){
//     return view ('list_barang', compact('kode', 'nama'));
// }); 
// route::get('/listbarang/{kode}/{nama}', [ListBarangController::class, 'tampilan']);

// // route untuk login
// use App\Http\Controllers\LoginController;

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// route::get('/',function(){
//     return view('login');
// });

// Route::post('/login', [LoginController::class, 'processLogin'])->name('login.submit');

// // untuk dashbord tapi ini masi coba coba saja
// route::get('contact', [HomeController::class, 'contact'])->name('dasboard');



//greyari
use App\Http\Controllers\greyari;
Route::get('/praktikum4', [greyari::class, 'tampillan']);
