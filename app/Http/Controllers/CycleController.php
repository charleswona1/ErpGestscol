<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cycle;
use Illuminate\Support\Facades\Session;

class CycleController extends Controller
{
    
    public function liste_cycle() {
        $cycles = cycle::all();
        return view('gestscol.ressource.cycle.list_cycle', compact('cycles'));
    }

	public function formulaire_cycle() {
        return view('gestscol.ressource.cycle.formulaire_cycle');
    }

   public function creer_cycle(Request $request) {
        $request->validate([
            'nom'=>['required', 'string', 'max:50'],
       ]);
        $cycle = new cycle($request->all());
        $cycle->id_etablissement = 1;
        $cycle->save();
		Session::flash('success', "cycle ajouté avec success ");
        
        return redirect()->route('gestscol.list_cycle');
    }
	public function edit($id) {
		$cycle=cycle::where('id_cycle',$id)->get()[0];
        
        return view('gestscol.ressource.cycle.formulaire_cycle_edit', compact('cycle'));
    }
	public function update(Request $request)
    {
        $data =   $request->validate([
            'nom'=>['required', 'string', 'max:50'],
       ]);
     
	   cycle::where('id_cycle',$request->id)->update(
            array(
                "nom"=>$request->nom,
            )
        );
        
        Session::flash('success', "cycle modifié avec success ");
        
        return redirect()->route('gestscol.list_cycle');
    }
	public function destroy($id)
    {
        $cycle = cycle::where('id_cycle', $id)->delete();
        Session::flash('success', "cycle supprimée ");
        
        return redirect()->route('gestscol.list_cycle');
     
    }
}
