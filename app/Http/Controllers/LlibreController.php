<?php

namespace App\Http\Controllers;
use App\Models\Llibre;
use App\Models\Prestec;

use Illuminate\Http\Request;

class LlibreController extends Controller
{
    //
    public function index()
    {
        $llibres = Llibre::all();
        return view('llibres.index', compact('llibres'));
    }
    public function create()
    {
        return view('llibres.create');
    }
    public function store(Request $request)
    {
        $llibre = new Llibre();
        $llibre->Isbn = $request->input('isbn');
        $llibre->titol = $request->input('titol');
        $llibre->categoria = $request->input('categoria');
        $llibre->preu = $request->input('preu');
        $llibre->editorial = $request->input('editorial');
        $llibre->autor = $request->input('autor');
        $llibre->save();
        return redirect()->route('llibres.index');
    }
    public function show($Isbn)
    {
        $llibre = Llibre::find($Isbn);
        return view('llibres.show', compact('llibre'));
    }
    public function edit($Isbn)
    {
        $llibre = Llibre::find($Isbn);
        return view('llibres.edit', compact('llibre'));
    }
    public function update(Request $request, $Isbn)
    {
        $llibre = Llibre::find($Isbn);
        $llibre->Isbn = $request->input('Isbn');
        $llibre->titol = $request->input('titol');
        $llibre->categoria = $request->input('categoria');
        $llibre->preu = $request->input('preu');
        $llibre->editorial = $request->input('editorial');
        $llibre->autor = $request->input('autor');
        $llibre->save();
        return redirect()->route('llibres.index');
    }
    public function destroy($Isbn)
    {
        $llibre = Llibre::find($Isbn);
        $prestec = Prestec::where('ISBN', $llibre->Isbn)->get();
        if(count($prestec) > 0){
            return redirect()->route('llibres.index')->with('error', 'No es pot eliminar el llibre perquè té préstecs associats');
        }
        else{
            $llibre->delete();
            return redirect()->route('llibres.index')->with('success', 'Llibre eliminat correctament');
        }
        
    }

}
