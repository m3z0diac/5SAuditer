
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
                <h1 class="navbar-brand text-center" style="font-size: 5rem">
                    <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                </h1>
                <div class="row">
                    <div class="col-lg-5 mb-3">
                        <div class="card">
                            <div class="card-header text-dark">
                                Ajouter Plan d'audit
                            </div>
                            <div class="card-body">
                                <form action="{{ url('add-plan') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <label class="col-md-12 mb-1 p-1">Année</label>
                                            <select name="year_plan" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                @for ($i = 2022 ; $i < 2025; $i++)
                                                    <option class="text-dark" value="{{$i}}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="col-md-12 mb-1 p-1">Mois</label>
                                            <select name="month_plan" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                @foreach ($months as $month)
                                                    <option class="text-dark" value="{{$month}}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 mb-1 p-1">Nombre d'audits</label>
                                        <div class="col-md-12">
                                            <input type="number" name="total_plan" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 mb-1 p-1">Auditeur(s)</label>
                                        <select name="id_auditeur" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                            @foreach ($auditeurs as $auditeur)
                                                <option class="text-dark" value="{{$auditeur->id_auditeur}}">{{ $auditeur->prenom }} {{ $auditeur->nom }}</option>
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
                    <div class="col-lg-7 mb-3">
                        <div class="card">
                            <div class="card-header text-dark">
                                Listes des Plans d'audits
                            </div>
                            <div class="card-body" style="background-color: var(--dark-color)">
                                <table id="example" class="table" style="width:100%;color: #fff !important">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Auditeur(s)</th>
                                            <th>Année</th>
                                            <th>Mois</th>
                                            <th>Nombre d'Audits</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($planning as $plan)
                                            <tr style="color: #fff !important">
                                                <td>{{ $plan->id_plan }}</td>
                                                <td>
                                                    @foreach ($auditeurs as $auditeur)
                                                        @if($plan->id_auditeur == $auditeur->id_auditeur)
                                                            {{ $auditeur->prenom }} {{ $auditeur->nom }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{ $plan->year_plan }}</td>
                                                <td>{{ $plan->month_plan }}</td>
                                                <td>{{ $plan->total_plan }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6 mt-1">
                                                            <form method="POST" action="{{url('delete-plan/'.$plan->id_plan)}}">
                                                                @csrf
                                                                <button id="icon-btn" class="show_confirm btn btn-secondary" title="Supprimer Plane d'audit" type="submit">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6 mt-1">
                                                            <button type="button" id="icon-btn" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit{{ $plan->id_plan }}" title="Modifier Sous Périmètre">
                                                                <i class="far fa-edit"></i>
                                                            </button>
                                                            <div class="modal fade" id="edit{{ $plan->id_plan}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-dark">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Modifier Plans d'audit</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="{{ url('edit-plan/'.$plan->id_plan) }}" method="POST" class="form-horizontal form-material">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 mb-4">
                                                                                        <label class="col-md-12 mb-1 p-1">Année</label>
                                                                                        <select name="year_plan" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                                                            @for ($i = 2022 ; $i < 2030; $i++)
                                                                                                <option class="text-dark" value="{{$i}}" {{ $i == $plan->year_plan ? 'selected':''}}>{{ $i }}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-6 mb-4">
                                                                                        <label class="col-md-12 mb-1 p-1">Mois</label>
                                                                                        <select name="month_plan" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                                                            @foreach ($months as $month)
                                                                                                <option class="text-dark" value="{{$month}}" {{ $month == $plan->month_plan ? 'selected':'' }}>{{ $month }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                    <label class="col-md-12 mb-1 p-1">Nombre d'audits</label>
                                                                                    <div class="col-md-12">
                                                                                        <input type="number" name="total_plan" value="{{ $plan->total_plan }}" class="form-control rounded-pill text-white" style="padding: 0.5rem 1rem; background: none !important">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                    <label class="col-md-12 mb-1 p-1">Auditeur</label>
                                                                                    <select name="id_auditeur" class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important">
                                                                                        @foreach ($auditeurs as $auditeur)
                                                                                            <option class="text-dark" value="{{$auditeur->id_auditeur}}" {{ $auditeur->id_auditeur == $plan->id_auditeur ? 'selected':'' }}>{{ $auditeur->prenom }} {{ $auditeur->nom }}</option>
                                                                                        @endforeach
                                                                                    </select>
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

