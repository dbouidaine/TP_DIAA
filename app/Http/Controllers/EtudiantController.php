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

    protected $nbrPerPage = 5;

    public function __construct(EtudiantRepository $etudiantRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
    }

    public function index()
    {
        $etudiants = $this->etudiantRepository->getPaginate($this->nbrPerPage);
        $links = $etudiants->render();

        return view('index1', compact('etudiants', 'links'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(EtudiantCreateRequest $request)
    {
        $etudiant = $this->etudiantRepository->store($request->all());

        return redirect('etudiant')->withOk("L'utilisateur " . $etudiant->name . " a été créé.");
    }

    public function show($id)
    {
        $etudiant = $this->etudiantRepository->getById($id);

        return view('show',  compact('etudiant'));
    }

    public function edit($id)
    {
        $etudiant = $this->etudiantRepository->getById($id);

        return view('edit',  compact('etudiant'));
    }

    public function update(EtudiantUpdateRequest $request, $id)
    {
        $this->etudiantRepository->update($id, $request->all());

        return redirect('etudiant')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->etudiantRepository->destroy($id);

        return back();
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
        //return response()->json(['data'=>$etudiant],200);
    }
    public function getEtudiants()
    {
      $etudiants=Etudiant::all();
      return view('admin',['etudiants'=>$etudiants]);
    }
}
