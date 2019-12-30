<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EtudiantRechercheRequest extends Request
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
     * required : necessaire (il faut le saisir).
     * unique: il doit etre unique sinon la création ne fait pas au niveau de la base de donneés.
     * @return array
     */
    public function rules()
    {
        return [
            'matricule' => 'required|exists:etudiants',
        ];
    }
}
