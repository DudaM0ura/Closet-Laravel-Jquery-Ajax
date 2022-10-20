<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmarioDeRoupas;

class ArmarioController extends Controller
{

    public function index()
    {
        $armario = ArmarioDeRoupas::get();
        return view('index', compact('armario'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        ArmarioDeRoupas::create($request->all());
        return redirect()->route('index.closet');
    }

 
    public function edit($id)
    {
        $roupa = ArmarioDeRoupas::find($id);
        return view('edit', compact('roupa'));
    }

    public function update(Request $request, $id)
    {
        $roupa = ArmarioDeRoupas::find($id);
        $roupa->update($request->all());
        return redirect()->route('index.closet');
    }

  
    public function destroy($id)
    {
        $armario = ArmarioDeRoupas::find($id);
        $armario->delete();

    }
}
