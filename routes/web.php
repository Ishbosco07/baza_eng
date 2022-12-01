<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});
//Auth::routes();
  
//Route::get('/home', [HomeController::class, 'index'])->name('home');
  
//Route::group(['middleware' => ['auth']], function() {
  //  Route::resource('roles', RoleController::class);
    //Route::resource('users', UserController::class);
    //Route::resource('products', ProductController::class);
//});  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('roles',[AdminController::class,'rolesandpermisions']);

use App\Http\Controllers\BranchController;
  
Route::resource('branches', BranchController::class);
use App\Http\Controllers\EmployeeController;
  
Route::resource('employees', EmployeeController::class);

