@extends('configuration.home')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')

    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <?php //dd($profils) ?>
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="fab">
                        <button
                            class="mdc-button mdc-menu-button mdc-button--dark icon-button secondary-filled-button fab-icon">
                            <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Nouveau Groupe &nbsp;
                        </button>
                        <form class='cntt-wrapper'>
                            <div id="fab-hdr">
                                <h5 class="card-title card-padding pb-0">Formulaire de Licence</h5>
                            </div>
                            <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8	">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="date-picker" id="id_nom_g" required>
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input" class="mdc-floating-label">Nom du
                                                Groupe</label>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                        <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                            <input type="hidden" name="enhanced-select" id="id_heritier">
                                            <i class="mdc-select__dropdown-icon"></i>
                                            <div class="mdc-select__selected-text"></div>
                                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                                <ul class="mdc-list">
                                                    @foreach ($profils as $profil)
                                                        <li class="mdc-list-item" data-value="{{$profil->id_profil}}">
                                                            {{$profil->libelle}}
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                            <span class="mdc-floating-label">Hériter du Groupe</span>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8	">
                                        <div class="mdc-text-field w-100">
                                            <input class="mdc-text-field__input" type="date-picker" id="id_desc">
                                            <div class="mdc-line-ripple"></div>
                                            <label for="text-field-hero-input"
                                                class="mdc-floating-label">Description</label>
                                        </div>
                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                        <a href="utilisateur-groupe.html" id="cancel"
                                            class="mdc-button mdc-button--secondary w-100">
                                            Annuler
                                        </a>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                                        <a onclick="save_groupe()" class="mdc-button mdc-button--success w-100">
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
                                <center>
                                    <h6 class="card-title card-padding pb-0" style="color:grey;">Liste des Groupes
                                        d'utilisateurs</h6>
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
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom du
                                                Groupe</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">
                                                Description</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="mdc-data-table__content">
                                        @foreach ($profils as $profil)
                                            <tr data-row-id="u0" class="mdc-data-table__row" id="profil{{$profil->id_profil}}">
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
                                                                <div class="widget-heading font-weight-bolder">{{$profil->libelle}}
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
                                                <td class="mdc-data-table__cell">{{$profil->description}}</td>
                                                <td class="mdc-data-table__cell">
                                                    <a href="{{route('users.voir_groupe', [$profil->id_profil])}}"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">visibility</i></a>
                                                    <a href="{{route('users.edit_groupe', [$profil->id_profil])}}"><i
                                                            class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">edit</i></a>
                                                    <a href=""><i class="material-icons mdc-text-field__icon"
                                                            style="color:black; font-size:1.5em;">print</i></a>
                                                    <a onclick="delete_groupe_user({{$profil->id_profil}}, 1)"><i class="material-icons mdc-text-field__icon"
                                                            style="color:red; font-size:1.5em;">delete</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class="alert alert-success" id="idSuccess" style="display: none;">

                            </div>
                            <div class="alert alert-warning" id="idError" style="display: none;">

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
<script type="text/javascript">
    function delete_groupe_user(id, niv) {

        var confirmation = confirm("Voulez-vous vraiment supprimer cet utilisateur?");
        if (confirmation) {
            $.ajax({
                url: "{{ route('users.supprimer_groupe') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },

                success: function(response) {
                    console.log(response);
                    if (response["status"] == 1) {
                        if(niv == 1){
                            $('#idSuccess').css('display','block');
                            $( "#idSuccess" ).empty().append("Profil supprimé avec succès");

                            var fade_out = function() {
                            $("#idSuccess").css('display','none');
                        }
                            setTimeout(fade_out, 5000);
                            $("#profil"+id).remove();
                        } else {
                            window.location.href = "/configuration/utilisateur/groupe";
                        }
                    } else if(response["status"] == 2){
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Ce profil a été affecté à un ou plusieurs utilisateurs veuillez le modifier avant de le supprimer");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    } else {
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Ce profil a été affecté à un ou plusieurs utilisateurs veuillez le modifier avant de supprimer");

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

    function save_groupe(){
        var nom_groupe, desc, heritier;
        nom_groupe = $('#id_nom_g').val();
        desc = $('#id_desc').val();
        heritier = $('#id_heritier').val();
        if(nom_groupe.trim() === ""){
            alert("Veuillez donner un nom à ce groupe")
        } else {
            $.ajax({
                url: "{{ route('users.save_groupe') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    libelle: nom_groupe,
                    description: desc,
                    heritier: heritier,
                },

                success: function(response) {
                    console.log(response);
                    if (response > 0) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("Profil créé avec succès");
                        $('table tbody').append(`
                            <tr data-row-id="u0" class="mdc-data-table__row" id="profil${response}">
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
                                                <div class="widget-heading font-weight-bolder">${nom_groupe}
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
                                <td class="mdc-data-table__cell">${desc}</td>
                                <td class="mdc-data-table__cell">
                                    <a href="/configuration/utilisateur/voir_groupe/${response}"><i
                                            class="material-icons mdc-text-field__icon"
                                            style="color:black; font-size:1.5em;">visibility</i></a>
                                    <a href="/configuration/utilisateur/edit_groupe/${response}"><i
                                            class="material-icons mdc-text-field__icon"
                                            style="color:black; font-size:1.5em;">edit</i></a>
                                    <a href=""><i class="material-icons mdc-text-field__icon"
                                            style="color:black; font-size:1.5em;">print</i></a>
                                    <a onclick="delete_groupe_user(${response}, 1)"><i class="material-icons mdc-text-field__icon"
                                            style="color:red; font-size:1.5em;">delete</i></a>
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
@section('script')

@endsection
