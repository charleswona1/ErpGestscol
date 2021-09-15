@extends('administration.principal')

@section('css')
    <style>
        .alert {
            padding: 12px 16px;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            margin-bottom: 12px;
            font-size: 16px;
        }

        .alert.alert-success {
            background-color: rgba(227, 253, 235, 1);
            border-color: rgba(38, 179, 3, 1);
            color: rgba(60, 118, 61, 1);
        }

    </style>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>erreur!!!!</strong></p>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="fab">
                    <button
                        class="mdc-button mdc-menu-button mdc-button--raised icon-button secondary-filled-button fab-icon">
                        <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Ajouter Etablissement &nbsp;
                    </button>
                    <div class='cntt-wrapper'>

                        <div id="fab-hdr">
                            <h5 class="card-title card-padding pb-0">Création d'un Etablissement</h5>

                        </div>
                        <div id="alerte"></div>
                        <div id="header">
                            <ul class="tabs">
                            </ul>
                        </div>
                        <div class="mdc-layout-grid">
                            <div class="mdc-layout-grid__inner">

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" id="nom" name="nom" required>
                                        <div class="mdc-line-ripple"></div>
                                        <label for="nom" class="mdc-floating-label">Nom de l'Etablissement</label>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" id="abreviation" name="abreviation">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="abreviation" class="mdc-floating-label">Abréviation</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                        <input type="hidden" name="type_etablissement" id="type_etablissement">
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                            <ul class="mdc-list">
                                                <li class="mdc-list-item mdc-list-item--selected" data-value=""
                                                    aria-selected="true">
                                                </li>
                                                <li class="mdc-list-item" data-value="Maternelle">
                                                    Maternelle
                                                </li>
                                                <li class="mdc-list-item" data-value="Primaire">
                                                    Primaire
                                                </li>
                                                <li class="mdc-list-item" data-value="Secondaire">
                                                    Secondaire
                                                </li>
                                                <li class="mdc-list-item" data-value="Universite">
                                                    Université
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="mdc-floating-label">Type d'Etablissement</span>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" name="ville" id="ville">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="ville" type="" class="mdc-floating-label">Ville</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" name="boite_postale" id="boite_postale">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="boite_postale" class="mdc-floating-label">Boite postal</label>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" type="phone" id="telephone" name="telephone">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="telephone" class="mdc-floating-label">Téléphone</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" type="email" id="email" name="email">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="email" class="mdc-floating-label">Email</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" id="fax" name="fax">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="fax" type="" class="mdc-floating-label">Fax</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8-desktop">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" id="site_web" name="site_web">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="site_web" class="mdc-floating-label">Site web</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field w-100">
                                        <input class="mdc-text-field__input" id="localisation" name="localisation">
                                        <div class="mdc-line-ripple"></div>
                                        <label for="localisation" class="mdc-floating-label">Localisation</label>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">

                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">

                                </div>

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                    <button id="cancel" class="mdc-button mdc-button--label w-100">
                                        Annuler
                                    </button>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                                    <button onclick="addEtablissement()" class="mdc-button mdc-button--raised w-100">
                                        Enregistrer
                                    </button>
                                </div>

                                <!-- <button class="mdl-button mdl-js-button" id="cancel">Cancel</button> -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card p-0">
                        <div class="d-flex justify-content-between">
                            <center>
                                <h6 class="card-title card-padding pb-0" style="color:grey;">Liste des Etablissements</h6>
                            </center>
                            <div class="template-demo">

                                <div class="menu-button-container">
                                    <button class="mdc-button mdc-menu-button">
                                        <i class="material-icons mdc-button__icon">settings</i>
                                    </button>
                                    <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal"><i class="material-icons"
                                                        style="font-size:1.2em;">print</i>&nbsp; Imprimer</h6>
                                            </li>
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal"><i class="material-icons"
                                                        style="font-size:1.2em;">file_upload</i>&nbsp; Exporter</h6>
                                            </li>
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal"><i class="material-icons"
                                                        style="font-size:1.2em;">file_download</i>&nbsp; Importer</h6>
                                            </li>
                                            <li class="mdc-list-divider"></li>
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal"><i class="material-icons"
                                                        style="color:red; font-size:1.2em;">delete</i>&nbsp; Supprimer</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="alerteTable"></div>

                        <div class="table-responsive">
                            <table class="mdc-data-table__table" aria-label="Dessert calories">
                                <thead>
                                    <tr class="mdc-data-table__header-row">
                                        <th class="mdc-data-table__header-cell mdc-data-table__header-cell--checkbox"
                                            role="columnheader" scope="col">
                                            <div
                                                class="mdc-checkbox mdc-data-table__header-row-checkbox mdc-checkbox--selected">
                                                <input type="checkbox" class="mdc-checkbox__native-control"
                                                    aria-label="Toggle all rows" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                        </th>
                                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom de
                                            l'Etablissement | Responsable</th>
                                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Abréviation
                                        </th>
                                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Type
                                            d'établissement</th>
                                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Ville</th>
                                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">
                                            T&eacute;l&eacute;phone</th>

                                        <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="mdc-data-table__content">
                                    @foreach ($etablissements as $item)
                                        <tr data-row-id="u0" class="mdc-data-table__row"
                                            id="etabli{{ $item->id_etablissement }}">
                                            <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                                                <div class="mdc-checkbox mdc-data-table__row-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control"
                                                        aria-labelledby="u0" />
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
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
                                                            <div class="widget-heading font-weight-bolder">
                                                                {{ $item->nom }}
                                                                &nbsp;<i class="fa fa-envelope-o text-link"
                                                                    style="cursor:pointer;" aria-hidden="true"></i>
                                                                <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                                &nbsp;<i class="fa fa-whatsapp text-link"
                                                                    style="cursor:pointer;" aria-hidden="true"></i>
                                                                &nbsp;<i class="fa fa-skype text-link"
                                                                    style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="widget-subheading text-muted opacity-7">{{ $item->resp1 }}</div>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td class="mdc-data-table__cell">{{ $item->abreviation }}</td>
                                            <td class="mdc-data-table__cell">{{ $item->type_etablissement }}</td>
                                            <td class="mdc-data-table__cell">{{ $item->ville }}</td>
                                            <td class="mdc-data-table__cell">{{ $item->telephone }}</td>
                                            <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->

                                            <td class="mdc-data-table__cell">
                                                <a href="{{ route('etablissement.show',[$item->id_etablissement]) }}"><i
                                                        class="material-icons mdc-text-field__icon"
                                                        style="color:black; font-size:1.5em;">visibility</i></a>
                                                <a href="{{ route('etablissement.show',[$item->id_etablissement]) }}"><i class="material-icons mdc-text-field__icon"
                                                        style="color:black; font-size:1.5em;">edit</i></a>
                                                <a href=""><i class="material-icons mdc-text-field__icon"
                                                        style="color:black; font-size:1.5em;">print</i></a>
                                                <a onclick="supprimer_etablissement({{ $item->id_etablissement }})"><i
                                                        class="material-icons mdc-text-field__icon"
                                                        style="color:red; font-size:1.5em;">delete</i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection

@section('script')
    <script>
        function addEtablissement() {
            var nom = $("#nom").val()
            var telephone = $("#telephone").val()
            var email = $("#email").val()
            var abreviation = $("#abreviation").val()
            var type_etablissement = $("#type_etablissement").val()
            var ville = $("#ville").val()
            var boite_postale = $("#boite_postale").val()
            var fax = $("#fax").val()
            var site_web = $("#site_web").val()
            var localisation = $("#localisation").val()
            const alerte = document.getElementById('alerte')

            $.ajax({
                url: "{{ route('etablissement.ajout') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    nom: nom,
                    telephone: telephone,
                    email: email,
                    abreviation: abreviation,
                    type_etablissement: type_etablissement,
                    ville: ville,
                    boite_postale: boite_postale,
                    fax: fax,
                    site_web: site_web,
                    localisation: localisation,
                },
                success: function(response) {
                    console.log(response)

                    if(response.message){
                          alerte.innerHTML = '<div class="alert alert-success ml-5 mr-5" role="alert">' +
                        response.message + '</div>'

                        $('table tbody').append(`
                        <tr data-row-id="u0" class="mdc-data-table__row"
                                            id="etabli${ response.status.id}">
                                            <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                                                <div class="mdc-checkbox mdc-data-table__row-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control"
                                                        aria-labelledby="u0" />
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
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
                                                            <div class="widget-heading font-weight-bolder">
                                                                ${ response.status.nom}
                                                                &nbsp;<i class="fa fa-envelope-o text-link"
                                                                    style="cursor:pointer;" aria-hidden="true"></i>
                                                                <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                                &nbsp;<i class="fa fa-whatsapp text-link"
                                                                    style="cursor:pointer;" aria-hidden="true"></i>
                                                                &nbsp;<i class="fa fa-skype text-link"
                                                                    style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="widget-subheading text-muted opacity-7"></div>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td class="mdc-data-table__cell">${ response.status.abreviation}</td>
                                            <td class="mdc-data-table__cell">${ response.status.type_etablissement}</td>
                                            <td class="mdc-data-table__cell">${ response.status.ville}</td>
                                            <td class="mdc-data-table__cell">${ response.status.telephone}</td>
                                            <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->

                                            <td class="mdc-data-table__cell">
                                                <a href="/administrateur/edit_etablissement/${ response.status.id}"><i
                                                        class="material-icons mdc-text-field__icon"
                                                        style="color:black; font-size:1.5em;">visibility</i></a>
                                                <a href="/administrateur/edit_etablissement/${ response.status.id}"><i class="material-icons mdc-text-field__icon"
                                                        style="color:black; font-size:1.5em;">edit</i></a>
                                                <a href=""><i class="material-icons mdc-text-field__icon"
                                                        style="color:black; font-size:1.5em;">print</i></a>
                                                <a onclick="supprimer_etablissement(${ response.status.id})"><i
                                                        class="material-icons mdc-text-field__icon"
                                                        style="color:red; font-size:1.5em;">delete</i></a>
                                            </td>
                                        </tr>
                        `           )
                    var nom = $("#nom").val("")
                    var telephone = $("#telephone").val("")
                    var email = $("#email").val("")
                    var abreviation = $("#abreviation").val("")
                    var type_etablissement = $("#type_etablissement").val("")
                    var ville = $("#ville").val("")
                    var boite_postale = $("#boite_postale").val("")
                    var fax = $("#fax").val("")
                    var site_web = $("#site_web").val("")
                    var localisation = $("#localisation").val("")
                    }else{
                        alerte.innerHTML = '<div class="alert alert-danger ml-5 mr-5" role="alert">' +
                        "Vérifié que l'établissement n'existe pas déja ou que tout les champs sont remplis " + '</div>'
                    }

                },
                error: function(err) {

                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        $.each(err.responseJSON.errors, function(i, error) {
                            $("#header ul").append('<li><span style="color: rgb(253, 6, 31);">' + error[
                                0] + '</span></li>');
                        });

                    }

                }
            });

        }

        function supprimer_etablissement(id) {
            const alerteTable = document.getElementById('alerteTable')
            var confirmation = confirm("Voulez-vous vraiment supprimer cet établissement?");
            if (confirmation) {
                $.ajax({
                    url: "{{ route('etablissement.supp') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id: id,
                    },

                    success: function(response) {
                        if (response) {
                            alerteTable.innerHTML = '<div class="alert alert-success ml-5 mr-5" role="alert">' +
                                response.message + '</div>'
                            $("#etabli" + id).remove();
                        } else {
                            alert("erreur de suppression");
                        }

                    },
                    error: function(response) {
                        alert("Impossible de supprimer cette établissement car il est lié a une année académique de suppression");
                        console.log(response);
                    }
                });
            }
        }
    </script>
@endsection
