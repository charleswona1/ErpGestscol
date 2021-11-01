<?php

namespace App\Http\Controllers;

use App\Models\groupe_matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupeMatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupe_matieres=groupe_matiere::all();   
        return view('gestscol.ressource.matiere.groupe_matiere.groupe_matiere', compact('groupe_matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  return view('gestscol.ressource.matiere.groupe_matiere.create', compact('groupe_matieres'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero'=>'required',
			'nom'=>'required',
	   ]);
	  // dd($request->all());
		$groupe_matiere= new groupe_matiere($request->all());
        $groupe_matiere->id_annee_academique=1;
        $groupe_matiere->id_niveau_scolaire=1;		
		$groupe_matiere->save();
		Session::flash('success', "Groupe de matiere ajoutée avec success");
        return redirect()->route('gestscol.groupe_matiere.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe_matiere=groupe_matiere::where('id_groupe_matiere',$id)->get()[0];
        $groupe_matieres=groupe_matiere::all();   
        return view('gestscol.ressource.matiere.groupe_matiere.groupe_matiere_edit', compact('groupe_matieres', 'groupe_matiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
			'numero'=>'required',
			'nom'=>'required',
	   ]);
        // dd($request->id);
        groupe_matiere::where('id_groupe_matiere',$request->id)->update(
                array(
                    'numero'=>$request->numero,
                    'nom'=>$request->nom,                           
                )
            );
        
        Session::flash('success', "Groupe de matiere modifié avec success");
        return redirect()->route('gestscol.groupe_matiere.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        groupe_matiere::where('id_groupe_matiere', $id)->delete();
        Session::flash('success', "groupe de matiere supprimé");
        
        return redirect()->route('gestscol.groupe_matiere.index'); 
    }
}
