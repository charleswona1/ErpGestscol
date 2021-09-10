@extends('configuration.home')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection

<?php
    if(isset($matricule)){
        if(isset($matricule->prefix_mat))
            $prefix_mat = $matricule->prefix_mat;
        else
        $prefix_mat = "";

        if(isset($matricule->prefix2_mat))
            $prefix2_mat = $matricule->prefix2_mat;
        else
        $prefix2_mat = "";

        if(isset($matricule->suffix_mat))
            $suffix_mat = $matricule->suffix_mat;
        else
        $suffix_mat = "";

        if(isset($matricule->pos_mat))
            $pos_mat = $matricule->pos_mat;
        else
        $pos_mat = "";

        $id = $matricule->id_parametrage;
    } else {
        $prefix_mat = "";
        $prefix2_mat = "";
        $suffix_mat = "";
        $pos_mat = "";
        $id = 0;
    }
?>

@section('content')
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="d-flex justify-content-between">
                                <center>
                                    <h6 class="card-title card-padding pb-0" style="color:grey;">Matricules enrégitrés</h6>
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
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Préfixe
                                                1</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Préfixe
                                                2</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Suffixe
                                            </th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Position
                                                Mat</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="mdc-data-table__content">
                                        <tr data-row-id="u0" class="mdc-data-table__row">
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
                                            <td class="mdc-data-table__cell">{{$prefix_mat}}</td>
                                            <td class="mdc-data-table__cell">{{$prefix2_mat}}</td>
                                            <td class="mdc-data-table__cell">{{$suffix_mat}}</td>
                                            <td class="mdc-data-table__cell">{{$pos_mat}}</td>
                                            <td class="mdc-data-table__cell">
                                                <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                                                <a href="{{route("users.edit_matricule", [$id])}}"><i
                                                    class="material-icons mdc-text-field__icon"
                                                    style="color:black; font-size:1.5em;">edit</i></a>
                                            </td>
                                        </tr>
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

@endsection
