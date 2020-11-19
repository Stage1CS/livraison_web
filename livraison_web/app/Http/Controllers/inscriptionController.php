<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livreur;
use DB;

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
        return view('livreur/formulaire_ajout');
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
        $e->nom= $request->nom;
        $e->prénom= $request->prénom;
        $e->mail= $request->mail;
        //$e->mail= $request->input( 'mail' );
        $e->num= $request->num;
        //$e->nb_ajout= $request->nb_ajout;
        //$e->id_zone= $request->id_zone; 
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
    public function show_livreur_nom()
    {
        return view('livreur/chercher');
    }

    public function show_livreur_nom_choisi(Request $request)
    {
        $nom = $request->get('nom');
        $selct = DB::table ('livreurs')->where('nom', $nom)->get();  
        //->where ([['niveau', $varNiveau], ['grp', $varGrp]])
        //$data = DB::table('userquestion')->where('userEmail', '=', auth()->user()->email)->get();
        return view('livreur/affichage')->with('l', $selct); 
    }

    public function show_livreur_prenom($id)
    {
        //
    }

    public function show_livreur_mail($id)
    {
        //
    }

    public function show_livreur_numero($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_livreur($id)
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
    public function update_livreur(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_livreur($id)
    {
        DB::delete('delete from livreurs where id_livreur = ?',[$id]);
        return redirect('dashboard');
    }
}



