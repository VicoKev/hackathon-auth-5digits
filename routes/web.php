<?php

use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Route;

Route::get('/',                [viewsController::class, 'index'])->name('view.welcome');
Route::get('/code-entry',      [viewsController::class, 'codeEntry'])->name('view.code-entry');


