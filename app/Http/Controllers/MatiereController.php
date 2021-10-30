<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\matiere;

use Illuminate\Support\Facades\Session;

class MatiereController extends Controller
{
    function liste_matiere() {
        $matieres=matiere::all();
        return view('gestscol.ressource.matiere.list_matiere', compact('matieres'));
    }

    function creer_matiere() {
        return view('gestscol.ressource.matiere.creer_matiere');
    }
    function store(Request $request) {
        $data=$request->validate([
            "nom" => 'required',
            "abreviation" => 'required',
        ]);
        
        $matiere = new matiere($data);
        $matiere ->id_annee_academique=1;
        $matiere= $matiere ->save();    
        Session::flash('success', "matiere ajoutée avec success");
        return redirect()->route('gestscol.list_matiere');
    }
    function edit($id) {
        $matiere=matiere::where('id_matiere',$id)->get()[0];
        
        return view('gestscol.ressource.matiere.edit_matiere', compact('matiere'));
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            "nom" => 'required',
            "abreviation" => 'required',
        ]);
    // dd($request->id);
         matiere::where('id_matiere',$request->id)->update(
            array(
                "nom"=>$request->nom,
                "abreviation"=>$request->abreviation,              
            )
        );
        
        Session::flash('success', "matière modifiée avec success");
        return redirect()->route('gestscol.list_matiere');
    }
    public function destroy($id)
    {
        matiere::where('id_matiere', $id)->delete();
        Session::flash('success', "matiere supprimée ");
        
        return redirect()->route('gestscol.list_matiere');
     
    }
    function parametrage_matiere() {
        return view('gestscol.configuration.parametrage_matiere');
    }

    function groupe_matiere() {

    }
  
}
