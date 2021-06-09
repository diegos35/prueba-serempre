<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    

    public function model(array $row)
    {
      

        return new Client([
        'cod' => $row[0],
        'name' => $row[1],
        'citie_id' => $row[2],
            //
        ]);
    }
}
