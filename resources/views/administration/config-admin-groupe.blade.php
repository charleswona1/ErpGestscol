@extends('administration.principal')

@section('content')
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
        <div class="fab">
            <button class="mdc-button mdc-menu-button mdc-button--raised icon-button secondary-filled-button fab-icon">
                <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Nouvelle ressource &nbsp;
            </button>
            <form class='cntt-wrapper'>
                <div id="fab-hdr">
                    <h5 class="card-title card-padding pb-0">Formulaire de Ressource</h5>
                </div>
                                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8	">
                        <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="nom_droit" required>
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Nom de la ressource</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                          <input type="hidden" name="enhanced-select" id="id_module" required>
                          <i class="mdc-select__dropdown-icon"></i>
                          <div class="mdc-select__selected-text" id="valDiv"></div>
                          <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                            <ul class="mdc-list">
                                @foreach ($resultatFinal as $resultat)
                                    <li class="mdc-list-item" data-value="{{$resultat['id_module']}}">
                                        {{$resultat['nom_module']}}
                                    </li>
                                @endforeach
                            </ul>
                          </div>
                          <span class="mdc-floating-label">Module</span>
                          <div class="mdc-line-ripple"></div>
                        </div>
                      </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8	">
                        <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="num_code"  required>
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Code de la ressource</label>
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
                        <a href="config-admin-groupe.html" id="cancel" class="mdc-button mdc-button--label w-100">
                        Annuler
                        </a>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                        <a onclick="save_ressource()"  class="mdc-button mdc-button--raised w-100">
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
                <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Liste des ressources par Modules</h6></center>

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
                <table class="mdc-data-table__table" aria-label="Dessert calories">
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
                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom du module</th>
                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom de la Ressource</th>
                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Code</th>
                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody class="mdc-data-table__content">
                        @foreach ($resultatFinal as $resultat)
                            @foreach ($resultat['ressources'] as $res)
                                <tr data-row-id="u0" class="mdc-data-table__row" id="droit{{$res->id_ressource}}">
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
                                    <td class="mdc-data-table__cell"><b> {{$resultat['nom_module']}} </b></td>
                                    <td class="mdc-data-table__cell"> {{$res->libelle}} </td>
                                    <td class="mdc-data-table__cell">{{$res->code}}</td>

                                    <td class="mdc-data-table__cell">
                                    <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
                                    <a onclick="delete_droit({{$res->id_ressource}})"><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="alert alert-success" id="idSuccess" style="display: none;"></div>
                <div class="alert alert-warning" id="idError" style="display: none;"></div>
            </div>
            </div>
        </div>
        </div>
    </main>
    <script type="text/javascript">
        function delete_droit(id) {
            const alerteTable = document.getElementById('alerteTable')
            var confirmation = confirm("Voulez-vous vraiment supprimer ce droit?");
            if (confirmation) {
                $.ajax({
                url: "{{ route('admin.delete_ressource') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },

                success: function(response) {
                    console.log(response);
                    if (response["status"] == 1) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("ressource supprim??e avec succ??s");

                        var fade_out = function() {
                            $("#idSuccess").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                        $("#droit"+id).remove();
                    } else if(response["status"] == 2){
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Cette ressource a ??t?? affect?? ?? un ou plusieurs modules veuillez le modifier avant de supprimer");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    } else {
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Cette ressource a ??t?? affect?? ?? un ou plusieurs modules veuillez le modifier avant de supprimer");

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

    function save_ressource() {

        var nom_droit, id_droit, id_module, textDiv;
        nom_droit = $('#nom_droit').val();
        id_droit = $('#num_code').val();
        id_module = $('#id_module').val();
        textDiv = $('#valDiv').html();

        console.log(nom_droit+'___'+id_droit);

        if(nom_droit.trim() === "" && id_droit.trim() === ""){
            alert("Veuillez remplir tous les champs")
        } else {
            $.ajax({
                url: "{{ route('admin.save_ressource') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    nom_droit: nom_droit,
                    id_droit: id_droit,
                    id_module: id_module,
                },

                success: function(response) {
                    console.log(response);
                    if (response > 0) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("Profil cr???? avec succ??s");
                        $('table tbody').append(`
                            <tr data-row-id="u0" class="mdc-data-table__row" id="droit${response}">
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
                                <td class="mdc-data-table__cell"><b>${textDiv}</b></td>
                                <td class="mdc-data-table__cell">${nom_droit}</td>
                                <td class="mdc-data-table__cell">${id_droit}</td>

                                <td class="mdc-data-table__cell">
                                <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
                                <a onclick="delete_droit(${response})"><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
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
                        $( "#idError" ).empty().append("Erreur d'enregistrement du profil ");

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

    }
    </script>
@endsection
