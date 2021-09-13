@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection
<?php
    $var = explode("_", $id);
    $profil = $var[0];
    $ressource = $var[1];
 ?>

@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        @csrf
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
            <div class="mdc-card">
              <center><h6 class="card-title" style="color:grey;">Modification des Droits d'Accès </h6></center>
              <br/>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="table-responsive">
                        <table class="mdc-data-table__table" aria-label="Dessert calories">
                            <tbody class="mdc-data-table__content">
                                @foreach ($resultatFinal as $resultat)
                                    @if ($resultat['id'] == $id)
                                    <tr data-row-id="u0" class="mdc-data-table__row">
                                        <td class="mdc-data-table__cell" scope="row" id="u0">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading font-weight-bold">
                                                            {{$resultat['nom']}}
                                                            &nbsp;<i class="fa fa-envelope-o text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mdc-data-table__cell">

                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                        @if ($resultat['lecture'] == 1)
                                                        <input type="checkbox" id="lecture{{$id}}"
                                                        class="mdc-checkbox__native-control" checked/>
                                                        @else
                                                        <input type="checkbox" id="lecture{{$id}}"
                                                        class="mdc-checkbox__native-control"/>
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Lecture</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    @if ($resultat['ecriture'] == 1)
                                                        <input type="checkbox" id="ecriture{{$id}}"
                                                        class="mdc-checkbox__native-control" checked/>
                                                        @else
                                                        <input type="checkbox" id="ecriture{{$id}}"
                                                        class="mdc-checkbox__native-control"/>
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Ecriture</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    @if ($resultat['modification'] == 1)
                                                        <input type="checkbox" id="modification{{$id}}"
                                                        class="mdc-checkbox__native-control" checked />
                                                        @else
                                                        <input type="checkbox" id="modification{{$id}}"
                                                        class="mdc-checkbox__native-control" />
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Modification</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    @if ($resultat['suppression'] == 1)
                                                        <input type="checkbox" id="suppression{{$id}}"
                                                        class="mdc-checkbox__native-control" checked />
                                                        @else
                                                        <input type="checkbox" id="suppression{{$id}}"
                                                        class="mdc-checkbox__native-control" />
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Suppression</label>
                                            </div>

                                            <div class="mdc-form-field" style="margin-left: 50px;">
                                                <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label"><b>{{$resultat['ressource']}}</b></label>
                                            </div>
                                        </td>
                                    </tr>
                                    @else
                                    <tr data-row-id="u0" class="mdc-data-table__row">
                                        <td class="mdc-data-table__cell" scope="row" id="u0">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading font-weight-bold">
                                                            {{$resultat['nom']}}
                                                            &nbsp;<i class="fa fa-envelope-o text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mdc-data-table__cell">

                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                        @if ($resultat['lecture'] == 1)
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" checked disabled />
                                                        @else
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" disabled />
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Lecture</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    @if ($resultat['ecriture'] == 1)
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" checked disabled />
                                                        @else
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" disabled />
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Ecriture</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    @if ($resultat['modification'] == 1)
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" checked disabled />
                                                        @else
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" disabled />
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Modification</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    @if ($resultat['suppression'] == 1)
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" checked disabled />
                                                        @else
                                                        <input type="checkbox" id="basic-disabled-checkbox"
                                                        class="mdc-checkbox__native-control" disabled />
                                                        @endif
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark"
                                                            viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path"
                                                                fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                </div>
                                                <label for="basic-disabled-checkbox"
                                                    id="basic-disabled-checkbox-label">Suppression</label>
                                            </div>
                                            <div class="mdc-form-field" style="margin-left: 50px;">
                                                <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label"><b>{{$resultat['ressource']}}</b></label>
                                            </div>
                                        </td>
                                        <td class="mdc-data-table__cell" scope="row" id="u0">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading font-weight-bold">
                                                            <button
                                                                class="mdc-button mdc-button--raised icon-button filled-button--info">
                                                                <a href="/configuration/utilisateur/editParametrage/{{$resultat['id']}}"
                                                                    style="color:#fff;">
                                                                    <i
                                                                        class="material-icons mdc-button__icon">edit</i>
                                                                </a>
                                                            </button>
                                                            &nbsp;<i class="fa fa-envelope-o text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link"
                                                                style="cursor:pointer;"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif

                                @endforeach
                            </tbody>
                        </table>

                        <div class="mdc-card" style="text-align:right;">
                          <section class="mdc-card__primary">
                            <h6 class="card-title"></h6>
                          </section>
                          <section class="mdc-card__supporting-text">
                            <div class="template-demo">

                              <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                &nbsp; <a href="Config-admin-parametrages.html" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
                              </button>
                                <button class="mdc-button mdc-button--success icon-button" >
                                &nbsp; <a onclick="save_modification({{$profil}}, {{$ressource}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                &nbsp;<span style="color:white;">Enregistrer &nbsp; </span></a>
                                </button>


                              <button class="mdc-button mdc-button--raised icon-button filled-button--light">
                                <i class="material-icons mdc-button__icon">print</i>
                              </button>


                            </div>
                          </section>
                        </div>
                        <div class="alert alert-success" id="idSuccess" style="display: none;">

                        </div>
                        <div class="alert alert-warning" id="idError" style="display: none;">
                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>

          </div>
      </div>
    </main>
  </div>
@endsection
<script type="text/javascript">
    function save_modification(profil, ressource){
        var lecture, ecriture, modification, suppression, id_profil, id_ressource, div;
        id_profil = profil;
        id_ressource = ressource;
        console.log(id_profil+"  "+id_ressource);
        if ($('#lecture'+profil+"_"+ressource).is(":checked"))
            lecture = 1;
        else
            lecture = 0;

        if ($('#ecriture'+profil+"_"+ressource).is(":checked"))
            ecriture = 1;
        else
            ecriture = 0;

        if ($('#modification'+profil+"_"+ressource).is(":checked"))
            modification = 1;
        else
            modification = 0;

        if ($('#suppression'+profil+"_"+ressource).is(":checked"))
            suppression = 1;
        else
            suppression = 0;

        $.ajax({
            url: "{{ route('users.modif_parametre') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                lecture: lecture,
                ecriture: ecriture,
                modification: modification,
                suppression: suppression,
                profil: id_profil,
                ressource: id_ressource,
            },

            success: function(response) {
                console.log(response);
                if(response == 1){
                    $('#idSuccess').css('display','block');
                    $( "#idSuccess" ).empty().append("autorisation modifié avec succès");

                    var fade_out = function() {
                        $("#idSuccess").css('display','none');
                    }
                    setTimeout(fade_out, 5000);
                }
            },
            error: function(response) {
                console.log(response);
                $('#idError').css('display','block');
                $( "#idError" ).empty().append("Erreur de suppression");

                var fade_out = function() {
                    $("#idError").css('display','none');
                }
                setTimeout(fade_out, 5000);

            }
        });

    }

</script>
@section('script')

@endsection
