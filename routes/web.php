<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegerationController;
use App\Http\Controllers\TreeMapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DocumentUploadController;
    
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::any('/', [IntegerationController::class, 'signin'])->name('login');
Route::any('signin', [IntegerationController::class, 'signin'])->name('signin');
Route::any('signup', [IntegerationController::class, 'signup'])->name('signup');
Route::any('dashboard', [IntegerationController::class, 'dashboard'])->name('dashboard');
Route::any('teams', [IntegerationController::class, 'teams'])->name('teams');
Route::any('document-stage', [IntegerationController::class, 'documentStage'])->name('document_stage');
Route::any('workflow', [IntegerationController::class, 'workflow'])->name('workflow');
Route::get('/excel', [IntegerationController::class, 'index'])->name('excel.index');
Route::post('/excel/upload', [IntegerationController::class, 'uploadFile'])->name('excel.upload');
Route::get('/excel/chart', [IntegerationController::class, 'showChart'])->name('excel.chart');
Route::get('/multi-series-chart', [IntegerationController::class, 'multiSeriesChart'])->name('workorders');

Route::get('/treemap', [TreeMapController::class, 'index']);

Route::get('/document-list', [DocumentUploadController::class, 'index'])->name('documentlist');
Route::get('/document-create', [DocumentUploadController::class, 'create'])->name('documentcreate');
Route::post('/documentStore', [DocumentUploadController::class, 'store'])->name('documentStore');
Route::delete('/document-delete/{id}', [DocumentUploadController::class, 'destroy'])->name('documentDestroy');;
Route::post('/document-copy/{id}/copy', [DocumentUploadController::class, 'copy'])->name('documentCopy');
Route::get('/document/{id}/download', [DocumentUploadController::class, 'download'])->name('files.download');
