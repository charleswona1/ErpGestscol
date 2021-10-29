<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matiere;
use App\Models\niveau_scolaire;
use App\Models\matiere_niveau;
use App\Models\enseignant;

class ParametrageMatiereController extends Controller
{
    public function parametrage_matiere() {
        $niveaux=niveau_scolaire::all();
        $matieres=matiere::all();
        $matiere_niveaux=matiere_niveau::all();
      // dd($matiere_niveaux[0]->matiere()->get());
        return view('gestscol.configuration.parametrage_matiere', compact('niveaux', 'matieres', 'matiere_niveaux'));
    }
    
    public function create(Request $request) {
        //dd($request->all());
         $data = $request->validate([
             "id_matiere" => 'required',
             "id_niveau_scolaire" => 'required',
             "id_groupe_matiere" => 'required',
             "coefficient" => 'required',
         ]);
         // dd($data);
         
         $matiere_niveau = new matiere_niveau($request->all());
         $matiere_niveau= $matiere_niveau ->save();
         
         Session::flash('success', "parametrage de matière ajouté");
         
         return redirect()->route('gestscol.parametrage_matiere');
         //return view('gestscol.ressource.sanction.formulaire_sanction');
     }
     public function edit($id) {
        $niveaux=niveau_scolaire::all();
        $matieres=matiere::all();
        $matiere_niveaux=matiere_niveau::all();
        $matiere_niveau=matiere_niveau::find($id);
       // dd($matiere_niveau->niveau_scolaire()->get());
        return view('gestscol.configuration.parametrage_matiere_edit', compact('niveaux', 'matieres', 'matiere_niveaux', 'matiere_niveau'));
         //return view('gestscol.ressource.sanction.formulaire_sanction');
     }
     public function update(Request $request) {
        $data = $request->validate([
            "id_matiere" => 'required',
            "id_niveau_scolaire" => 'required',
            "id_groupe_matiere" => 'required',
            "coefficient" => 'required',
        ]);
     
        $matiere_niveau= matiere_niveau::find($request->id)->update(
            array(
                $data  
            )
        );
        /* $matiere_niveau = new matiere_niveau($request->all());
         $matiere_niveau= $matiere_niveau ->save();*/
         Session::flash('success', "parametrage de matière modifié");
         
         return redirect()->route('gestscol.parametrage_matiere');
         //return view('gestscol.ressource.sanction.formulaire_sanction');
     }
     public function delete($id)
     {
        $matiere_niveau= matiere_niveau::find($id);       
        if($matiere_niveau)
        {
            $matiere_niveau->delete();
        }
        
        return redirect()->route('gestscol.parametrage_matiere');
     
     }
     public function affectation()
    {
        $enseignants=enseignant::all();
       return view('gestscol.configuration.affectation_matiere', compact('enseignants'));
            
    }
}
