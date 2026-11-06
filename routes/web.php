<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');
