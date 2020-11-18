<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livreur;

class inscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_livreur()
    {
        return view('formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_livreur(Request $request)
    {
        $e = new livreur();
        $e->id_livreur= $request->get('id_livreur');  // i must change it and put an auto incremebter 
        $e->nom= $request->nom;
        $e->prénom= $request->prénom;
        $e->mail= $request->mail;
        //$e->mail= $request->input( 'mail' );
        $e->num= $request->num;
        $e->nb_ajout= $request->nb_ajout;
        $e->id_zone= $request->id_zone; 
        $e->save();
        // retourner vers la page home 
        return view('dashboard');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



