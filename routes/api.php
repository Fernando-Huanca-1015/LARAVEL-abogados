<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

Route::post('/consultas', [ConsultaController::class, 'store']);
