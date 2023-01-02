@extends('layouts.master')

@section('content')
    <div class="container-lg pt-3" id="audit">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form action="{{ url('store-audit') }}" method="POST">
                    @csrf
                    <input type="text" name="id_engin" value="{{ $engin->id_engin }}" hidden>
                    <input type="text" name="id_chambre" value="{{ $chambre->id_chambre }}" hidden>
                    <input type="text" name="id_audit" value="{{ $audit->id_audit }}" hidden>
                    {{-- Eliminer --}}
                    <div class="card mt-4">
                        <div class="card-header text-dark" style="background-color: var(--yellow-color)">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    {{ $engin->nomengin }} <i class="fas fa-arrow-right"></i> {{ $chambre->nomchambre }} <i class="fas fa-arrow-right"></i> Eliminer
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <span  style="font-weight: bold; padding-left: 46px">S1</span>
                                </div>
                                <div class="col-lg-5 col-md-5" dir="rtl" lang="ar">
                                    <span>صنف / تخلص</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">le standard S1 est-il respecté ?</label>
                                    <br>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم احترام المعيار S1 ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Pas d’inutiles ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">غياب الغير النافع؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">L’inutile est-il trié ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم عزل الغير النافع؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Les objets facilement déplaçables ont été mis dans la ZAD ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">الغير في مكان التخلص؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Tous les objets inutiles sont déplacés ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم نقل الغير النافع؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Tout le personnel a participé à l'opération "ELIMINER" ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل الجميع شارك في مرحلة التخلص؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Une décision est prise pour l’inutile ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم اتخاد قرار لأجل التخلص؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Problèmes rencontrés et remarques.</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">المشاكل و الملاحظات</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Organiser --}}
                    <div class="card mt-4">
                        <div class="card-header" style="background-color: var(--red-color)">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    {{ $engin->nomengin }} <i class="fas fa-arrow-right"></i> {{ $chambre->nomchambre }} <i class="fas fa-arrow-right"></i> Organiser
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <span  style="font-weight: bold; padding-left: 46px">S2</span>
                                </div>
                                <div class="col-lg-5 col-md-5" dir="rtl" lang="ar">
                                    <span>التنظيم</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Le standard S2 est-il respecté ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes" value="oui">
                                        <label class="form-check-label" >Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno" value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم احترام المعيار S2 ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Chaque chose est à sa place ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل كل شيء في مكانه ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Chaque place à sa chose ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">لكل مكان حاجته ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Quelque chose manque ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل من خصاص ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Existe-il une liste des choses manquantes ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل لائحة الخصاص متوفرة ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Problèmes rencontrés et remarques</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">المشاكل والملاحظات</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Netoyer --}}
                    <div class="card mt-4">
                        <div class="card-header text-dark" style="background-color: var(--green-color)">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    {{ $engin->nomengin }} <i class="fas fa-arrow-right"></i> {{ $chambre->nomchambre }} <i class="fas fa-arrow-right"></i> Netoyer
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <span  style="font-weight: bold; padding-left: 46px">S3</span>
                                </div>
                                <div class="col-lg-5 col-md-5" dir="rtl" lang="ar">
                                    <span>نظف</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Le standard S3 est-il respecté ? </label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم احترام المعيار S3 ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Le matériel de nettoyage est sur place ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">أدوات التنظيف</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Le sous-périmètre est bien entretenu ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل المكان نظيف ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Tous les endroits isolés (recoins, l’arrière des tableaux...) ont été inspectés ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل التدقيق شامل ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">les déchets dans les zones ou les poubelles prévues ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل النفايات في مكانها ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">L’emplacement du kit de nettoyage est respecté ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل مكان أدوات التنظيف في مكانها ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">les produits de nettoyage sont suffisants ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل مستحضرات التنظيف كافية ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Problèmes rencontrés et remarques.</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">المشاكل والملاحظات</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Standariser --}}
                    <div class="card mt-4">
                        <div class="card-header" style="background-color: var(--gray-color)">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    {{ $engin->nomengin }} <i class="fas fa-arrow-right"></i> {{ $chambre->nomchambre }} <i class="fas fa-arrow-right"></i> Standariser
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <span  style="font-weight: bold; padding-left: 46px">S4</span>
                                </div>
                                <div class="col-lg-5 col-md-5" dir="rtl" lang="ar">
                                    <span>ضع معيار</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Le standard S4 est-il respecté ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم احترام المعيار S4 ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Les standards sont-ils affichés ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم إلصاق و تشهير المعايير ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Les affiches de sensibilisation sont-elles à leurs places ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل ملصقات التحسيس في مكانها ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Les SOP définis sont-ils à leurs places ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل معايير التشغيل في مكانها؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">l’affichage et l’identification visuelle sont-ils en bons états ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل العرض و التعرض البصري في حالة جيدة ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Repérages des endroits dangereux sont-ils en bon état ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل علامات الأماكن الخطرة في حالة جيدة؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Problèmes rencontrés et remarques.</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">المشاكل والملاحظات</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Suivre --}}
                    <div class="card mt-4">
                        <div class="card-header" style="background-color: var(--orange-color)">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    {{ $engin->nomengin }} <i class="fas fa-arrow-right"></i> {{ $chambre->nomchambre }} <i class="fas fa-arrow-right"></i> Suivre
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <span  style="font-weight: bold; padding-left: 46px">S5</span>
                                </div>
                                <div class="col-lg-5 col-md-5" dir="rtl" lang="ar">
                                    <span>تابع</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">le plan d’audit est-il respecté ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم احترام برنامج التدقيق ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">les ateliers de décisions sont-ils organisés ?</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم تنظيم ورشات اتخاذ القرارات ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">le plan d’actions et décisions est bien communiqué ?  </label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">هل تم توصيل برنامج العمل و القرارت بشكل جيد ؟</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row questionrow" id="questionrow">
                                <div class="col-md-5 col-sm-5">
                                    <label class="form-label">Problèmes rencontrés et remarques.</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yes[]" id="checkyes"  value="oui">
                                        <label class="form-check-label">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="no[]" id="checkno"  value="non">
                                        <label class="form-check-label">Non</label>
                                    </div>
                                </div>
                                <div dir="rtl" lang="ar" class="col-md-5 col-sm-5">
                                    <label class="form-label">المشاكل والملاحظات</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Submit --}}

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 col-sm-5">
                            <button id="nextbtn" class="btn rounded-pill main-btn" type="submit" disabled>
                                Suivant
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
