<?php

namespace App\Http\Controllers;
use App\Models\sanction;
use App\Models\cycle;
use App\Models\parametrage_sanction;

use Illuminate\Http\Request;

class SanctionController extends Controller
{
    public function liste_sanction() {
       // $sanctions  = new sanction;
        $sanctions=sanction::all();
      //  dd($sanctions);
        return view('gestscol.ressource.sanction.list_sanction', compact('sanctions'));
    }

    public function formulaire_sanction() {
        return view('gestscol.ressource.sanction.formulaire_sanction');
    }

    public function create(Request $request) {
       //dd($request->all());
        $data = $request->validate([
            "libelle" => 'required',
            "abbreviation" => 'required',
            "degre" => 'required',
            "seuil" => 'required',
            "unite" => 'required',
        ]);
        // dd($data);
        
        $sanction = new sanction($request->all());
        $sanction->id_etablissement=2;
        $sanction ->save();

        //Session::flash('success', "sanction a bien été créé");
        return redirect()->route('gestscol.liste_sanction');
        //return view('gestscol.ressource.sanction.formulaire_sanction');
    }
    
    public function formulaire_sanction_update($id) {
        $sanction=sanction::where('id_sanction', $id)->get();
        $sanction=$sanction[0];
        
        //dd($sanction);
        return view('gestscol.ressource.sanction.formulaire_sanction_edit', compact('sanction'));
    }
    public function update(Request $request) {
        //dd($request->all());
         $data = $request->validate([
             "libelle" => 'required',
             "abbreviation" => 'required',
             "degre" => 'required',
             "seuil" => 'required',
             "unite" => 'required',
         ]);
      
         $sanction= sanction::where('id_sanction',$request->id) ->update(
             array(
                "libelle"=>$request->libelle,
                "abbreviation"=>$request->abbreviation,
                "degre"=>$request->degre,
                "seuil"=>$request->seuil,
                "unite"=>$request->unite, 
             )
         );
     
         return redirect()->route('gestscol.liste_sanction');
     }
     public function delete($id)
     {
        $sanction= sanction::where('id_sanction',$id);
        if($sanction)
        {
            $sanction->delete();
        }
        
        return redirect()->route('gestscol.liste_sanction');
     
     }
     public function parametrage()
     {
        $sanctions= sanction::all();
        
        $cycles= cycle::all();
        $parametrage_sanctions = parametrage_sanction::all();
      //  dd($parametrage_sanctions[0]->sanction2()->get());
        
        return view('gestscol.ressource.sanction.parametrage.list_parametrage_sanction', compact('sanctions', 'cycles','parametrage_sanctions'));
     
     }
     public function parametrage_edit($id)
     {
        $sanctions= sanction::all();
        $cycles= cycle::all();
        $parametrage_sanctions = parametrage_sanction::all();
      //  dd($parametrage_sanctions[0]->sanction2()->get());
        $parametrage_sanction = parametrage_sanction::where('id_parametrage', $id)->get();
        $parametrage_sanction = $parametrage_sanction[0];
     
        //dd($parametrage_sanction->cycle()->get()[0]->id_cycle) ;       
        return view('gestscol.ressource.sanction.parametrage.list_parametrage_sanction_edit', compact('sanctions', 'cycles','parametrage_sanctions','parametrage_sanction'));
     
     }
     public function parametrage_create(Request $request)
     {
      
        $data = $request->validate([
            "id_cycle" => 'required',
            "id_sanction" => 'required',
            "valeur" => 'required',
            "id_sanction2" => 'required',
            "valeur2" => 'required',
        ]);
        // dd($data);
        
        $parametrage_sanction = new parametrage_sanction($request->all());
        $parametrage_sanction ->libelle2='';
        $parametrage_sanction ->save();  
      
        return redirect()->route('gestscol.sanction.parametrage');
     
     }
     public function parametrage_update(Request $request) {
       
        $data = $request->validate([
            "id_cycle" => 'required',
            "id_sanction" => 'required',
            "valeur" => 'required',
            "id_sanction2" => 'required',
            "valeur2" => 'required',
        ]);
      
         $parametrage_sanction= parametrage_sanction::where('id_parametrage',$request->id) ->update(
             array(
                "id_cycle"=>$request->id_cycle,
                "id_sanction"=>$request->id_sanction,
                "valeur"=>$request->valeur,
                "id_sanction2"=>$request->id_sanction2,
                "valeur2"=>$request->valeur2, 
             )
         );
         
         return redirect()->route('gestscol.sanction.parametrage');
        }
     public function parametrage_delete($id)
     {
        $parametrage_sanction= parametrage_sanction::where('id_parametrage',$id);
        if($parametrage_sanction)
        {
            $parametrage_sanction->delete();
        }

        return redirect()->route('gestscol.sanction.parametrage');
     
     }
}
