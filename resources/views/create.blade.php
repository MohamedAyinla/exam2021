@extends('layouts.base')

@section('title', 'Créer un cluster')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-5">Création d'un cluster</h1>

            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 form-group">
                    <label for="filiere" class="form-label">Filière</label>
                    <select class="form-select" id="filiere" name="idFiliere">
                        <option value="">Sélectionner une filiere</option>
                        @forelse ($filieres as $filiere)
                            <option value="{{ $filiere->idFiliere }}">
                                {{ $filiere->nom }}
                            </option>
                        @empty
                            <option value="" disabled>Aucune filiere disponible</option>
                        @endforelse
                    </select>
                    @error('idFiliere')
                        <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label for="departement" class="form-label">Département</label>
                    <select class="form-select" id="departement" name="idDepartement">
                        <option value="">Sélectionner un departement</option>
                        @forelse ($departements as $departement)
                            <option value="{{ $departement->idDepartement }}">
                                {{ $departement->nom }}
                            </option>
                        @empty
                            <option value="" disabled>Aucun departement disponible</option>
                        @endforelse
                    </select>
                    @error('idDepartement')
                        <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label for="commune" class="form-label">Commune</label>
                    <select class="form-select" id="commune" name="idCommune">
                        <option value="">Sélectionner une commune</option>
                        @forelse ($communes as $commune)
                            <option value="{{ $commune->idCommune }}">
                                {{ $commune->nom }}
                            </option>
                        @empty
                            <option value="" disabled>Aucune commune disponible</option>
                        @endforelse
                    </select>
                    @error('idCommune')
                        <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label for="arrondissement" class="form-label">Arrondissement</label>
                    <select class="form-select" id="arrondissement" name="idArrondissement">
                        <option value="">Sélectionner un arrondissement</option>
                        @forelse ($arrondissements as $arrondissement)
                            <option value="{{ $arrondissement->idArrondissement }}">
                                {{ $arrondissement->nom }}
                            </option>
                        @empty
                            <option value="" disabled>Aucun arrondissement disponible</option>
                        @endforelse
                    </select>
                    @error('idArrondissement')
                        <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label for="village" class="form-label">Village</label>
                    <select class="form-select" id="village" name="idVillage">
                        <option value="">Sélectionner un village</option>
                        @forelse ($villages as $village)
                            <option value="{{ $village->idVillage }}">
                                {{ $village->nom }}
                            </option>
                        @empty
                            <option value="" disabled>Aucune village disponible</option>
                        @endforelse
                    </select>
                    @error('idVillage')
                        <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label for="nom" class="form-label">Nom du cluster</label>
                    <input type="text" class="form-control" name="nom" id="nom" />
                    @error('nom')
                        <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">
                    Ajouter
                </button>
            </form>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const departementSelect = document.getElementById('departement');
            const communeSelect = document.getElementById('commune');
            const arrondissementSelect = document.getElementById('arrondissement');
            const villageSelect = document.getElementById('village');

            // Initialiser les éléments de sélection dépendants comme désactivés
            communeSelect.disabled = true;
            arrondissementSelect.disabled = true;
            villageSelect.disabled = true;

            departementSelect.addEventListener('change', function() {
                if (this.value) {
                    communeSelect.disabled = false; // Activer communeSelect
                    fetchCommunes(this.value);
                } else {
                    resetSelects(communeSelect, arrondissementSelect, villageSelect);
                }
            });

            communeSelect.addEventListener('change', function() {
                if (this.value) {
                    arrondissementSelect.disabled = false;
                    fetchArrondissements(this.value);
                } else {
                    resetSelects(arrondissementSelect, villageSelect);
                }
            });

            arrondissementSelect.addEventListener('change', function() {
                if (this.value) {
                    villageSelect.disabled = false;
                    fetchVillages(this.value);
                } else {
                    resetSelects(villageSelect);
                }
            });

            function fetchCommunes(idDepartement) {
                communeSelect.innerHTML = '<option value="">Chargement...</option>';
                fetch(`/communes/${idDepartement}`)
                    .then(response => response.json())
                    .then(data => {
                        communeSelect.innerHTML = '<option value="">Sélectionner une commune</option>';
                        data.forEach(commune => {
                            let option = document.createElement('option');
                            option.value = commune.idCommune;
                            option.text = commune.nom;
                            communeSelect.appendChild(option);
                        });
                    });
            }

            function fetchArrondissements(idCommune) {
                arrondissementSelect.innerHTML = '<option value="">Chargement...</option>';
                fetch(`/arrondissements/${idCommune}`)
                    .then(response => response.json())
                    .then(data => {
                        arrondissementSelect.innerHTML =
                            '<option value="">Sélectionner un arrondissement</option>';
                        data.forEach(arrondissement => {
                            let option = document.createElement('option');
                            option.value = arrondissement.idArrondissement;
                            option.text = arrondissement.nom;
                            arrondissementSelect.appendChild(option);
                        });
                    });
            }

            function fetchVillages(idArrondissement) {
                villageSelect.innerHTML = '<option value="">Chargement...</option>';
                fetch(`/villages/${idArrondissement}`)
                    .then(response => response.json())
                    .then(data => {
                        villageSelect.innerHTML = '<option value="">Sélectionner un village</option>';
                        data.forEach(village => {
                            let option = document.createElement('option');
                            option.value = village.idVillage;
                            option.text = village.nom;
                            villageSelect.appendChild(option);
                        });
                    });
            }

            // Fonction pour réinitialiser et désactiver les éléments de sélection
            function resetSelects(...selects) {
                selects.forEach(select => {
                    select.innerHTML = '<option value="">Sélectionner...</option>';
                    select.disabled = true;
                });
            }
        });
    </script>

@endsection
