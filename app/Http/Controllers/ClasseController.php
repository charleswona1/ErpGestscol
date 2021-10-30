<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classe;
use App\Models\niveau_scolaire;

use Illuminate\Support\Facades\Session;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=classe::all();
       
       // dd($classes);
        return view('gestscol.ressource.classe.list_classe', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux=niveau_scolaire::all();
        
        return view('gestscol.ressource.classe.formulaire_classe', compact('niveaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
         $request->validate([
            "id_niveau" => 'required',
            "nom" => 'required',
        ]);
        
        $classe = new classe($request->all());
        $classe= $classe ->save();    
        Session::flash('success', "classe ajoutée avec success");
        return redirect()->route('gestscol.list_classe');
    
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
        $classe=classe::where('id_classe',$id)->get()[0];
        
        $niveaux=niveau_scolaire::all();
       // dd($classe->niveau()->get()[0]);
        
        return view('gestscol.ressource.classe.formulaire_classe_edit', compact('niveaux','classe'));
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
        $data = $request->validate([
            "id_niveau" => 'required',
            "nom"=>'required'
        ]);
     
         classe::where('id_classe',$request->id)->update(
            array(
                "id_niveau"=>$request->id_niveau,
                "nom"=>$request->nom,  
            )
        );
        
        Session::flash('success', "classe modifiée avec success");
        return redirect()->route('gestscol.list_classe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classe = classe::where('id_classe', $id)->delete();
        Session::flash('success', "classe supprimée ");
        
        return redirect()->route('gestscol.list_classe');
     
    }

  
}
