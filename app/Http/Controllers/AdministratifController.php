<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Administratif;
use App\Http\Requests\AdministratifRequest;

class AdministratifController extends Controller
{
    public function getForm()
    {
        //return view('administratif');
    }

    public function postForm(AdministratifRequest $request)
    { 
        
        $administratif = new Administratif();
        $administratif->nom = $request->input('nom');
        $administratif->dateNaissance = $request->input('dateNaissance');
        $administratif->adresse = $request->input('adresse');
        $administratif->email = $request->input('email');
        $administratif->login = $request->input('login');
        $administratif->motPasse = $request->input('motPasse');
        $administratif->save();

        return response()->json(['result'=>'success'],200);
    }
}
