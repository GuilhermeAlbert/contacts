<?php

namespace App\Repositories;

use App\Bases\BaseRepository;

use App\Interfaces\UserInterface;
use App\User;

class UserRepository extends BaseRepository implements UserInterface
{
    // Protected context items
    protected $model;

    /**
     * Constructor method
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
