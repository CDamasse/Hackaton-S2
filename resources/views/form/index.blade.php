@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Etape 3
                    </div>
                    <div class="card-body">
                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group row">
                                <label for="q1" class="col-md-4 col-form-label text-md-right"> Avez des idées pour
                                    améliorer votre quotidien ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q1" class="form-control" name="q1"
                                            value="{{ old('q1') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormément</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q2" class="col-md-4 col-form-label text-md-right"> Pratiquez-vous une
                                    activitée artistique ? (Musique, peinture, cinéma, cuisine, etc...)</label>

                                <div class="col-md-6">
                                    <select type="text" id="q2" class="form-control" name="q2"
                                            value="{{ old('q2') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Une fois par an</option>
                                        <option value="2">Une fois par mois</option>
                                        <option value="3">Une fois par semaine</option>
                                        <option value="4">Plusieurs fois par semaine</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q3" class="col-md-4 col-form-label text-md-right"> Vous aimez être assisté
                                    pour bien comprendre les consignes d’un exercice avant de le commencer ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q3" class="form-control" name="q3"
                                            value="{{ old('q3') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormement</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q4" class="col-md-4 col-form-label text-md-right"> Dans votre travail vous
                                    êtes quelqu’un de méthodique, régulier et qui tient compte de chaque détail </label>

                                <div class="col-md-6">
                                    <select type="text" id="q4" class="form-control" name="q4"
                                            value="{{ old('q4') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormement</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q5" class="col-md-4 col-form-label text-md-right"> Vous devez présenter un
                                    exposé pour la semaine prochaine et formez donc un groupe avec vos camarades. Quel
                                    est votre degré d’implication ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q5" class="form-control" name="q5"
                                            value="{{ old('q5') }}">
                                        <option value="0">Nul</option>
                                        <option value="1">Faible</option>
                                        <option value="2">Moyen</option>
                                        <option value="3">Impliqué</option>
                                        <option value="4">Leader</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q6" class="col-md-4 col-form-label text-md-right"> Lors d’un travail en
                                    groupe, vous préférez une répartition des tâches et restitution commune plutôt qu’un
                                    travail individuel ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q6" class="form-control" name="q6"
                                            value="{{ old('q6') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormément</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q7" class="col-md-4 col-form-label text-md-right"> A l’approche d’un examen,
                                    vous commencez vos révisions en avance ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q7" class="form-control" name="q7"
                                            value="{{ old('q7') }}">
                                        <option value="0">Non</option>
                                        <option value="1">De temps en temps</option>
                                        <option value="2">Cela depend de la matière</option>
                                        <option value="3">Souvent</option>
                                        <option value="4">Toujours</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q8" class="col-md-4 col-form-label text-md-right"> Êtes-vous à l'aise avec
                                    le système d'évaluation continue ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q8" class="form-control" name="q8"
                                            value="{{ old('q8') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormément</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q9" class="col-md-4 col-form-label text-md-right"> Les sciences de
                                    l’informatique vous intéressent-elles ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q9" class="form-control" name="q9"
                                            value="{{ old('q9') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormément</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q10" class="col-md-4 col-form-label text-md-right"> Les sciences de
                                    l’informatique vous intéressent-elles ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q10" class="form-control" name="q10"
                                            value="{{ old('q10') }}">
                                        <option value="0">Jamais</option>
                                        <option value="1">Au moins une fois par mois</option>
                                        <option value="2">Au moins une fois par semaine</option>
                                        <option value="3">Au moins une fois par jour</option>
                                        <option value="4">Plusieurs fois par jour</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q11" class="col-md-4 col-form-label text-md-right"> Dans votre quotidien,
                                    avez-vous pour habitude de travailler avec rigueur et méthodologie ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q11" class="form-control" name="q11"
                                            value="{{ old('q11') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">De temps en temps</option>
                                        <option value="3">Régulièrement</option>
                                        <option value="4">Tout le temps</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q12" class="col-md-4 col-form-label text-md-right"> Lisez-vous des
                                    revues/articles sur des avancées scientifiques ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q12" class="form-control" name="q12"
                                            value="{{ old('q12') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">De temps en temps</option>
                                        <option value="3">Régulièrement</option>
                                        <option value="4">Tout le temps</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q13" class="col-md-4 col-form-label text-md-right"> Lisez-vous des livres
                                    ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q13" class="form-control" name="q13"
                                            value="{{ old('q13') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">De temps en temps</option>
                                        <option value="3">Régulièrement</option>
                                        <option value="4">Tout le temps</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q14" class="col-md-4 col-form-label text-md-right"> Quel est votre niveau
                                    d'anglais ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q14" class="form-control" name="q14"
                                            value="{{ old('q14') }}">
                                        <option value="0">Where is Bryan ?</option>
                                        <option value="1">Débutant</option>
                                        <option value="2">Scolaire</option>
                                        <option value="3">Courant</option>
                                        <option value="4">Bilingue</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="q15" class="col-md-4 col-form-label text-md-right"> Êtes-vous intéressé par des études dans un pays anglophone ? </label>

                                <div class="col-md-6">
                                    <select type="text" id="q15" class="form-control" name="q15"
                                            value="{{ old('q15') }}">
                                        <option value="0">Pas du tout</option>
                                        <option value="1">Un peu</option>
                                        <option value="2">Plutôt</option>
                                        <option value="3">Beaucoup</option>
                                        <option value="4">Enormément</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-end">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary"> Finaliser le formulaire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
