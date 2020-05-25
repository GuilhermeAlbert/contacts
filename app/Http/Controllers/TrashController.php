<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TrashRepository;
use App\Http\Resources\{DefaultErrorResource, DefaultResource};
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Trash\{
    PermanentlyDelete,
    Restore
};

class TrashController extends Controller
{
    // Protected items context
    protected $model;

    /**
     * Constructor method
     * @param ContactRepository $model
     */
    public function __construct(TrashRepository $model)
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

    /**
     * Destroy all trashed contacts permanently
     * @api {GET} /api/contacts/trash/empty
     * @param Index $request
     * @return Resource json
     */
    public function permanentlyDelete(PermanentlyDelete $request)
    {
        try {

            $user = $request->user();
            $object = $this->model->forceDeleteAllByUser($user);

            return new DefaultResource(['message' => 'The trash was permanently cleaned.']);
        } catch (\Exception $error) {
            return new DefaultErrorResource(['errors' => $error->getMessage()]);
        }
    }

    /**
     * Restore a specific trashed contact
     * @api {GET} /api/contacts/trash/restore
     * @param Restore $request
     * @return Resource json
     */
    public function restore(Restore $request)
    {
        try {

            $object = $this->model->restore($request->contact);

            return new DefaultResource($object);
        } catch (\Exception $error) {
            return new DefaultErrorResource(['errors' => $error->getMessage()]);
        }
    }
}
