<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Shows the contacts index page
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.contacts.list', []);
    }

    /**
     * Shows the contacts edit page
     * @param Request request
     * @return view
     */
    public function edit(Request $request)
    {
        return view('pages.webapp.contacts.edit', []);
    }

    /**
     * Shows the contacts create page
     * @param Request request
     * @return view
     */
    public function create(Request $request)
    {
        return view('pages.webapp.contacts.create', []);
    }
}
