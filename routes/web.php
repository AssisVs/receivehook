<?php

use App\Http\Controllers\RHookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    ds('testando');
    return view('receivehook');
});

Route::webhooks('webhook-receiving-url');
Route::get('rHook', [RHookController::class, 'recebeHook'])->name('rHook');
