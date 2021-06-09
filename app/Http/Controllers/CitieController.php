<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citie;
use App\Models\Client;

class CitieController extends Controller
{
    public function index()
    {
        $cities = Citie::paginate(5);;
        return view('citie.index')->with('cities', $cities);
    }

    public function create()
    {
        return view('citie.create');
    }

    public function store(Request $request)
    {
        $citie = new Citie;
        $citie->cod = $request->input('cod');
        $citie->name  = $request->input('name');
        $citie->save();
        return redirect()->route('citie.index');
    }

    public function edit($id)
    {
        $citie = Citie::find($id);
        return view('citie.edit')->with('citie',$citie);
    }

    public function update(Request $request, $id)
    { 
        $citie = Citie::find($id);
        $citie->cod = $request->input('cod');
        $citie->name  = $request->input('name');
        $citie->save();
        return redirect()->route('citie.index');
    }

    public function destroy($id)
    {   $client = Client::where('citie_id',$id)->first();
        if (isset($client)) {
            flash()->message('la ciudad tiene relaciones con Clientes')->error();
            return redirect()->route('citie.index');
        }
       
        Citie::destroy($id);
        flash()->message('Ciudad Eliminada')->success();
        return redirect()->route('citie.index');
    }



}
