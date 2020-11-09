<?php

use App\Http\Controllers\BoredContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', [BoredContoller::class, 'list']);
