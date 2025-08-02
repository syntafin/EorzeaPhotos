<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

Route::controller(FeedController::class)
    ->name('feed.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
