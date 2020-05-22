<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use App\Http\Requests\Contact\{
    Index,
    Show,
    Store,
    Update,
    Destroy
};
use App\Http\Resources\DefaultResource;
use App\Utils\HttpStatusCodes;

class ContactController extends Controller
{
    protected $model;

    public function __construct(ContactRepository $model)
    {
        $this->model = $model;
    }

    /**
     * Shows the contacts index page
     * @param Request request
     * @return view
     */
    public function list(Request $request)
    {
        return view('pages.webapp.contacts.list', []);
    }

    /**
     * Shows the contacts edit page
     * @param Request request
     * @return view
     */
    public function edit(Request $request)
    {
        return view('pages.webapp.contacts.edit', []);
    }

    /**
     * Shows the contacts create page
     * @param Request request
     * @return view
     */
    public function create(Request $request)
    {
        return view('pages.webapp.contacts.create', []);
    }

    /**
     * Returns all contacts
     * @api {GET} /api/contacts
     * @param Index $request
     * @return Resource json
     */
    public function index(Index $request)
    {
        try {

            $data = $this->model->all();

            return new DefaultResource($data);
        } catch (\Exception $error) {
            return new DefaultResource($error->getMessage());
        }
    }

    /**
     * Returns a specific contact
     * @api {GET} /api/contacts/{contact}
     * @param Show $request
     * @return Resource json
     */
    public function show(Show $request)
    {
        try {

            $data = $request->contact;

            return new DefaultResource($data);
        } catch (\Exception $error) {
            return new DefaultResource($error->getMessage());
        }
    }

    /**
     * Create a new contact
     * @api {POST} /api/contacts
     * @param Store $request
     * @return Resource json
     */
    public function store(Store $request)
    {
        try {

            $data = $this->model->create($request->inputs);

            return (new DefaultResource($data))->response()->setStatusCode(HttpStatusCodes::CREATED);
        } catch (\Exception $error) {
            return new DefaultResource($error->getMessage());
        }
    }

    /**
     * Update a specific contact
     * @api {GET} /api/contacts/{contact}
     * @param Update $request
     * @return Resource json
     */
    public function update(Update $request)
    {
        try {

            $data = $this->model->update($request->contact, $request->inputs);

            return new DefaultResource($data);
        } catch (\Exception $error) {
            return new DefaultResource($error->getMessage());
        }
    }

    /**
     * Delete a specific contact
     * @api {GET} /api/contacts/{contact}
     * @param Destroy $request
     * @return Resource json
     */
    public function destroy(Destroy $request)
    {
        try {

            $data = $this->model->delete($request->contact);

            return (new DefaultResource($data))->response()->setStatusCode(HttpStatusCodes::NO_CONTENT);
        } catch (\Exception $error) {
            return new DefaultResource($error->getMessage());
        }
    }
}
