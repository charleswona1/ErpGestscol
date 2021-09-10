@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
<?php //dd($annee_scolaire); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="fab">
            <button class="mdc-button mdc-menu-button mdc-button--dark icon-button secondary-filled-button fab-icon">
                <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Créer une Année Solaire &nbsp;
            </button>
            <form class='cntt-wrapper'>
                <div id="fab-hdr">
                   <h5 class="card-title card-padding pb-0">Création d'une Année Scolaire</h5>
                </div>
                                <div class="mdc-layout-grid">
                  <div class="mdc-layout-grid__inner">


                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12	">
                      <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="id_libelle" required>
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Libellé</label>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                      <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="id_date_debut">
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Date début</label>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                      <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="id_date_fin" >
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Date fin</label>
                      </div>
                    </div>



                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                      <div class="mdc-form-field">
                        <div class="mdc-checkbox">


                        </div>

                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">

                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                      <a href="annees-scolaires.html" id="cancel" class="mdc-button mdc-button--secondary w-100">
                        Annuler
                      </a>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                      <a onclick="save_annee()"  class="mdc-button mdc-button--dark w-100">
                        Enregistrer
                      </a>
                    </div>

                    <!-- <button class="mdl-button mdl-js-button" id="cancel">Cancel</button> -->
                  </div>
                </div>

            </form>
          </div>

          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
            <div class="d-flex justify-content-between">
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Années Scolaires</h6></center>

              <div class="template-demo">

                    <div class="menu-button-container">
                      <button class="mdc-button mdc-menu-button">
                        <i class="material-icons mdc-button__icon">settings</i>
                      </button>
                      <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">print</i>&nbsp; Imprimer</h6>
                          </li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">do_not_disturb_on</i>&nbsp; Clôturer</h6>
                          </li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">https</i>&nbsp; Verouiller</h6>
                          </li>
                          <li class="mdc-list-divider"></li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="color:red; font-size:1.2em;">move_to_inbox</i>&nbsp; Archiver</h6>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                 </div>
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories" id="table1">
                  <thead>
                    <tr class="mdc-data-table__header-row">
                      <th class="mdc-data-table__header-cell mdc-data-table__header-cell--checkbox" role="columnheader" scope="col">
                        <div class="mdc-checkbox mdc-data-table__header-row-checkbox mdc-checkbox--selected">
                          <input type="checkbox" class="mdc-checkbox__native-control" aria-label="Toggle all rows"/>
                          <div class="mdc-checkbox__background">
                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                              <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                            </svg>
                            <div class="mdc-checkbox__mixedmark"></div>
                          </div>
                          <div class="mdc-checkbox__ripple"></div>
                        </div>
                      </th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Libellé</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date de Début</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date de Fin</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Status</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                      <?php $i=0; ?>
                      @foreach ($annee_scolaire as $annee)

                      <tr data-row-id="u0" class="mdc-data-table__row" id="annee{{$annee->id_annee_academique}}">
                        <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                          <div class="mdc-checkbox mdc-data-table__row-checkbox">
                            <input type="checkbox" class="mdc-checkbox__native-control" id="ligne{{$i}}" aria-labelledby="u0" value="{{$annee->id_annee_academique}}"/>
                            <div class="mdc-checkbox__background">
                              <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                              </svg>
                              <div class="mdc-checkbox__mixedmark"></div>
                            </div>
                            <div class="mdc-checkbox__ripple"></div>
                          </div>
                        </td>
                        <td class="mdc-data-table__cell" scope="row" id="u0">
                          <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading font-weight-bolder">Année Scolaire {{$annee->nom}}
                                        &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                        &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="mdc-data-table__cell">{{$annee->date_debut}}</td>
                        <td class="mdc-data-table__cell">{{$annee->date_fin}}</td>
                        <td class="mdc-data-table__cell">
                            @if($annee->est_verrouiller == 0)
                                <button id="button{{$annee->id_annee_academique}}" class="mdc-button text-button--success">
                                    En Cours
                                </button>
                            @else
                                <button id="button{{$annee->id_annee_academique}}" class="mdc-button text-button--warning">
                                    Terminée
                                </button>
                            @endif

                        </td>
                        <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->

                        <td class="mdc-data-table__cell">
                          <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                          <!--<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>-->
                          <!-- <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a> -->
                          <a onclick="delete_annee({{$annee->id_annee_academique}})"><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      @endforeach
                  </tbody>
                </table>
                <div class="alert alert-success" id="idSuccess" style="display: none;"></div>
                <div class="alert alert-warning" id="idError" style="display: none;"></div>
              </div>
            </div>
          </div>


            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                <div >
                    <table style="text-align:center;">
                        <tr>
                        <td class="mdc-data-table__cell">
                            <a onclick="annee_cours({{$i}})">
                                <button class="mdc-button mdc-button--success icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">
                                        check_circle</i>
                                        &nbsp;<span style="color:white; font-size:0.8em;">Mettre en Cours &nbsp; </span>
                                </button>
                            </a>
                                </td>
                                <td class="mdc-data-table__cell">
                            <a onclick="annee_verrouiller({{$i}})">
                                <button class="mdc-button mdc-button--secondary icon-button" >
                                        &nbsp;<span style="color:white; font-size:0.8em;">Vérrouiller &nbsp; </span>
                                </button>
                            </a>
                        </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
      </div>
    </main>
  </div>
@endsection

@section('script')
  <script type="text/javascript">

    function delete_annee(id){

        var confirmation = confirm("Voulez-vous vraiment supprimer cette année academique?");
        if (confirmation) {
            $.ajax({
                url: "{{ route('users.delete_annee_scolaire') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },

                success: function(response) {
                    console.log(response["message"]);
                    if (response["status"] == 1) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("Année academique supprimée avec succès");

                        var fade_out = function() {
                            $("#idSuccess").css('display','none');
                        }
                        setTimeout(fade_out, 2000);
                        $("#annee"+id).remove();
                    } else if(response["status"] == 2){
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Cette année scolaire a plusieurs attributions voulez-vous cas meme le supprimer ou annuler la suppression");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    } else {
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Cette année scolaire a plusieurs attributions voulez-vous cas meme le supprimer ou annuler la suppression");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    }

                },
                error: function(response) {
                    alert("erreur de suppression");
                    console.log(response);
                }
            });
        }

    }

    function save_annee(){
        var libelle, date_debut, date_fin;

        libelle = $("#id_libelle").val();
        date_debut = $("#id_date_debut").val();
        date_fin = $("#id_date_fin").val();

        $.ajax({
            url: "{{ route('users.ajout_annee') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                libelle: libelle,
                date_debut: date_debut,
                date_fin: date_fin,
            },

            success: function(response) {
                console.log(response);
                if (response.id_annee_academique > 0) {
                    $('#idSuccess').css('display','block');
                    $( "#idSuccess" ).empty().append("année scolaire créée avec succès");
                    $('#table1 tbody').append(`
                        <tr data-row-id="u0" class="mdc-data-table__row" id="annee${response.id_annee_academique}">
                            <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                            <div class="mdc-checkbox mdc-data-table__row-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="ligne" aria-labelledby="u0" value="${response.id_annee_academique}"/>
                                <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                                <div class="mdc-checkbox__ripple"></div>
                            </div>
                            </td>
                            <td class="mdc-data-table__cell" scope="row" id="u0">
                            <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading font-weight-bolder">Année Scolaire ${response.nom}
                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="mdc-data-table__cell">${response.date_debut}</td>
                            <td class="mdc-data-table__cell">${response.date_fin}</td>
                            <td class="mdc-data-table__cell">
                                <button class="mdc-button text-button--success">
                                    En Cours
                                </button>

                            </td>
                            <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->

                            <td class="mdc-data-table__cell">
                            <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                            <!--<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>-->
                            <!-- <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a> -->
                            <a onclick="delete_annee(${response.id_annee_academique})"><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
                            </td>
                        </tr>
                    `)

                    var fade_out = function() {
                        $("#idSuccess").css('display','none');
                    }

                    $('#cancel').trigger('click');
                    setTimeout(fade_out, 5000);
                } else {
                    console.log(response);
                    $('#idError').css('display','block');
                    $( "#idError" ).empty().append("Erreur d'enregistrement de l'année scolaire");

                    var fade_out = function() {
                        $("#idError").css('display','none');
                    }
                    setTimeout(fade_out, 5000);
                }

            },
            error: function(response) {
                console.log(response);
                alert("erreur");
                console.log(response);
            }
        });


    }

    function annee_cours(taille){

        var formData = new FormData();
        var actif, verd;
        var nbre = 0;
        for (let i = 0; i < taille; i++) {
            if ($('#ligne'+i).is(":checked")){
                actif = $('#ligne'+i).val();
                formData.append('annee'+nbre, actif);
                console.log(actif);
                nbre++;
            }


        }
        formData.append('taille', nbre);


        $.ajaxSetup({
            headers: {'X-CSRF-Token': '{{csrf_token()}}'},
        });
        $.ajax({
            url: "{{route('users.encour_annee')}}",
            type: "POST",
            data:formData,
            processData: false,
            contentType: false,

            success:function(response){
                for (var i=0; i<=nbre; i++) {
                    $("#button"+formData.get('annee'+i)).attr('class', 'mdc-button text-button--success');
                    $("#button"+formData.get('annee'+i)).html("En Cours");
                }

            },
            error: function(response){
                console.log(response);
                alert('erreur');
            }
        });

    }

    function annee_verrouiller(taille){

        var formData = new FormData();
        var actif, verd;
        var nbre = 0;
        for (let i = 0; i < taille; i++) {
            if ($('#ligne'+i).is(":checked")){
                actif = $('#ligne'+i).val();
                formData.append('annee'+nbre, actif);
                console.log(actif);
                nbre++;
            }
        }
        formData.append('taille', nbre);


        $.ajaxSetup({
            headers: {'X-CSRF-Token': '{{csrf_token()}}'},
        });
        $.ajax({
            url: "{{route('users.verrouiller_annee')}}",
            type: "POST",
            data:formData,
            processData: false,
            contentType: false,

            success:function(response){
                for (var i=0; i<=nbre; i++) {
                    $("#button"+formData.get('annee'+i)).attr('class', 'mdc-button text-button--warning');
                    $("#button"+formData.get('annee'+i)).html("Terminée");
                }

            },
            error: function(response){
                console.log(response);
                alert('erreur');
            }
        });

        }

  </script>
@endsection
