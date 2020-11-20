<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livreur;
use App\Models\zone;
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
        $select = new zone();
        $e->nom= $request->nom;
        $e->prénom= $request->prénom;
        $e->mail= $request->mail;
        //$e->mail= $request->input( 'mail' );
        $e->num= $request->num;
        //$e->nb_ajout= $request->nb_ajout;
        $select = DB::table ('zone')->where('nom_zone', $request->zone)->first();
        $shit= $select->id_zone;
        $e->id_zone= $shit;
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
    public function show_livreur()
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

    public function show_livreur_prenom_choisi(Request $request)
    {
        $prenom = $request->get('prénom');
        $selct = DB::table ('livreurs')->where('prénom', $prenom)->get();  
        return view('livreur/affichage')->with('l', $selct); 
    }

    public function show_livreur_email_choisi(Request $request)
    {
        $mail = $request->get('mail');
        $selct = DB::table ('livreurs')->where('mail', $mail)->get();  
        return view('livreur/affichage')->with('l', $selct); 
    }

    public function show_livreur_numero_choisi(Request $request)
    {
        $num = $request->get('num');
        $selct = DB::table ('livreurs')->where('num', $num)->get();  
        return view('livreur/affichage')->with('l', $selct); 
    }

    public function get_zones()
    {
        //recuperer les zones
        //$zones = zone::all();
        $zones = DB::table('zone')->get();
        return view('livreur/zone')->with('z',$zone);
    }

    public function show_livreur_zone_choisi(Request $request)
    {
        $z = $request->get('zone');
        //echo $z;
        $select = DB::table ('zone')->where('nom_zone', $z)->first();
        $selct = DB::table('livreurs')->where('id_zone', $select->id_zone)->get();  
        return view('livreur/affichage')->with('l', $selct); 
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



