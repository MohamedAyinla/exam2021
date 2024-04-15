@extends('layouts.base')

@section('title', 'Liste des clusters')

@section('content')
    <div>
        <h1>Liste des Clusters</h1>
    </div>

    <div class="space-y-5">
        <div class="flex justify-end">
            <a href="{{ route('cluster.create') }}" class="btn btn-primary">Ajouter un cluster</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Filiere</th>
                    <th scope="col">Departement</th>
                    <th scope="col">Cummune</th>
                    <th scope="col">Arrondissement</th>
                    <th scope="col">Village</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clusters as $cluster)
                    <tr>
                        <td>{{ $cluster->nom }}</td>
                        <td>{{ $cluster->filiere->nom }}</td>
                        <td>{{ $cluster->village->arrondissement->commune->departement->nom }}</td>
                        <td>{{ $cluster->village->arrondissement->commune->nom }}</td>
                        <td>{{ $cluster->village->arrondissement->nom }}</td>
                        <td>{{ $cluster->village->nom }}</td>
                    @empty
                    <tr>
                        <th colspan="5" class="text-center">Aucun cluster trouvé</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
