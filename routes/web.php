<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// get request route
Route::get('/', [PagesController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);

// put request route 
Route::post('/profile_img', [App\Http\Controllers\HomeController::class, 'upload_image']);
Route::put('/update_details', [App\Http\Controllers\HomeController::class, 'update_details']);
Route::put('/update_password', [App\Http\Controllers\HomeController::class, 'update_password']);


// admin route
Route::prefix('admin')->middleware('auth', 'isAdmin')->group( function() {
    Route::get('/index', [App\Http\Controllers\admin\AdminController::class, 'index']);
    // Route::get('/add-course', [App\Http\Controllers\admin\CourseController::class, 'create']);
    // Route::get('/bsm', [App\Http\Controllers\admin\AdminController::class, 'bsm'])->name('admin.bsm');
});
