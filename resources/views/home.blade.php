@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tableau de bord</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <h1>Résultats du questionnaire</h1>
                        </div>
                        <div>Créativité</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-success" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->creativity*10)*2.5}}%"
                                 aria-valuenow="{{ Auth::User()->formresult->creativity }}" aria-valuemin="0"
                                 aria-valuemax="4"></div>
                        </div>
                        <div>Autonomie</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->autonomy*10)*2.5}}%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Rigueur</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-warning" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->rigor*10)*2.5}}%"
                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Travail de groupe</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-danger" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->teamwork*10)*2.5}}%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Méthode d'évalutation</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->evaluation_method*10)*2.5}}%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Digital</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->digital*10)*2.5}}%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Science</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->science*10)*2.5}}%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Littérature</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->literature*10)*2.5}}%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>Langue étrangère</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: {{(Auth::User()->formresult->foreign_lang*10)*2.5}}%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <h1>Profils compatibles</h1>
                    </div>
                    {{ Auth::user()->same_school_users() }}
                </div>
            </div>
        </div>
    </div>
@endsection
