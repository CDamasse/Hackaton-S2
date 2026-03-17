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
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->creativity / 8 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->creativity }}" aria-valuemin="0"
                                 aria-valuemax="8"></div>
                        </div>
                        <div>Autonomie</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->autonomy / 4 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->autonomy }}"
                                 aria-valuemin="0" aria-valuemax="4"></div>
                        </div>
                        <div>Rigueur</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->rigor / 4 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->rigor }}"
                                 aria-valuemin="0" aria-valuemax="4"></div>
                        </div>
                        <div>Travail de groupe</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->teamwork / 8 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->teamwork }}"
                                 aria-valuemin="0" aria-valuemax="8"></div>
                        </div>
                        <div>Méthode d'évaluation</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->evaluation_method / 8 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->evaluation_method }}"
                                 aria-valuemin="0" aria-valuemax="8"></div>
                        </div>
                        <div>Digital</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->digital / 8 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->digital }}"
                                 aria-valuemin="0" aria-valuemax="8"></div>
                        </div>
                        <div>Science</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->science / 8 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->science }}"
                                 aria-valuemin="0" aria-valuemax="8"></div>
                        </div>
                        <div>Littérature</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->literature / 4 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->literature }}"
                                 aria-valuemin="0" aria-valuemax="4"></div>
                        </div>
                        <div>Langue étrangère</div>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: {{ Auth::User()->formresult->foreign_lang / 8 * 100 }}%"
                                 aria-valuenow="{{ Auth::User()->formresult->foreign_lang }}"
                                 aria-valuemin="0" aria-valuemax="8"></div>
                        </div>

                        <div class="row justify-content-center">
                            <h1>Profils compatibles</h1>
                        </div>
                        <div class="row">
                            <ul class="list-group list-group-flush col-md-12">
                                @foreach(Auth::User()->max() as $user)
                                    @if($user->user_id != Auth::User()->id)
                                        <li class="list-group-item">{{ $user->user_name }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
