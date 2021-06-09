<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Imports\ClientImport;
use App\Exports\ClientExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    private $excel;
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }
    
    public function exportClients()
    {
        return Excel::download(new ClientExport, 'users.xlsx');
    }



    public function importClients(Request $request)
{
 
   Excel::import(new ClientImport, request()->file('excel'));
    return back();
}

    

}
