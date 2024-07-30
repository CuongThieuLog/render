<?php

use App\Http\Controllers\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('users', [User::class, 'index']);