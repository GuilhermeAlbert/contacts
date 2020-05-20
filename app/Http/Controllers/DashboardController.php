<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Shows the dashboard index
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.dashboard', []);
    }
}
