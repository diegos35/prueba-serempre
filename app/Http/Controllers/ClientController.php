<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citie;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('client.index')->with('clients', $clients);
    }

    public function create()
    { 
        $cities = Citie::get()->pluck('name', 'id');
        return view('client.create')->with('cities', $cities);
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->cod = $request->input('cod');
        $client->name  = $request->input('name');
        $client->citie_id  = $request->input('citie_id');
        $client->save();
        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        $cities = Citie::get()->pluck('name', 'id');
        return view('client.edit')->with('client',$client)->with('cities', $cities);
    }

    public function update(Request $request, $id)
    { 
        $client = Client::find($id);
        $client->cod = $request->input('cod');
        $client->name  = $request->input('name');
        $client->citie_id  = $request->input('citie_id');
        $client->save();
        return redirect()->route('client.index');
    }

    public function destroy($id)
    {  
        Client::destroy($id);
        flash()->message('Cliente Eliminado')->success();
        return redirect()->route('client.index');
    }



}

