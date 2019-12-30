<?php

namespace App\Repositories;

use App\Etudiant;
/*!
Cette classe à un role tres important,Si on observe le repository créé pour les utilisateurs on se rend compte qu'il est très ciblé sur le modèle concerné et si on a une autre ressource dans l'application il est fort probable qu'on va bidouiller avec du copier-coller, ce qui est toujours source de répétition de code et d'erreurs.
*/

class EtudiantRepository
{

    protected $etudiant;
    /**
    *injection d'un gestionnaire de données dans le contrôleur en plus des deux classes de validation
	* Ce gestionnaire est chargé de toutes les actions au niveau de la table des utilisateurs.
	*@param $etudiant
    */

    public function __construct(Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;
    }
    /**
*enregistrer dans la table avec la méthode privée  save
*@param $etudiant, array
    */

    private function save(Etudiant $etudiant, Array $inputs)
    {
        $etudiant->nom = $inputs['nom'];
        $etudiant->dateNaissance = $inputs['dateNaissance'];
        $etudiant->adresse = $inputs['adresse'];
        $etudiant->email = $inputs['email'];
        $etudiant->login = $inputs['login'];
        $etudiant->motPasse = $inputs['motPasse'];
        $etudiant->matricule = $inputs['matricule'];
        $etudiant->nbAbsences = $inputs['nbAbsences'];
        $etudiant->groupe = $inputs['groupe'];
        $etudiant->moyennes = $inputs['moyennes'];

        $etudiant->save();
    }
/**
*Cette méthode est appelée depuis la méthode  index du contrôleur
*@param int 
*/
    public function getPaginate($n)
    {
        return $this->etudiant->paginate($n);
    }
    /*
	* Par sécurité le mot de passe entré est ici codé avec l'helper  bcrypt. Ainsi il ne sera pas inscrit en clair dans la table mais sous forme codée.
	* On crée un nouvel objet etudiant. On renseigne l'attribut  motPasse et on enregistre dans la table avec la méthode privée  save
	
    */

    public function store(Array $inputs)
    {
        $etudiant = new $this->etudiant;
        $etudiant->motPasse = bcrypt($inputs['motPasse']);

        $this->save($etudiant, $inputs);

        return $etudiant;
    }
    /**
* Cette méthode contient la méthode  findOrFail qui essaie de récupérer dans la table l'enregistrement dont on transmet l'id. * Si elle n'y parvient pas elle génère une erreur d'exécution.
*@param int
    */

    public function getById($id)
    {
        return $this->etudiant->findOrFail($id);
    }
    /**
* Cette méthode est destinée à mettre à jour l'enregistrement dans la table à partir des données transmises comme paramètres
*@param int , array
    */

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }
    /**
	*Suppression d'un enregistrement avec la méthode delete du modèle. On renvoie ainsi la dernière requête
	*@param int
	*@return $request
    */

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}