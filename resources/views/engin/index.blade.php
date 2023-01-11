
@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="landing mb-5">
            <div>
                {{-- <h1 class="navbar-brand text-center" style="font-size: 5rem">
                    <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                </h1> --}}
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <h1 class="navbar-brand text-center" style="font-size: 5rem">
                    <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                </h1>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="card">
                            <div class="card-header text-dark">
                                Ajouter Engin Flottant (Périmètre)
                            </div>
                            <div class="card-body">
                                <form action="{{ url('add-engin') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 mb-1 p-1">Engin Flottant (Périmètre)</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nomengin" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                        </div>
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
                    <div class="col-lg-6 mb-3">
                        <div class="card">
                            <div class="card-header text-dark">
                                Ajouter Sous-Périmètre
                            </div>
                            <div class="card-body">
                                <form action="{{ url('add-chambre') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 mb-1 p-1">Sous-Périmètre</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nomchambre" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 mb-1 p-1">Engin Flottant (Périmètre)</label>
                                        <select name="id_engin" class="form-control rounded-pill text-white">
                                            @foreach ($engins as $engin)
                                                <option value="{{ $engin->id_engin }}"> {{ $engin->nomengin }} </option>
                                            @endforeach
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
                <div class="card">
                    <div class="card-header text-dark">
                        Sous-Périmètres des Engins Flottants
                    </div>
                    <div class="card-body" style="background-color: var(--dark-color)">
                        <table id="example" class="table" style="width:100%;color: #fff !important">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="max-width: 100px">Engin Flottant </th>
                                    <th style="max-width: 16px">#</th>
                                    <th>Les Sous-Périmètres</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($engins as $engin)
                                    <tr style="color: #fff !important">
                                        <td>{{ $engin->id_engin }}</td>
                                        <td>{{ $engin->nomengin }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-lg-6 mt-1">
                                                    <form method="POST" action="{{url('delete-engin/'.$engin->id_engin)}}">
                                                        @csrf
                                                        <button id="icon-btn" class="show_confirm btn btn-secondary" title="Supprimer Engin Flottant" type="submit">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-6 mt-1">
                                                    <button type="button" id="icon-btn" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit{{ $engin->id_engin }}" title="Modifier Sous Périmètre">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                    <div class="modal fade" id="edit{{ $engin->id_engin }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header text-dark">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Engin Flottant</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ url('edit-engin/'.$engin->id_engin) }}" method="POST" class="form-horizontal form-material">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group mb-4">
                                                                            <label class="col-md-12 mb-1 p-1">Engin Flottant</label>
                                                                            <div class="col-md-12">
                                                                                <input type="text" name="nomengin" value="{{ $engin->nomengin }}" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mb-4">
                                                                            <div class="col-sm-12">
                                                                                <button name="submit" type="submit" class="btn rounded-pill main-btn">
                                                                                    Enregistrer
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
                                        </td>
                                        <td>
                                            @foreach ($chambres as $chambre)
                                                @if($chambre->id_engin == $engin->id_engin)
                                                    <ul>
                                                        <li style="display: flex; justify-content: space-between">
                                                           <span style="flex: 50%"> {{ $chambre->nomchambre }}</span>
                                                           <div class="row">
                                                                <div class="col-lg-6 mt-1">
                                                                    <form method="POST" action="{{url('delete-chambre/'.$chambre->id_chambre)}}">
                                                                        @csrf
                                                                        <button id="icon-btn" class="show_confirm btn btn-secondary" title="Supprimer Sous Périmètre" type="submit">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-lg-6 mt-1">
                                                                    <button type="button" id="icon-btn" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editchambre{{ $chambre->id_chambre }}" title="Modifier Sous Périmètre">
                                                                        <i class="far fa-edit"></i>
                                                                    </button>
                                                                    <div class="modal fade" id="editchambre{{ $chambre->id_chambre }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header text-dark">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Sous Périmètre</h5>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ url('edit-chambre/'.$chambre->id_chambre) }}" method="POST" class="form-horizontal form-material">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <div class="form-group mb-4">
                                                                                            <label class="col-md-12 mb-1 p-1">Sous Périmètre</label>
                                                                                            <div class="col-md-12">
                                                                                                <input type="text" name="nomchambre" value="{{ $chambre->nomchambre }}" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group mb-4">
                                                                                            <div class="col-sm-12">
                                                                                                <button name="submit" type="submit" class="btn rounded-pill main-btn">
                                                                                                    Enregistrer
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
                                                        </li>
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

