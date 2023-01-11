
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing mb-5">
            <h1 class="navbar-brand text-center" style="font-size: 5rem">
                <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
            </h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('analyser') }}" method="POST">
                                @csrf
                                <label class="col-md-12 mb-1 p-1">Engin Flottant (Périmètre)</label>
                                <select name="id_engin" class="form-control rounded-pill text-white">
                                    @foreach ($engins as $engin)
                                        <option value="{{ $engin->id_engin }}" {{isset($selectedEngin) && $engin->id_engin == $selectedEngin->id_engin ? 'selected':''}}> {{ $engin->nomengin }} </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn rounded-pill main-btn mt-4">Analyser</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        {{-- <div class="card-header text-dark">
                            <h5>{{ $chart1->options['chart_title'] }}</h5>
                        </div> --}}
                        <div class="card-body">
                            {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('javascript')
        <script src="{{ asset('js/Chart.min.js') }}"></script>
        {!! $chart1->renderJs() !!}
    @endsection
@endsection

