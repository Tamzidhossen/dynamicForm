<?php

use App\Http\Controllers\DynamicFormController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [DynamicFormController::class, 'welcome'])->name('welcome');
Route::get('/', [DynamicFormController::class, 'dynamic'])->name('dynamic');
Route::get('/form', [DynamicFormController::class, 'form_test'])->name('form.test');
Route::get('/new', [DynamicFormController::class, 'new'])->name('new');
Route::post('/page', [DynamicFormController::class, 'page'])->name('page');
Route::post('/dynamic/success', [DynamicFormController::class, 'dynamic_succ'])->name('dynamic.succ');

Route::resource('faq', FaqController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
