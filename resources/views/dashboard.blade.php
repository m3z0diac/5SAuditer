@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing">
            <div class="text-light">
                <h1 class="navbar-brand text-center" style="font-size: 5rem">
                    <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                </h1>
                <p class="fs-6 text-white-50 mb-5 text-center">Bienvenue sur l'application des audits 5S</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-dark">Lancer Audit</div>
                            <div class="card-body">
                                <form action="{{ url('start-audit') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label text-md-end">Auditeur(s)</label>
                                        <div class="col-md-5 me-0">
                                            <select name="id_auditeur" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                @foreach ($auditeurs as $auditeur)
                                                    <option class="text-dark" value="{{$auditeur->id_auditeur}}">{{ $auditeur->prenom }} {{ $auditeur->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="btn rounded-pill main-btn" data-bs-toggle="modal" data-bs-target="#addauditer" title="Ajouter un Auditeur">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label text-md-end">Engin Flottant</label>
                                        <div class="col-md-6 ms-0">
                                            <select name="id_engin" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                @foreach ($engins as $engin)
                                                    <option class="text-dark" value="{{$engin->id_engin}}">{{ $engin->nomengin }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn rounded-pill main-btn">Lancer</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal fade" id="addauditer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-dark">
                                                <h5 class="modal-title" id="exampleModalLabel">Ajouter Auditeur</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('add-auditeur') }}" method="POST" class="form-horizontal form-material">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 mb-1 p-1">Prénom</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="prenom" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 mb-1 p-1">Nom</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="nom" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 mb-1 p-1">Auditeur Interne ou Externe</label>
                                                        <select name="source" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                            <option class="text-dark" value="Interne">Interne</option>
                                                            <option class="text-dark selectChambre" value="Externe">Externe</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <div class="col-sm-12">
                                                            <button name="submit" type="submit" class="btn rounded-pill main-btn">
                                                                Ajouter
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
