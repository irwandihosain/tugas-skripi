<?php

use App\Http\Controllers\daftarDosen;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\Firebase\ContactController;
use App\Http\Controllers\history;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Masterdata;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/kelas', [Masterdata::class, 'indexKelas']);
Route::get('/delete-kelas/{kelas:id}', [Masterdata::class, 'destroyKelas']);
Route::get('/tambah-kelas', [Masterdata::class, 'createKelas']);
Route::post('/tambah-kelas', [Masterdata::class, 'storeKelas']);

Route::get('hari', [Masterdata::class, 'indexHari']);
Route::get('tambah-hari', [Masterdata::class, 'createHari']);
Route::post('tambah-hari', [Masterdata::class, 'storeHari']);
Route::get('/delete-hari/{hari:id}', [Masterdata::class, 'destroyHari']);

Route::get('fakultas', [Masterdata::class, 'indexFakultas']);
Route::get('tambah-fakultas', [Masterdata::class, 'createFakultas']);
Route::post('tambah-fakultas', [Masterdata::class, 'storeFakultas']);
Route::get('/delete-fakultas/{fakultas:id}', [Masterdata::class, 'destroyFakultas']);

Route::get('ruangan', [Masterdata::class, 'indexRuangan']);
Route::get('tambah-ruangan', [Masterdata::class, 'createRuangan']);
Route::post('tambah-ruangan', [Masterdata::class, 'storeRuangan']);
Route::get('/delete-ruangan/{ruangan:id}', [Masterdata::class, 'destroyRuangan']);

Route::get('namaMatakuliah', [Masterdata::class, 'indexMatakuliah']);
Route::get('tambah-namaMatakuliah', [Masterdata::class, 'createMatakuliah']);
Route::post('tambah-namaMatakuliah', [Masterdata::class, 'storeMatakuliah']);
Route::get('/delete-namaMatakuliah/{matakuliah:id}', [Masterdata::class, 'destroyMatakuliah']);

Route::get('lihat-dosen/{id}', [daftarDosen::class, 'index']);
Route::get('addDosen/{id}', [daftarDosen::class, 'create']);
Route::get('destroyDosen/{id}/{id2}', [daftarDosen::class, 'destroy']);
Route::get('editDosen/{id}/{id2}', [daftarDosen::class, 'edit']);
Route::post('addDosen/{id}', [daftarDosen::class, 'store']);
Route::post('updateDosen/{id}/{id2}', [daftarDosen::class, 'update']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('tambah-dosen', [DosenController::class, 'create']);
Route::post('add-dosen', [DosenController::class, 'store']);
Route::get('edit-dosen/{id}', [DosenController::class, 'edit']);
Route::get('delete-dosen/{id}', [DosenController::class, 'destroy']);
Route::post('update-dosen/{id}', [DosenController::class, 'update']);

Route::get('history', [history::class, 'index']);
Route::get('lihat-history/{id}', [history::class, 'show']);
Route::get('pertemuan-history/{id}/{id2}', [history::class, 'lihat']);

Route::get('mengubah-mahasiswa/{id}/{bid}', [MataKuliahController::class, 'mengubah']);
Route::post('mengupdate-mahasiswa/{id}/{id2}', [MataKuliahController::class, 'mengupdate']);
Route::get('tambah-mahasiswa/{id}', [MataKuliahController::class, 'tambah']);
Route::post('tambah-mahasiswa/{id}', [MataKuliahController::class, 'gudang']);
Route::get('hancurkan-mahasiswa/{mahasiswa:id}/{matakuliah:id}', [MataKuliahController::class, 'hancurkan']);
Route::get('delete-matakuliah/{matakuliah:id}', [MataKuliahController::class, 'destroy']);
Route::post('update-matakuliah/{matakuliah:uuid}', [MataKuliahController::class, 'update']);
Route::get('edit-matakuliah/{matakuliah:id}', [MataKuliahController::class, 'edit']);
Route::get('show-matakuliah/{id}', [MataKuliahController::class, 'show']);
Route::post('/add-matakuliah', [MataKuliahController::class, 'store']);
Route::get('/add-matakuliah', [MataKuliahController::class, 'create']);
Route::get('/mata-kuliah', [MataKuliahController::class, 'index']);

Route::get('get/dosen{dosen}', [MataKuliahController::class, 'getDosen']);

Route::get('dashboard', [Dashboard::class, 'index']);

Route::get('/', [LoginController::class, 'index']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('contacts', [ContactController::class, 'index']);

Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaController::class, 'create']);
Route::post('add-mahasiswa', [MahasiswaController::class, 'store']);

Route::put('update-mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('edit-mahasiswa/{id}', [MahasiswaController::class, 'edit']);

Route::get('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

Route::get('scan', [ScanController::class, 'index']);
Route::post('scanqrcode', [ScanController::class, 'store']);

Route::get('add-contacts', [ContactController::class, 'create']);
Route::post('add-contacts', [ContactController::class, 'store']);

Route::put('update-contact/{id}', [ContactController::class, 'update']);
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);

Route::get('delete-contact/{id}', [ContactController::class, 'destroy']);
