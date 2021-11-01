<?php

namespace App\Http\Controllers;

use App\Models\evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EvaluationController extends Controller
{
    public function liste_evaluation() {
        $evaluations=evaluation::all();
        return view('gestscol.ressource.evaluation.list_evaluation', compact('evaluations'));
    }
    
    public function formulaire_evaluation() {
    
        return view('gestscol.ressource.evaluation.formulaire_evaluation');
    }
    
    public function store(Request $request){
        $request->validate([
			'nom'=>'required',
	   ]);
	  // dd($request->all());
		$evaluation= new evaluation($request->all());
        $evaluation->id_annee_academique=1;
		
		$evaluation->save();
		Session::flash('success', "Evaluation ajoutée avec success");
        return redirect()->route('gestscol.list_evaluation'); 
    }
    public function edit($id) {        
        $evaluation=evaluation::where('id_evaluation',$id)->get()[0];
		//dd($evaluation);
        
    return view('gestscol.ressource.evaluation.evaluation_edit', compact('evaluation'));
    }
    function update(Request $request)
	{
		$request->validate([
			'nom'=>'required',
			
	   ]);
    evaluation::where('id_evaluation',$request->id)->update(
        array(
            'nom'=>$request->nom,
           
                       
        )
    );
    
    Session::flash('success', "evaluation modifiée avec success");
    return redirect()->route('gestscol.list_evaluation'); 
}
    public function destroy($id)
    {
        evaluation::where('id_evaluation', $id)->delete();
        Session::flash('success', "evaluation supprimée");
        
        return redirect()->route('gestscol.list_evaluation'); 
    
    }
}
