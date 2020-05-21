<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Shows the profile index page
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.profile', []);
    }
}
