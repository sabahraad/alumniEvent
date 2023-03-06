<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCustomer implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'Jid'=> $row[0],
            'name'=> $row[1],
            'email'=> $row[2],
            'passing_year'=> $row[3],
            'mobile_number'=> $row[4]
        ]);
    }
}
