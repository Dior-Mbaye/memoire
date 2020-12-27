<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stages ;

class StagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sta['stages'] = Stages::all();
        return view('stages.index')->with($sta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stage = new Stages() ;    
        $stage->nom_entreprise = $request->nom_entreprise;
        $stage->profil_demande = $request->profil_demande;
        $stage->duree_stage = $request->duree_stage;
        $stage->message = $request->message;
        if ($request->hasFile('fichier')) {
            // Get fichier file
            $file = $request->file('fichier');
            $extension =  $file->getClientOriginalExtension(); //fichier extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/fichier/', $filename);
            $stage->fichier = $filename;
        } else {
            return $request;
            $stage->fichier = '';
        }

        $stage->save();
        return redirect('/stages.index')->with('success','Stage ajoutée avec succées') ;
        
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
        $sta['stage'] =Stages::find($id) ;
        //$sta['stage'] = $stage;
        return view('stages.edit')->with($sta);
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

        $stage = Stages::find($id);
        $stage->nom_entreprise = $request->nom_entreprise;
        $stage->profil_demande = $request->profil_demande;
        $stage->duree_stage = $request->duree_stage;
        $stage->message = $request->message;
        //$stage->fichier = $request->fichier;
        if ($request->hasFile('fichier')) {
            // Get fichier file
            $file = $request->file('fichier');
            $extension =  $file->getClientOriginalExtension(); //fichier extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/fichier/', $filename);
            $stage->fichier = $filename;
        } else {
            return $request;
            $stage->fichier = '';
        }


        $stage->update();
        return redirect('/stages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stages::destroy($id);
        return redirect('/stages.index');
    }
}
