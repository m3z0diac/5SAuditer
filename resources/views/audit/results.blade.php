@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing d-flex justify-content-center align-items-center">
            <div class="text-center text-light">
                <?php
                    if ($yes > $no) {?>
                        <div style="padding: 5%;background-color: var(--verygreen-color);border-radius: 10px"">
                            <h2 class="text-dark">
                                {{ $chambre->nomchambre }}
                            </h2>
                        </div>
                <?php
                    }
                    elseif ($yes < $no) {?>
                        <div style="padding: 5%;background-color: var(--red-color);border-radius: 10px">
                            <h2 class="text-white">
                                {{ $chambre->nomchambre }}
                            </h2>
                        </div>
                <?php
                    }
                    elseif ($yes == $no) {?>
                        <div style="padding: 5%;background-color: var(--orange-color);border-radius: 10px"">
                            <h2 class="text-white">
                                {{ $chambre->nomchambre }}
                            </h2>
                        </div>
                <?php
                    }
                ?>
                <form action="{{ url('start-audit') }}" method="POST">
                    @csrf
                    <input type="text" name="id_engin" value="{{ $engin->id_engin }}" hidden>
                    <input type="text" name="id_audit" value="{{ $audit->id_audit }}" hidden>
                    <button type="submit" class="btn rounded-pill main-btn mt-5">Suivant</button>
                </form>
            </div>
        </div>
    </div>
@endsection
