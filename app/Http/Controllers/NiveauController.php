<?php

namespace App\Http\Controllers;

use App\Models\etablissement;
use Illuminate\Http\Request;
use App\Models\niveau;
use App\Models\cycle;
use Illuminate\Support\Facades\Session;

use App\Models\niveau_scolaire;
use Exception;

class NiveauController extends Controller
{
    public function liste_niveau() {
        $niveau_scolaires=niveau_scolaire::all();
        return view('gestscol.ressource.niveau.liste_niveau', compact("niveau_scolaires"));
    }

    public function formulaire_niveau() {
        $cycles=cycle::all();
        return view('gestscol.ressource.niveau.formulaire_niveau', compact('cycles'));
    }

    public function creer_niveau(Request $request) {
      //  dd($request->all());
        $request->validate([
            'nom'=>['required', 'string', 'max:50'],
            'id_cycle'=>['required'],
            'bareme'=>['required', 'numeric'],
            'ordre'=>['required', 'numeric'],
        
        ]);

		$niv = new niveau_scolaire($request->all());
		$niv->save();
		Session::flash('success', "matiere ajoutée avec success");
        return redirect()->route('gestscol.list_niveau');
    }
    function edit($id) {
        $niveau_scolaire=niveau_scolaire::where('id_niveau',$id)->get()[0];
        
        $cycles=cycle::all();
        return view('gestscol.ressource.niveau.formulaire_niveau_edit', compact('cycles','niveau_scolaire'));
    }
	public function update(Request $request)
    {
		$request->validate([
			'nom'=>['required', 'string', 'max:50'],
            'id_cycle'=>['required'],
            'bareme'=>['required', 'numeric'],
            'ordre'=>['required', 'numeric'],
        
        ]);
    // dd($request->id);
	niveau_scolaire::where('id_niveau',$request->id)->update(
            array(
                'nom'=>$request->nom,
				'id_cycle'=>$request->id_cycle,
				'bareme'=>$request->bareme,
				'ordre'=>$request->ordre,             
            )
        );
        
        Session::flash('success', "niveau modifié avec success");
        return redirect()->route('gestscol.list_niveau');
    }
    public function destroy($id)
    {
        niveau_scolaire::where('id_niveau', $id)->delete();
        Session::flash('success', "niveau supprimé");
        
        return redirect()->route('gestscol.list_niveau');
     
    }
}
