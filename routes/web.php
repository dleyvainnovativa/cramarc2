<?php

use App\Http\Controllers\LandingController;
use App\Http\Middleware\ResolveBrand;
use Illuminate\Support\Facades\Route;

/*
| All public traffic resolves through ResolveBrand, which sets the active
| brand from the request subdomain. One route, one view, every brand.
*/

Route::middleware(ResolveBrand::class)->group(function () {
    Route::get('/', LandingController::class)->name('landing');
});
