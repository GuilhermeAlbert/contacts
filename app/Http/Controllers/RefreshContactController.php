<?php

namespace App\Http\Controllers;

use App\Http\Repositories\RefreshContactRepository;
use App\Http\Requests\RefreshContact\{Refresh, Sync};
use App\Http\Resources\{DefaultErrorResource, DefaultResource};
use App\Utils\{HttpStatusCodes};

class RefreshContactController extends Controller
{
    // Protected items context
    protected $model;

    /**
     * Constructor method
     * @param RefreshContactRepository $model
     */
    public function __construct(RefreshContactRepository $model)
    {
        $this->model = $model;
    }

    /**
     * Refresh all contacts
     * @api {PATCH} /api/contacts/refresh
     * @param Refresh $request
     * @return Resource json
     */
    public function refresh(Refresh $request)
    {
        try {

            $object = $this->model->refresh($request->contact);

            return new DefaultResource($object);
        } catch (\Exception $error) {
            throw $error;
        }
    }

    /**
     * Sync a specific contact
     * @api {PATCH} /api/contacts/sync
     * @param Sync $request
     * @return Resource json
     */
    public function sync(Sync $request)
    {
        try {

            $object = $this->model->sync($request->contact);

            return new DefaultResource($object);
        } catch (\Exception $error) {
            throw $error;
        }
    }
}
