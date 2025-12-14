<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ticket CRUD routes (protected by auth middleware)
Route::middleware(['auth'])->group(function () {

    // CSV Upload routes
    Route::get('/tickets/upload', [TicketController::class, 'uploadForm'])->name('tickets.upload.form');
    Route::post('/tickets/upload', [TicketController::class, 'uploadCsv'])->name('tickets.upload.csv');

    // CSV Export route
    Route::get('/tickets/export', [TicketController::class, 'exportCsv'])->name('tickets.export');

    // Resource routes for CRUD
    Route::resource('tickets', TicketController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

