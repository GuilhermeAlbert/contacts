<?php

namespace App\Imports;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Contact([
            'first_name' => $row['first_name'],
            'email'      => $row['email'],
            'phone'      => $row['phone'],
            'user_id'    => Auth::user()->id
        ]);
    }
}
