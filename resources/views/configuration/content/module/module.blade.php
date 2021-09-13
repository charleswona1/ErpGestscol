@extends('configuration.home')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection

@section('content')
<?php //dd($resultatFinal); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="fab" style="width: 60%;">
            <button class="mdc-button mdc-menu-button mdc-button--dark icon-button secondary-filled-button fab-icon">
                <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Nouvel Affectation &nbsp;
            </button>
            <form class='cntt-wrapper'>
                <div id="fab-hdr">
                   <h5 class="card-title card-padding pb-0">Affectation des Opérations de Groupe par Module</h5>
                </div>
                                <div class="mdc-layout-grid">
                  <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12	">
                <table class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                  <tr>
                    <td>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                        <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                          <input type="hidden" name="enhanced-select" id="id_profil" required>
                          <i class="mdc-select__dropdown-icon"></i>
                          <div class="mdc-select__selected-text"></div>
                          <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                            <ul class="mdc-list">
                              <!-- <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                              </li> -->
                              @foreach ($profils as $profil)
                                <li class="mdc-list-item" data-value="{{$profil->id_profil}}">
                                    {{$profil->libelle}}
                                </li>
                              @endforeach

                            </ul>
                          </div>
                          <span class="mdc-floating-label">Groupe de Compte</span>
                          <div class="mdc-line-ripple"></div>
                        </div>
                      </div>
                    </td>
                    </tr>
                  <tr>
                    <td>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                        <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                          <input type="hidden" name="enhanced-select" required>
                          <i class="mdc-select__dropdown-icon"></i>
                          <div class="mdc-select__selected-text"></div>
                          <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                            <ul class="mdc-list" id="moduleS">
                                @foreach ($modules as $module)
                                    <li class="mdc-list-item" data-value="{{$module->id_module}}" onclick="getRessourceModule({{$module->id_module}})">
                                        {{$module->nom}}
                                    </li>
                                @endforeach
                            </ul>
                          </div>
                          <span class="mdc-floating-label">Modules</span>
                          <div class="mdc-line-ripple"></div>
                        </div>
                      </div>
                     </td>
                     </tr>
                </table>
                    <table class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4" id="res_cont">

                    </table>

                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">

                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                      <a href="modules.html" id="cancel" class="mdc-button mdc-button--secondary w-100">
                        Annuler
                      </a>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                      <a  class="mdc-button mdc-button--success w-100" onclick="save_ressource_profil()">
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
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Affectation des Ressources par Groupe</h6></center>

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
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">file_upload</i>&nbsp; Exporter</h6>
                          </li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">file_download</i>&nbsp; Importer</h6>
                          </li>
                          <li class="mdc-list-divider"></li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="color:red; font-size:1.2em;">delete</i>&nbsp; Supprimer</h6>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                 </div>
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories" id="resultatR">
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
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Groupes d'utilisateurs</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Ressource</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nombre d'utilisateurs</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                      @foreach ($resultatFinal as $resultat)
                        <tr data-row-id="u0" class="mdc-data-table__row" id="ligne{{$resultat['id_profil']}}{{$resultat['id_res']}}">
                            <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                            <div class="mdc-checkbox mdc-data-table__row-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" aria-labelledby="u0"/>
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
                                        <div class="widget-heading font-weight-bolder">{{$resultat['nom_profil']}}
                                        &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                        &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="mdc-data-table__cell">{{$resultat['nom_ressource']}}</td>
                            <td class="mdc-data-table__cell">{{$resultat['nbre_user']}}</td>

                            <td class="mdc-data-table__cell">
                            <a href="#"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
                            <a href="#"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                            <a href="#"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
                            <a onclick="deleteRessourceProfil({{$resultat['id_profil']}}, {{$resultat['id_res']}})"><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
                <div class="alert alert-success" id="idSuccess" style="display: none;"></div>
                <div class="alert alert-warning" id="idError" style="display: none;"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
@endsection

@section('script')
<script type="text/javascript">
    var taille_ressource;
    function getRessourceModule(id){
        console.log(id);
        $.ajax({
            url: "{{ route('users.save_ressource_profil') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
            },

            success: function(response) {
                console.log(response);
                taille_ressource = response.length;
                console.log("test1 "+response.length);
                let compt = 0;
                $('#res_cont').empty();
                response.forEach(element => {
                    if(compt%2 == 0){
                        $('#res_cont').append(`
                            <tr>
                                <td>
                                    <div class="mdc-form-field">
                                        <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="ligne${compt}" value="${element.id_ressource}" checked/>
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark"
                                                viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path"
                                                    fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        </div>
                                        <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">${element.libelle}</label>
                                    </div>
                                </td>
                            </tr>
                        `);
                    } else {
                        $('#res_cont').append(`
                            <tr>
                                <td>
                                    <div class="mdc-form-field">
                                        <div class="mdc-checkbox">
                                        <input type="checkbox" id="basic-disabled-checkbox" class="mdc-checkbox__native-control" id="ligne${compt}" value="${element.id_ressource}"/>
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark"
                                                viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path"
                                                    fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        </div>
                                        <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">${element.libelle}</label>
                                    </div>
                                </td>
                            </tr>
                        `);
                    }

                    compt++;
                });
            },
            error: function(response) {
                alert("erreur de suppression");
                console.log(response);
            }
        });
    }

    function save_ressource_profil(){

        var formData = new FormData();
        var actif, profil;
        profil = $('#id_profil').val();
        var nbre = 0;
        console.log("test "+taille_ressource);
        for (let i = 0; i < taille_ressource; i++) {
            if ($('#ligne'+i).is(":checked")){
                actif = $('#ligne'+i).val();
                formData.append('ressource'+nbre, actif);
                console.log(actif);
                nbre++;
            }
        }
        formData.append('taille', nbre);
        formData.append('profil', profil);


        $.ajaxSetup({
            headers: {'X-CSRF-Token': '{{csrf_token()}}'},
        });
        $.ajax({
            url: "{{route('users.add_ressource_profil')}}",
            type: "POST",
            data:formData,
            processData: false,
            contentType: false,

            success:function(response){
                console.log(response);
                $('#idSuccess').css('display','block');
                $( "#idSuccess" ).empty().append("année scolaire créée avec succès");
                var fade_out = function() {
                    $("#idSuccess").css('display','none');
                }

                $('#cancel').trigger('click');
                setTimeout(fade_out, 2000);
                window.location.href = "/configuration/module";
                /*response.forEach(element => {
                    $('#resultatR tbody').append(`
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                            <div class="mdc-checkbox mdc-data-table__row-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" aria-labelledby="u0"/>
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
                                        <div class="widget-heading font-weight-bolder">Administrateur
                                        &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                        &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                        &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="mdc-data-table__cell">${}</td>
                        <td class="mdc-data-table__cell">02</td>

                        <td class="mdc-data-table__cell">
                            <a href="utilisateur-groupe-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
                            <a href="utilisateur-groupe-profiledit.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                            <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
                            <a href=""><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
                        </td>
                    </tr>
                `);
                });*/
            },
            error: function(response){
                console.log(response);
                alert('erreur');
            }
        });
      }

    function deleteRessourceProfil(id_profil, id_ressource){

        const alerteTable = document.getElementById('alerteTable')
            var confirmation = confirm("Voulez-vous vraiment supprimer ce droit?");
            if (confirmation) {
                $.ajax({
                url: "{{ route('users.delete_ressource_profil') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id_profil: id_profil,
                    id_ressource: id_ressource,
                },

                success: function(response) {
                    console.log(response);
                    if (response["status"] == 1) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("ressource supprimée avec succès");

                        var fade_out = function() {
                            $("#idSuccess").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                        $("#ligne"+id_profil+id_ressource).remove();
                    } else if(response["status"] == 2){
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Cette ressource a été affectée à un ou plusieurs modules veuillez le modifier avant de supprimer");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    } else {
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Cette ressource a été affectée à un ou plusieurs modules veuillez le modifier avant de supprimer");

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
</script>
@endsection
