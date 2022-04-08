<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\MatakuliahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // Route::resource('produk', ProductController::class);
    Route::post('/logout', [LoginController::class, 'logout']);
});
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // Route::resource('produk', ProductController::class);
    Route::post('/logoutAdmin', [LoginController::class, 'logoutAdmin']);
});
Route::post('/loginAdmin', [LoginController::class, 'loginAdmin']);

Route::get('/mata-kuliah', [MatakuliahController::class, 'index']);
Route::post('/mata-kuliah/store', [MatakuliahController::class, 'store']);
Route::get('/mata-kuliah/show/{id}', [MatakuliahController::class, 'show']);
Route::post('/mata-kuliah/update/{id}', [MatakuliahController::class, 'update']);
Route::get('/mata-kuliah/destroy/{matakuliah:id}', [MatakuliahController::class, 'destroy']);

Route::get('/relasiModel', [MatakuliahController::class, 'indexRelasiModel']);
Route::get('/dosen', [MatakuliahController::class, 'indexDosen']);

Route::post('/qrcode', [MatakuliahController::class, 'qrCode']);
Route::get('/qrcode/{id}', [MatakuliahController::class, 'getQrCode']);

Route::post('/absensi', [MatakuliahController::class, 'uploadAbsensi']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
