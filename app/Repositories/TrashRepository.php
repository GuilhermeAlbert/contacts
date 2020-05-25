<?php

namespace App\Repositories;

use App\Bases\BaseRepository;

use App\Interfaces\TrashInterface;
use App\Contact;

class TrashRepository extends BaseRepository implements TrashInterface
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
     * Force delete trashed contacts permanently
     * @param User $user
     * @return Collection
     */
    public function forceDeleteAllByUser($user)
    {
        return $user->contacts()->onlyTrashed()->forceDelete();
    }

    /**
     * Get all contacts by user
     * @param int $userId
     * @return Collection
     */
    public function allTrashedByUser($userId)
    {
        return $this->model->onlyTrashed()->where('user_id', $userId)->orderBy('first_name')->get();
    }
}
