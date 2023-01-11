<<<<<<< HEAD

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing mb-5">
            <div>
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <h1 class="navbar-brand text-center" style="font-size: 5rem">
                            <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                        </h1>
                    </div>
                    <div class="col-lg-7 mb-3">
                        <div class="card">
                            <div class="card-header text-dark">
                                Listes d'auditeurs
                            </div>
                            <div class="card-body" style="background-color: var(--dark-color)">
                                <table id="example" class="table" style="width:100%;color: #fff !important">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($auditeurs as $auditeur)
                                            <tr style="color: #fff !important">
                                                <td>{{ $auditeur->id_auditeur }}</td>
                                                <td>{{ $auditeur->prenom }}</td>
                                                <td>{{ $auditeur->nom }}</td>
                                                <td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6 mt-1">
                                                            <form method="POST" action="{{url('delete-auditeur/'.$auditeur->id_auditeur)}}">
                                                                @csrf
                                                                <button id="icon-btn" class="show_confirm btn btn-secondary" title="Supprimer Auditeur" type="submit">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
@endsection

=======

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing mb-5">
            <div>
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <h1 class="navbar-brand text-center" style="font-size: 5rem">
                            <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                        </h1>
                    </div>
                    <div class="col-lg-7 mb-3">
                        <div class="card">
                            <div class="card-header text-dark">
                                Listes d'auditeurs
                            </div>
                            <div class="card-body" style="background-color: var(--dark-color)">
                                <table id="example" class="table" style="width:100%;color: #fff !important">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($auditeurs as $auditeur)
                                            <tr style="color: #fff !important">
                                                <td>{{ $auditeur->id_auditeur }}</td>
                                                <td>{{ $auditeur->prenom }}</td>
                                                <td>{{ $auditeur->nom }}</td>
                                                <td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6 mt-1">
                                                            <form method="POST" action="{{url('delete-auditeur/'.$auditeur->id_auditeur)}}">
                                                                @csrf
                                                                <button id="icon-btn" class="show_confirm btn btn-secondary" title="Supprimer Auditeur" type="submit">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
@endsection

>>>>>>> ca4cc0e24d2a81674307302f3314e5aa41f0b207
