<?php

use App\Livewire\Login\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Central Homepage';
});

Route::get('/',Login::class);

