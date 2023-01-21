<?php

namespace App\Http\Controllers;
use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes=Personne::all();
        return view('personnes.index',compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personne=new Personne();
        $personne->nom=$request->input('nom');
        $personne->prenom=$request->input('prenom');
        $personne->telephone=$request->input('telephone');
        $personne->save();
        return redirect('/personnes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personne=Personne::findOrFail($id);
        return view('personnes.show',compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $data=Personne::findOrFail($id);
        return view('personnes.edit',compact('data'));
       
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
        $personne=Personne::find($id);
        $personne->nom=$request->nom;
        $personne->prenom=$request->prenom;
        $personne->telephone=$request->telephone;
        $personne->save();
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personne=Personne::find($id);
        $personne->delete();
        return redirect('/personnes');
    }
}
