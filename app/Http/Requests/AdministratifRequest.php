<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*!
*Pour obtenir une instance de la requête HTTP actuelle via une injection de dépendance, vous devez indiquer la classe Illuminate \
 * Http \ Request sur le constructeur ou la méthode de votre contrôleur. L'instance de requête en cours sera automatiquement
 * injectée par le conteneur de service.
*/
class AdministratifRequest extends Request
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
     * Pour le nom la taille maximal est 20 caracteres
     * required : necessaire (il faut le saisir).
     * unique: il doit etre unique sinon la création ne fait pas au niveau de la base de donneés.
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:20',
            'birthday' => 'required',
            'adress' => 'required',
            'email' => 'required|email|unique:administratifs',
            'login' => 'required|unique:administratifs',
            'password' => 'required',
        ];
    }
}
