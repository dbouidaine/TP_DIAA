<?php

namespace App\Repositories;

use App\Etudiant;

class EtudiantRepository
{

    protected $etudiant;

    public function __construct(Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;
    }

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

    public function getPaginate($n)
    {
        return $this->etudiant->paginate($n);
    }

    public function store(Array $inputs)
    {
        $etudiant = new $this->etudiant;
        $etudiant->motPasse = bcrypt($inputs['motPasse']);

        $this->save($etudiant, $inputs);

        return $etudiant;
    }

    public function getById($id)
    {
        return $this->etudiant->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}