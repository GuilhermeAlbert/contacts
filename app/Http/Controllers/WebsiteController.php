<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Shows the website index
     * @param Request request
     * @return view
     */
    public function index(Request $request)
    {
        return view('pages.website.index', []);
    }

    /**
     * Shows the website sign in
     * @param Request request
     * @return view
     */
    public function signIn(Request $request)
    {
        return view('pages.website.sign-in', []);
    }

    /**
     * Shows the website sign up
     * @param Request request
     * @return view
     */
    public function signUp(Request $request)
    {
        return view('pages.website.sign-up', []);
    }
}
