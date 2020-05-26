<?php

namespace App\Repositories;

use App\Bases\BaseRepository;

use App\Contact;
use App\Interfaces\ImportContactInterface;
use Illuminate\Support\Facades\Auth;

class ImportContactRepository extends BaseRepository implements ImportContactInterface
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
     * Import contacts from a CSV file
     * @param array $archive
     * @return array $result
     */
    public function import($archive)
    {
        $result = [];

        foreach ($archive[0] as $key => $item) {
            $object = [
                "first_name" => $item['first_name'],
                "email"      => $item['email'],
                "phone"      => $item['phone'],
                "user_id"    => Auth::user()->id,
            ];
            array_push($result, $this->model->create($object));
        }

        return $result;
    }
}
