<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classe;
use Illuminate\Support\Facades\DB;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return classe::with('niveau')
            ->withCount('niveau')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $data=DB::table('classes')->insertGetId([
        "id_niveau" => $request->id_niveau,
        "nom" => $request->nom
        ]);
        if($data){
                 return response()->json([
                    'success' => "classe créer",
                ]);
              }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateClasse = DB::table('classes')->where('id_classe', $request->id)->update([
            "id_niveau" => $request->id_niveau,
        "nom" => $request->nom
        ]);

        return response()->json([
            'success' => "Classe mise a jour",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classe = DB::table('classes')->where('id_classe', $id)->delete();
        return response()->json([
            'success' => "classe supprimer",
        ]);
    }
}
