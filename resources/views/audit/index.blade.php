
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="landing mb-5">
            <div>
                @if (session('message'))
                    <div class="card">
                        <div class="card-header">
                            <h4>Résultat</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 d-flex align-items-center">
                                    <p style="font-weight: bold" class="ps-5">
                                        <span id='parag'>

                                        </span>
                                        <?php
                                            $flag = strstr(session('message'), "-", false );
                                        ?>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 p-3 ps-5">
                                    <img style="max-width: 100px" src="{{ asset('images/flag'.$flag.'.png')  }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <h1 class="navbar-brand text-center" style="font-size: 5rem">
                    <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
                </h1>
                <div class="card">
                    <div class="card-header text-dark">
                        <h4>Liste des Audits</h4>
                    </div>
                    <div class="card-body" style="background-color: var(--dark-color)">
                        <table id="example" class="table" style="width:100%;color: var(--white-color) !important; overflow: auto">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Heure Début</th>
                                    <th>Heure Fin</th>
                                    <th>Oui</th>
                                    <th>Non</th>
                                    <th>Engin Flottant</th>
                                    <th>Drapeau 5S</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($audits as $audit)
                                    <tr style="color: var(--white-color) !important">
                                        <td>{{ $audit->date_audit   }}  </td>
                                        <td>{{ $audit->heure_debut  }}  </td>
                                        <td>{{ $audit->heure_fin    }}  </td>
                                        <td class="text-success">{{ $audit->nbr_yes         }}  </td>
                                        <td class="text-danger">{{ $audit->nbr_no       }}  </td>
                                        <td>
                                        @foreach ($engins as $engin)
                                            @if ($engin->id_engin == $audit->id_engin)
                                                {{ $engin->nomengin }}
                                            @endif
                                        @endforeach
                                        </td>
                                        <td>
                                        @if (intval($audit->nbr_yes) > intval($audit->nbr_no))
                                            <i class="fas fa-flag" style="color: green"></i>
                                        @endif
                                        @if (intval($audit->nbr_yes) < intval($audit->nbr_no))
                                            <i class="fas fa-flag" style="color: red"></i>
                                        @endif
                                        @if (intval($audit->nbr_yes) == intval($audit->nbr_no))
                                            <i class="fas fa-flag" style="color: orange"></i>
                                        @endif
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
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=LQbLAW4X"></script>
    <script>
        function typeText(element, text) {
            let i = 0;
            const interval = setInterval(() => {
            element.textContent += text[i];
            i++;
            if (i >= text.length) {
                clearInterval(interval);
            }
            }, 50);
        }
        function speakResult(text) {
            responsiveVoice.speak(text, "French Female",{rate : 1});;
        }
        speakResult("<?php echo strstr(session('message'), "-", true ) ?>")
        typeText(document.getElementById("parag"), "<?php echo strstr(session('message'), "-", true ) ?>")
    </script>
@endsection

