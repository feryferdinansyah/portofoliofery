<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiswaController;

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




// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/project', function () {
//     return view('project');
// });
// Route::get('/', function () {
//     return view('profil');
// });
//admin
route::middleware('auth')->group(function () {
Route::get('/siswa/{id_siswa}/Hapus',[SiswaController::class, 'Hapus']); 
Route::get('/', [DashboardController::class,'index']);
// route::get('/login', [LoginController::class,'index']) ->name('login');
route::post('/logout', [LoginController::class, 'logout']) ->name('logout');
// route::post('/login',[LoginController::class, 'authenticate']);
Route::resource('/siswa', SiswaController::class);
Route::resource('/projects', ProjectController::class);
Route::get('/projects/create/{id_siswa}', [ProjectController::class,'create']);
Route::resource('/kontak',KontakController::class);
Route::get('/projects/{id}/');
Route::post('users/{id}', );
Route::resource('/jnskontak',JenisController::class);
// Route::get('/jnskontak', function () {
//     return view('admin.jnsKontak');
// });
});
//guest
route::middleware('guest')->group(function (){
    route::get('/login', [LoginController::class,'index']) ->name('login');
    route::post('/login',[LoginController::class, 'authenticate']);
// Route::get('/siswa/{id_siswa}/Hapus',[SiswaController::class, 'Hapus']); 
// Route::get('/', [DashboardController::class,'index']);
// route::post('/logout', [LoginController::class, 'logout']) ->name('logout');
// route::post('/login',[LoginController::class, 'authenticate']);
// Route::resource('/siswa', SiswaController::class)->middleware('auth');
// Route::resource('/projects', ProjectController::class)->middleware('auth');
// Route::resource('/kontak',KontakController::class)->middleware('auth');
Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/dashboard', function () {
    return view('profil');
});

});