<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

use App\Exports\ClientExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    public function exportClients()
    {
        return Excel::download(new ClientExport, 'users.xlsx');


    }
}
