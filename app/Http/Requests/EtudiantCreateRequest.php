<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EtudiantCreateRequest extends Request
{

    public function authorize()
    {
        return true;
    }

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