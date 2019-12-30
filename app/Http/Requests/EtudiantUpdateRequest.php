<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EtudiantUpdateRequest extends Request
{

    public function authorize()
    {
        return true;
    }
    /**
     * Obtener les règles de validation qui s'appliquent à la demande.
     * required : necessaire (il faut le saisir).
     * unique: il doit etre unique sinon la création ne fait pas au niveau de la base de donneés.
     * @return array
     */
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
