<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/login', [PenggunaController::class, 'loginAuth'])->name('login.auth');
Route::get('/logout', [PenggunaController::class, 'logout'])->name('logout');
    

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::middleware('IsGuest')->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');
    Route::post('/login', [PenggunaController::class, 'loginAuth'])->name('login.auth');
});

Route::get('/logout', [PenggunaController::class, 'logout'])->name('logout');

Route::get('/error-permission', function() {
    return view('errors.permission');
})->name('error.permission');

Route::middleware(['IsLogin', 'IsKasir'])->group(function() {
    Route::prefix('/kasir')->name('kasir.')->group(function () {
        Route::prefix('/order')->name('order.')->group(function() {
            Route::get('/', [OrderController::class, 'index'])->name('index');
            Route::get('/create', [OrderController::class, 'create'])->name('create');
            Route::post('/store', [OrderController::class, 'store'])->name('store');
            Route::get('/print/{id}', [OrderController::class, 'show'])->name('print');
            Route::get('/download/{id}', [OrderController::class, 'downloadPDF'])->name('download');
        });
    });
});


// Route::get('/login', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view(('login'));
// })->name('login');


Route::middleware('IsLogin', 'IsAdmin')->group(function() {
    Route::get('/logout', [PenggunaController::class, 'logout'])->name('logout');
    Route::get('/home', function () {
        return view('home');
    })->name('home.page');
    
    Route::prefix('/medicine')->name('medicine.')->group(function(){
        Route::get('/create', [MedicineController::class, 'create'])->name('create');
        Route::post('/store', [MedicineController::class, 'store'])->name('store');
        Route::get('/', [MedicineController::class, 'index'])->name('home');
        Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
        Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
        Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
        Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
        Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
        Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
    });
    //routing fitur kelola akun
    Route::prefix('/pengguna')->name('pengguna.')->group(function(){
        // Route::get('/', [UserController::class, 'index'])->name('');

        Route::get('/create', [PenggunaController::class, 'create'])->name('create');
        Route::get('/', [PenggunaController::class, 'index'])->name('akun');
        Route::post('/store', [PenggunaController::class, 'store'])->name('store');
        Route::get('/{id}', [PenggunaController::class, 'edit'])->name('edit');
        Route::patch('/{id}', [PenggunaController::class, 'update'])->name('update');
        Route::delete('/{id}', [PenggunaController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/order')->name('order.')->group(function() {
        Route::get('/data', [OrderController::class, 'data'])->name('data');
        Route::get('/export-excel', [OrderController::class, 'exportExcel'])->name('export-excel');
    });
});

Route::middleware(['IsLogin', 'IsGuest'])->group(function() {
    Route::prefix('/home')->name('home.')->group(function () {
        Route::get('/home', function () {
            return view('welcome');
        })->name('home');
    });
});
