<?php

use App\Http\Controllers\PageController;
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
    return view('index');
});


Route::get('mhs-calon', [PageController::class, 'pageMhsCalon'])->name('pageMhsCalon');
Route::get('mhs-aktif', [PageController::class, 'pageMhsAktif'])->name('pageMhsAktif');
Route::get('mhs-lulus', [PageController::class, 'pageMhsLulus'])->name('pageMhsLulus');
Route::get('mhs-asing', [PageController::class, 'pageMhsAsing'])->name('pageMhsAsing');
Route::get('mhs-tugas-akhir', [PageController::class, 'pageMhsTgsAkhir'])->name('pageMhsTgsAkhir');

Route::get('dosen', [PageController::class, 'pageDosen'])->name('pageDosen');
Route::get('dosen-homebase', [PageController::class, 'pageDosenHomebase'])->name('pageDosenHomebase');
Route::get('dosen-jabatan-akademik', [PageController::class, 'pageDosenJabatanaka'])->name('pageDosenJabatanaka');
Route::get('dosen-pendidikan-akhir', [PageController::class, 'pageDosenPakhir'])->name('pageDosenPakhir');
Route::get('dosen-status-sertifikasi', [PageController::class, 'pageDosenStatus'])->name('pageDosenStatus');
Route::get('dosen-tidak-tetap', [PageController::class, 'pageDosenTetap'])->name('pageDosenTetap');

Route::get('tendik', [PageController::class, 'pageTendik'])->name('pageTendik');
Route::get('akreditasi', [PageController::class, 'pageAkre'])->name('pageAkre');
