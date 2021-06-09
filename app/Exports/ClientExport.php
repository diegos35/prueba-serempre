<?php

namespace App\Exports;


use App\Models\Citie;
use App\Models\Client;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClientExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'created_at',
            'Ciudad',     
        ];
    }
    public function collection()
    {
        
         $users = DB::table('clients')->whereNull('clients.deleted_at')
         ->join('cities', 'clients.citie_id', '=', 'cities.id')
         ->select('clients.id as idCliente','clients.name as NomnbreCliente','clients.created_at as creacionCliente', 'cities.name as CiudadCliente')->get();
         return $users;

    }
}   