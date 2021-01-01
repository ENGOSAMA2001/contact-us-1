<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ContactController::class, 'index']);
Route::get('contact',[ContactController::class, 'contact']);
Route::post('store',[ContactController::class, 'store']);

Route::put('edit/{id}', [contactcontroller::class,'edit']);
Route::patch('update/{id}', [contactcontroller::class,'update']);
Route::delete('destory/{id}',[ContactController::class, 'destory']);


