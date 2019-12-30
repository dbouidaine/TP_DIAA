<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Administratif;
use App\Http\Requests\AdministratifRequest;
/*!

 * Affecter des controles sur la fonctionalité qui sert à ajouter un administarttif.
 * Chaque entré est controllé suivant des criteres.

*/

class AdministratifController extends Controller
{
    /**
     * Afficher le formulaire d'ajout un administratif
     */
    public function getForm()
    {
        return view('WebMaster');
    }

    /**
     * Création d'un nouveau objet administratif après le clic sur le bouton Ajouter, et l'insérer dans la BDD
     */
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
