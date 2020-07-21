<?php

namespace App\Http\Repositories;

use App\Base\BaseRepository;
use App\Interfaces\Repositories\StubInterface;
use App\Stub;

class RefreshContactRepository extends BaseRepository implements StubInterface
{
    // Protected variable context
    protected $model;

    /**
     * Constructor method to instantiate a instance
     */
    public function __construct(Stub $model)
    {
        $this->model = $model;
    }
}