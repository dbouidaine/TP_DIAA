<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Http\Requests\EtudiantRechercheRequest;
use App\Http\Requests\EtudiantCreateRequest;
use App\Http\Requests\EtudiantUpdateRequest;

use App\Repositories\EtudiantRepository;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    protected $etudiantRepository;

    public function __construct(EtudiantRepository $etudiantRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
    }

    public function show($id)
    {
        $etudiant = $this->etudiantRepository->getById($id);

        return view('show',  compact('etudiant'));
    }

    public function destroy($id)
    {
        $this->etudiantRepository->destroy($id);
        return redirect('etudiants');
    }

    public function getForm()
    {
        return view('Recherche');
    }

    public function postForm(EtudiantRechercheRequest $request)
    {

        $etudiants = Etudiant::where('matricule', $request->input('matricule'))->get();
        $etudiant = $etudiants[0];

        return view('show',  compact('etudiant'));
    }
    public function getEtudiants()
    {
      $etudiants=Etudiant::all();
      return view('admin',['etudiants'=>$etudiants]);
    }
}
