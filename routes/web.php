<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('welcome');
});

/* Route::redirect('/', '/dashboard'); */

/*   Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
 */


 Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});


