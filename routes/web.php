<?php

use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\frontend\IndexController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
//	Route::get('/login', [AdminController::class, 'loginForm']);
//	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
//});
//
//Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
//    return view('admin.index');
//})->name('admin.dashboard');
//
//Route::get('/logout', [AdminProfileController::class, 'destroy'])->name('admin.logout');
//Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
//Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profileEdit');
//Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profileStore');
//Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.changePassword');
//Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.changePassword');
//
//Route::group(['prefix' => 'brand'], function () {
//    Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');
//    Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');
//    Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');
//    Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');
//    Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');
//});
//
//Route::group(['prefix' => 'category'], function() {
//   Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');
//   Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
//});




























Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {

    $user = User::find(Auth::id());
    return view('dashboard', compact('user'));
})->name('dashboard');

Route::get('/', [IndexController::class, 'index']);
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('change.password');
Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');

