<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Http\Requests\EtudiantRechercheRequest;
use App\Http\Requests\EtudiantCreateRequest;
use App\Http\Requests\EtudiantUpdateRequest;

use App\Repositories\EtudiantRepository;

use Illuminate\Http\Request;
/*!

 * Affecter des controles sur les champs d'un étudiant.


*/

class EtudiantController extends Controller
{

    protected $etudiantRepository;
/**
 * injection d'un gestionnaire de données dans le contrôleur en plus des deux classes de validation.
 * Ce gestionnaire est chargé de toutes les actions au niveau de la table des utilisateurs.
 */
    public function __construct(EtudiantRepository $etudiantRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
    }

/**
* Cette méthode répond à l'url (avec le verbe get), par exemple: "http://monsite.fr/etudiant/n" Où n est l'id de l'étudiant *qu'on veut afficher.

* Une fois que l'enregistrement est ainsi récupéré dans la table on le retourne sous la forme d'un tableau avec comme clé "etudiant". Ce tableau sera utilisé par la vue.
*@param int
* @return array
*/
    public function show($id)
    {
        $etudiant = $this->etudiantRepository->getById($id);

        return view('show',  compact('etudiant'));
    }
/**
*Suppression d'un enregistrement avec la méthode delete du modele.Cette méthode répond à l'url (avec le verbe delete) :
*par exemple "http://monsite.fr/etudiant/n" avec n est l'identifiant de l'étudiant à supprimer.
* On renvoie ainsi la dernière requête.
*@param int
*@return request

*/
    public function destroy($id)
    {
        $this->etudiantRepository->destroy($id);
        return redirect('etudiants');
    }
    /**
	cette méthode fait appel à la page de recherche d'un étudiant

    */
    

    public function getForm()
    {
        return view('Recherche');
    }

    /**
	* aprés la saisie du matricule de l'étudiant qu'on désire voir ses informations, la fonction cherche dans la base de *donnée le matricule et affiche les informations correspondante à ce dernier.
	*@param $request
    */

    public function postForm(EtudiantRechercheRequest $request)
    {

        $etudiants = Etudiant::where('matricule', $request->input('matricule'))->get();
        $etudiant = $etudiants[0];

        return view('show',  compact('etudiant'));
    }

    /**
	*  cette méthode permet d'afficher la liste de tous les étudiants de la base de données.
    */ 
    public function getEtudiants()
    {
      $etudiants=Etudiant::all();
      return view('admin',['etudiants'=>$etudiants]);
    }
}
