<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EtudiantCreateRequest extends Request
{
    /**
     * Déterminer si l'utilisateur est autorisé à faire cette demande.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Obtener les règles de validation qui s'appliquent à la demande.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|unique:etudiants',
            'dateNaissance' => 'required',
            'adresse' => 'required',
            'email' => 'required|email|unique:etudiants',
            'login' => 'required|unique:etudiants',
            'motPasse' => 'required',
            'matricule' => 'required|unique:etudiants',
            'nbAbsences' => 'required',
            'groupe' => 'required',
            'moyennes' => 'required' ,
        ];
    }

}
