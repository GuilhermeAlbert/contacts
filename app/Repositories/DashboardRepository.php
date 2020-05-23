<?php

namespace App\Repositories;

use App\Bases\BaseRepository;

use App\Interfaces\DashboardInterface;
use App\Contact;
use Carbon\Carbon;

class DashboardRepository extends BaseRepository implements DashboardInterface
{
    // Protected context items
    protected $model;

    /**
     * Constructor method
     * @param Contact $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    /**
     * Get user contacts
     * @param int $userId
     * @return int $count
     */
    public function allUserContactsCount($userId)
    {
        return $this->model->where('user_id', $userId)
            ->count();
    }

    /**
     * Get user contacts created today
     * @param int $userId
     * @return int $count
     */
    public function allUserContactsTodayCount($userId)
    {
        return $this->model->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->count();
    }

    /**
     * Get user trashed contacts
     * @param int $userId
     * @return int $count
     */
    public function allUserTrashedContactsCount($userId)
    {
        return $this->model->onlyTrashed()
            ->where('user_id', $userId)
            ->count();
    }
}
