@extends('configuration.home')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="fab">
                        <button
                            class="mdc-button mdc-menu-button mdc-button--dark icon-button secondary-filled-button fab-icon">
                            <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Créer un Document &nbsp;
                        </button>
                        <form class='cntt-wrapper'>
                            <div id="fab-hdr">
                                <h5 class="card-title card-padding pb-0">Formulaire de création d'un Document</h5>
                            </div>
                            <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                    <input class="mdc-text-field__input" type="hidden" id="id_etab">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6	">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="date-picker" id="intitule" required>
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input" class="mdc-floating-label">Intitulé du
                                                Document</label>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="textarea" id="ligne1">
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input" class="mdc-floating-label">Ligne 1</label>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="textarea" id="ligne2">
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input" class="mdc-floating-label">Ligne 2</label>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="textarea" id="ligne3">
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input" class="mdc-floating-label">Ligne 3</label>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="textarea" id="ligne4">
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input" class="mdc-floating-label">Ligne 4</label>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-form-field">
                                            <div class="mdc-checkbox">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">

                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                        <a href="utilisateurs.html" id="cancel"
                                            class="mdc-button mdc-button--secondary w-100">
                                            Annuler
                                        </a>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                                        <button onclick="ajouterDocument()" class="mdc-button mdc-button--dark w-100">
                                            Enregistrer
                                        </button>
                                    </div>

                                    <!-- <button class="mdl-button mdl-js-button" id="cancel">Cancel</button> -->
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-10">
                        <div class="mdc-card p-0">
                            <div class="d-flex justify-content-between">
                                <center>
                                    <h6 class="card-title card-padding pb-0" style="color:grey;">Liste des documents</h6>
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
                                                            style="color:red; font-size:1.2em;">delete</i>&nbsp; Supprimer
                                                    </h6>
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
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Intitulé
                                                du documents</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date de
                                                création</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actif
                                            </th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="mdc-data-table__content">
                                        @foreach ($documents as $document)
                                            <tr data-row-id="u0" class="mdc-data-table__row"
                                                id="document_{{ $document->id_document }}">
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
                                                                    {{ $document->intitule }}
                                                                    &nbsp;<i class="fa fa-envelope-o text-link"
                                                                        style="cursor:pointer;" aria-hidden="true"></i>
                                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                                    &nbsp;<i class="fa fa-whatsapp text-link"
                                                                        style="cursor:pointer;" aria-hidden="true"></i>
                                                                    &nbsp;<i class="fa fa-skype text-link"
                                                                        style="cursor:pointer;" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td class="mdc-data-table__cell">{{ $document->creation_date }}</td>
                                                <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                                                <td class="mdc-data-table__cell">
                                                    <div class="mdc-switch mdc-switch--success"
                                                        data-mdc-auto-init="MDCSwitch">
                                                        <div class="mdc-switch__track"></div>
                                                        <div class="mdc-switch__thumb-underlay">
                                                            <div class="mdc-switch__thumb">
                                                                <input type="checkbox" id="basic-switch"
                                                                    class="mdc-switch__native-control" role="switch"
                                                                    checked>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td class="mdc-data-table__cell">
                                                    <a href="etablissement-documentprofil.html"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">visibility</i></a>
                                                    <a href="/configuration/documentation/editDocuments"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">edit</i></a>
                                                    <!-- <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a> -->
                                                    <a onclick="supprimerDocument({{ $document->id_document }})">
                                                        <i class="material-icons mdc-text-field__icon"
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
            </div>
        </main>

    </div>
@endsection

@section('script')
    <script>
        function ajouterDocument() {
            var intitule = $("#intitule").val()
            var ligne1 = $("#ligne1").val()
            var ligne2 = $("#ligne2").val()
            var ligne3 = $("#ligne3").val()
            var ligne4 = $("#ligne4").val()
            $.ajax({
                url: "{{ route('document.ajout') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    intitule: intitule,
                    ligne1: ligne1,
                    ligne2: ligne2,
                    ligne3: ligne3,
                    ligne4: ligne4
                },
                success: function(response) {
                    console.log(response)
                    $('table tbody').append(`
                    <tr data-row-id="u0" class="mdc-data-table__row" id="document_${response.array.id}">
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
                                                                    ${response.array.intitule}
                                                                    &nbsp;<i class="fa fa-envelope-o text-link"
                                                                        style="cursor:pointer;" aria-hidden="true"></i>
                                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                                    &nbsp;<i class="fa fa-whatsapp text-link"
                                                                        style="cursor:pointer;" aria-hidden="true"></i>
                                                                    &nbsp;<i class="fa fa-skype text-link"
                                                                        style="cursor:pointer;" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td class="mdc-data-table__cell">${response.array.creation_date}</td>
                                                <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                                                <td class="mdc-data-table__cell">
                                                    <div class="mdc-switch mdc-switch--success"
                                                        data-mdc-auto-init="MDCSwitch">
                                                        <div class="mdc-switch__track"></div>
                                                        <div class="mdc-switch__thumb-underlay">
                                                            <div class="mdc-switch__thumb">
                                                                <input type="checkbox" id="basic-switch"
                                                                    class="mdc-switch__native-control" role="switch"
                                                                    checked>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td class="mdc-data-table__cell">
                                                    <a href="etablissement-documentprofil.html"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">visibility</i></a>
                                                    <a href="/configuration/documentation/editDocuments"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">edit</i></a>
                                                    <!-- <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a> -->
                                                    <a href="etablissement-documentedit.html"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:red; font-size:1.5em;">delete</i></a>
                                                </td>
                                            </tr>

                    `);
                    $("#intitule").val("")
                    $("#ligne1").val("")
                    $("#ligne2").val("")
                    $("#ligne3").val("")
                    $("#ligne4").val("")
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }

        function supprimerDocument(id) {

            url = "/configuration/documentation/deleteDocument/" + id;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $("#document_" + id).remove();
                        alert(response.message)

                    }
                }
            });
        }
    </script>
@endsection
