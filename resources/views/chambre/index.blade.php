@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing d-flex justify-content-center align-items-center">
            <div class="text-center text-light">
                <h1 class="navbar-brand" style="font-size: 5rem">
                    <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                </h1>
                <form action="{{ url('start') }}" method="POST">
                    @csrf
                    <input type="text" name="id_audit" value="{{ $audit->id_audit }}" hidden>
                    <label class="label-control">Selectionner le Chambre</label>
                    <select class="form-control rounded-pill text-white mb-3" style="padding: 0.5rem 1rem; background: none !important" id="selectChambre" name="id_chambre">
                        @foreach ($chambres as $chambre)
                            <option class="text-dark selectChambre" value="{{$chambre->id_chambre}}">{{ $chambre->nomchambre }}</option>
                        @endforeach
                    </select>
                    <button type="submit" id="lancer" class="btn rounded-pill main-btn">Suivant</button>
                </form>
                <form action="{{ url('stop') }}" method="POST">
                    @csrf
                    <input type="text" name="id_audit" value="{{ $audit->id_audit }}" hidden>
                    <button type="submit" id="stopaudit" class="btn rounded-pill main-btn mt-4" style="display: none">Fin Audit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var options = document.getElementsByClassName("selectChambre");
        if(options.length == 0)
        {
            document.getElementById("lancer").disabled = true;
            document.getElementById("stopaudit").style.display = "inline";
        }
    </script>
@endsection
