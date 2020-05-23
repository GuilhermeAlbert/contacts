<?php

namespace App\Http\Controllers;

use App\Repositories\DashboardRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Protected items context
    protected $model;

    /**
     * Constructor method
     * @param DashboardRepository $model
     */
    public function __construct(DashboardRepository $model)
    {
        $this->model = $model;
    }

    /**
     * Shows the dashboard index
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        $userId = $request->user()->id;

        return view('pages.webapp.dashboard', [
            "user_contacts_count"         => $this->model->allUserContactsCount($userId),
            "user_contacts_today_count"   => $this->model->allUserContactsTodayCount($userId),
            "user_trashed_contacts_count" => $this->model->allUserTrashedContactsCount($userId),
        ]);
    }
}
