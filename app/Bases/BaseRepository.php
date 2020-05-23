<?php

namespace App\Bases;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseInterface
{
    // Protected context items
    protected $model;

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @param Model $object
     * @return mixed
     */
    public function update(array $attributes, Model $object)
    {
        $object->update($attributes);

        if ($object)
            return $object;
        else
            return null;
    }

    /**
     * @param Model $object
     * @return mixed
     */
    public function delete(Model $object)
    {
        return $object->delete();
    }
}