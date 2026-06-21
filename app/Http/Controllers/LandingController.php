<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Render the landing page for the active brand.
     *
     * The brand is resolved and shared by the ResolveBrand middleware, so
     * the view (and every partial) can read $brand directly. Structure is
     * identical across brands; only the shared data differs.
     */
    public function __invoke(): View
    {
        return view('landing');
    }
}
