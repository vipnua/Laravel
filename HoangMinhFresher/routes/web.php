<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\LoginController;

Route::get('/admin/user/login',
     [LoginController::class,'index']
);