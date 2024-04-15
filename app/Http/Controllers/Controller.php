<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClusterFormRequest;
use App\Models\Arrondissement;
use App\Models\Cluster;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Filiere;
use App\Models\Village;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $clusters = Cluster::with('filiere', 'village')->orderBy('nom', 'asc')->get();

        return view("list", [
            "clusters" => $clusters
        ]);
    }

    public function create(): View
    {
        $cluster = new Cluster();
        return view("create", [
            "cluster" => $cluster,
            'filieres' => Filiere::select('idFiliere', 'nom')->get(),
            'departements' => Departement::select('idDepartement', 'nom')->get(),
            'communes' => Commune::select('idCommune', 'nom')->get(),
            'arrondissements' => Arrondissement::select('idArrondissement', 'nom')->get(),
            'villages' => Village::select('idVillage', 'nom')->get(),
        ]);
    }

    public function store(ClusterFormRequest $request)
    {
        Cluster::create($request->validated());

        return redirect()->route('cluster.index')->with('success', 'Ajout effectué');
    }

    public function getCommunes($idDepartement)
    {
        $communes = Commune::where('idDepartement', $idDepartement)->get();
        return response()->json($communes);
    }

    public function getArrondissements($idCommune)
    {
        $arrondissements = Arrondissement::where('idCommune', $idCommune)->get();
        return response()->json($arrondissements);
    }

    public function getVillages($idArrondissement)
    {
        $villages = Village::where('idArrondissement', $idArrondissement)->get();
        return response()->json($villages);
    }
}
