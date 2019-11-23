<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Administratif;
use App\Http\Requests\AdministratifRequest;

class AdministratifController extends Controller
{
    public function getForm()
    {
        return view('WebMaster');
    }

    public function postForm(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:administratifs',
            'dateNaissance' => 'required',
            'adresse' => 'required',
            'email' => 'required|email|unique:administratifs',
            'login' => 'required|unique:administratifs',
            'motPasse' => 'required',
        ]);

        $administratif = new Administratif();
        $administratif->nom = $request->input('nom');
        $administratif->dateNaissance = $request->input('dateNaissance');
        $administratif->adresse = $request->input('adresse');
        $administratif->email = $request->input('email');
        $administratif->login = $request->input('login');
        $administratif->motPasse = $request->input('motPasse');
        $administratif->save();

        return redirect()->route('webmaster')->with('success','L\'administratif a bien été ajouté dans la BDD de l\'application !');
    }
}
