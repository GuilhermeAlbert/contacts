<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImportContact\{
    Import
};
use App\Http\Resources\{DefaultErrorResource, DefaultResource};
use App\Repositories\ImportContactRepository;
use App\Utils\HttpStatusCodes;

class ImportContactController extends Controller
{
    // Protected items context
    protected $model;

    /**
     * Constructor method
     * @param ImportContactRepository $model
     */
    public function __construct(ImportContactRepository $model)
    {
        $this->model = $model;
    }

    /**
     * Shows the import contacts index page
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.contacts.import');
    }

    /**
     * Import contacts from a CSV file
     * @api {POST} /api/contacts/import
     * @param Import $request
     * @return Resource json
     */
    public function import(Import $request)
    {
        try {

            $object = $this->model->import($request->archive);

            return (new DefaultResource($object))->response()->setStatusCode(HttpStatusCodes::OK);
        } catch (\Exception $error) {
            return new DefaultErrorResource(['errors' => $error->getMessage()]);
        }
    }
}
