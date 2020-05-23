<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use App\Http\Resources\{DefaultErrorResource, DefaultResource};
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    // Protected items context
    protected $model;

    /**
     * Constructor method
     * @param ContactRepository $model
     */
    public function __construct(ContactRepository $model)
    {
        $this->model = $model;
    }

    /**
     * Shows the trash index
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        $userId = Auth::user()->id;
        return view('pages.webapp.trash', [
            'contacts' => $this->model->allTrashedByUser($userId)
        ]);
    }
}
