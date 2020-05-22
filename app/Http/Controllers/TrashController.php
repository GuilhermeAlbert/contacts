<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashController extends Controller
{
    /**
     * Shows the trash index
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.trash', []);
    }
}
