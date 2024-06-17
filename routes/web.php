<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventAbsenceController;

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

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('landing');
    Route::get('/my-profile', 'profile')->name('my-profile')->middleware('auth');
    Route::get('/absensi', 'absensi')->name('absensi-online');
});

Route::controller(DashboardController::class)->middleware('auth')->middleware('check-status:pengurus,admin')->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/profile/kelola-akun', 'profile')->name('profile');
    Route::get('/profile/absensi', 'absensi')->name('absensi');

    Route::get('/profile/kelola-akun/change-profile', 'change_profile')->name('profile.change-profile');
    Route::get('/profile/kelola-akun/change-password', 'change_password')->name('profile.change-password');

    Route::post('/profile/kelola-akun/change-profile/store', 'change_profile_store')->name('profile.change-profile.store');
    Route::post('/profile/kelola-akun/change-password/store', 'change_password_store')->name('profile.change-password.store');
});

Route::controller(UserController::class)->middleware('auth')->middleware('check-status:pengurus,admin')->group(function () {
    Route::get('/user/user-import', 'import_users')->name('user.import');
    Route::post('/user/import/store', 'store_import_users')->name('user.import.store');

    Route::get('/user/user-anggota', 'anggota')->name('user.user-anggota');
    Route::get('/user/user-anggota/tambah', 'tambah_anggota')->name('user.user-anggota.tambah');
    Route::post('/user/user-anggota/store', 'store_anggota')->name('user.user-anggota.store');


    Route::get('/user/user-pengurus', 'pengurus')->name('user.user-pengurus');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::get('/logout', 'logout')->name('logout');

    Route::post('/login/credentials', 'credentials')->name('credentials');
});

Route::controller(EventController::class)->middleware('auth')->middleware('check-status:pengurus,admin')->group(function () {
    Route::get('/proker-agenda/program-kerja', 'proker')->name('proker-agenda.proker');
    Route::get('/proker-agenda/program-kerja/tambah', 'tambah_proker')->name('proker-agenda.proker.tambah');
    Route::get('/proker-agenda/program-kerja/detail/{uuid}', 'detail')->name('proker-agenda.proker.detail');

    Route::get('/proker-agenda/agenda', 'agenda')->name('proker-agenda.agenda');

    Route::post('/proker-agenda/program-kerja/store', 'store_proker')->name('proker-agenda.proker.store');
});

Route::controller(EventAbsenceController::class)->group(function () {
    Route::post('/proker-agenda/absensi/store/{uuid}', 'store_absensi')->name('proker-agenda.absensi.store');
});


Route::controller(ArchivesController::class)->middleware(['auth', 'check-status:pengurus,admin'])->prefix('admin')->group(function() {
    Route::get('archive', 'index_archive')->name('archive.index');
    Route::get('archive/create',  'create_archive')->name('archive.create');
    Route::post('archive', 'store_archive')->name('archive.store');
    Route::get('archive/{archive}/edit', 'edit_archive')->name('archive.edit');
    Route::put('archive/{archive}', 'update_archive')->name('archive.update');
    // Route::delete('archive/{archive}', 'destroy')->name('archive.destroy');

    Route::get('archive/inbox',  'inbox')->name('archive.inbox');
    Route::get('archive/outbox',  'outbox')->name('archive.outbox');
});


