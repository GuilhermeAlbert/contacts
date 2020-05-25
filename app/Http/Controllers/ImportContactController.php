<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportContactController extends Controller
{
    /**
     * Shows the import contacts index page
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.contacts.import');
    }
}
