<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('prenom')->paginate(10);
        return view('clients.index')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation des données saisies par l'utilisateur
        $this->validate($request,[
          'nom' => 'required|max:50',
          'prenom' => 'required|max:50',
          'dateN' => 'required|date',
          'adresse' => 'required|max:70',
          'tel' => 'required',
        ]);

        //enregistrer les données dans la base de données
        $client = new Client;
        $client->nom=$request->input('nom');
        $client->prenom=$request->input('prenom');
        $client->dateNaissance=$request->input('dateN');
        $client->adresse=$request->input('adresse');
        $client->tel=$request->input('tel');
        $client->save();
        return redirect('/clients')->with('success','Client ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $client = Client::find($id);
      return view('clients.edit')->with('client', $client);
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
      //validation des données saisies par l'utilisateur
        $this->validate($request,[
          'nom' => 'required|max:50',
          'prenom' => 'required|max:50',
          'dateN' => 'required|date',
          'adresse' => 'required|max:70',
          'tel' => 'required',
        ]);

        //enregistrer les données dans la base de données
        $client = Client::find($id);
        $client->nom=$request->input('nom');
        $client->prenom=$request->input('prenom');
        $client->dateNaissance=$request->input('dateN');
        $client->adresse=$request->input('adresse');
        $client->tel=$request->input('tel');
        $client->save();
        return redirect("/clients/$client->id")->with('success','Client mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('success','Client supprimé');
    }
}
