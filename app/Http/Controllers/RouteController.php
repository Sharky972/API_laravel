<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class RouteController extends Controller
{
    public function listRoutes()
    {
        // Get the list of routes using Artisan command
        $output = Artisan::output();
        return view('routes.list', ['routes' => $output]);
    }
}
