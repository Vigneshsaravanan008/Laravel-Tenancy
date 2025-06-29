<?php

use App\Livewire\Login\Login;
use App\Livewire\Web\Dashboard;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function(){
        Route::get('/',Login::class)->name("web.login");
        Route::middleware('auth')->group(function(){
            Route::get('/dashboard',Dashboard::class)->name("web.dashboard");
        });
    });
}
