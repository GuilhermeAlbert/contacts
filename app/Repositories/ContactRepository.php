<?php

namespace App\Repositories;

use App\Bases\BaseRepository;

use App\Interfaces\ContactInterface;
use App\Contact;

class ContactRepository extends BaseRepository implements ContactInterface
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
     * Get the some specific contact
     * @param int id
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get all contacts by user
     * @param int $userId
     * @return Collection
     */
    public function allByUser($userId)
    {
        return $this->model->where('user_id', $userId)->orderBy('first_name')->get();
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
