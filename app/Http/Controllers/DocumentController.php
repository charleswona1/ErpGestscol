<?php

namespace App\Http\Controllers;

use App\Models\document;
use App\Models\entete;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DocumentController extends Controller
{
    public function getDocument($id){
        $documents = document::where('id_etablissement', Session::get('idEtabl'))->get();

        return view('configuration.content.documentations.document', compact('documents'));
    }

    public function addDocument(Request $request){
        $message = "";
        try {
        $document = new document();
        $document->id_etablissement = Session::get('idEtabl');
        $document->intitule = $request->intitule;
        $document->ligne1 = $request->ligne1;
        $document->ligne2 = $request->ligne2;
        $document->ligne3 = $request->ligne3;
        $document->ligne4 = $request->ligne4;
        $document->creation_date = date("Y-m-d");
        $document->save();

        $resultat = array(
            'array' => $document,
            'success' => "Document ajouter avec success",
        );
        return response()->json($resultat);
        } catch (Exception $e) {
            $message = $e->getMessage();
        }
    }

    public function deleteDocument($id){
        $message = "";
        try {
            $res = document::where('id_document', $id)->delete();
            $resultat = array(
                'message' => "success",
            );
            return response()->json($resultat);
        } catch (Exception $e) {
            $message = $e->getMessage();
        }

    }

    public function editEntete($id){
        $entete = entete::find($id);
        return view('configuration.content.documentations.editEntete', compact("entete"));

    }

    public function modifEntete(Request $request){
        $request->validate([
            'id' => ['required', 'numeric'],
            'entete_g' => ['required', 'string'],
            'entete_d' => ['required', 'string'],
        ]);

        try {
            $entete = entete::find($request->id);
            $entete->eng_gauche = $request->entete_g;
            $entete->eng_droit = $request->entete_d;
            $entete->save();
            return 1;
        } catch (QueryException $e) {
            return $e->getMessage();
            //throw $th;
        }
    }

}
