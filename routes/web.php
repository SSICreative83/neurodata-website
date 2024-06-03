<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/datasets', [DatasetController::class, 'index'])->name('datasets.index');
Route::get('/datasets/{id}', [DatasetController::class, 'show'])->name('datasets.show');
Route::get('/datasets/{id}/download', [DatasetController::class, 'download'])->name('datasets.download');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/datasets/create', [AdminController::class, 'create'])->name('admin.datasets.create');
    Route::post('/admin/datasets', [AdminController::class, 'store'])->name('admin.datasets.store');
});
