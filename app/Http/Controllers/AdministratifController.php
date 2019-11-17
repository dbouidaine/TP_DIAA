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

    public function postForm(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'adress' => 'required',
            'email' => 'required|email|unique:administratifs',
            'login' => 'required|unique:administratifs',
            'password' => 'required',
        ]); 
       
        $administratif = new Administratif();
        $administratif->nom = $request->input('name');
        $administratif->dateNaissance = $request->input('birthday');
        $administratif->adresse = $request->input('adress');
        $administratif->email = $request->input('email');
        $administratif->login = $request->input('login');
        $administratif->motPasse = $request->input('password');
        $administratif->save();
        
        return redirect()->route('webmaster')->with('success','administratif ajouté avec successes!');
    }
}
