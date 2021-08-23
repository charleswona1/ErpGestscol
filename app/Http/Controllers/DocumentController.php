<?php

namespace App\Http\Controllers;

use App\Models\document;
use Exception;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function getDocument($id){
        $documents = document::where('id_etablissement', $id)->get();
        return view('configuration.content.documentations.document', compact('documents'));
    }

    public function addDocument(Request $request){
        $message = "";
        try {
        $document = new document();
        $document->id_etablissement = $request->id_etablissemnt;
        $document->sign_bulg = $request->intitule;
        $document->ligne1_diplome = $request->ligne1;
        $document->ligne2_diplome = $request->ligne2;
        $document->ligne3_diplome = $request->ligne3;
        $document->ligne4_diplome = $request->ligne4;
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
            $res = document::where('id_etablissement', $id)->delete();
            $resultat = array(
                'resultat' => $res,
                'message' => "succes",
            );
            return response()->json($resultat);
        } catch (Exception $e) {
            $message = $e->getMessage();
        }

    }

}
