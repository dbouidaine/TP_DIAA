<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EtudiantUpdateRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->etudiant;
        return [
            'nom' => 'required|unique:etudiants,nom' . $id,
            'dateNaissance' => 'required' . $id,
            'adresse' => 'required' . $id,
            'email' => 'required|email|unique:etudiants,email' . $id,
            'login' => 'required|unique:etudiants' . $id,
            'motPasse' => 'required' . $id,
            'matricule' => 'required|unique:etudiants' . $id,
            'nbAbsences' => 'required' . $id,
            'groupe' => 'required' . $id,
            'moyennes' => 'required' . $id,
        ];
    }

}