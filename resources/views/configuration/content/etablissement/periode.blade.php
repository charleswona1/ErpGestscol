@extends('configuration.home')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="d-flex justify-content-between">
                                <center>
                                    <h6 class="card-title card-padding pb-0" style="color:grey;">Dénomination des Périodes
                                    </h6>
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
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Type de
                                                période</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Adj.
                                                Masculin</th>
                                            <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Adj.
                                                Féminin</th>
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
                                            <td class="mdc-data-table__cell" scope="row" id="u0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">

                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bolder">Année
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
                                            <td class="mdc-data-table__cell">Année</td>
                                            <td class="mdc-data-table__cell">Annuel</td>
                                            <td class="mdc-data-table__cell">Annuelle</td>
                                            <td class="mdc-data-table__cell">
                                                <button class="mdc-button mdc-button--dark icon-button">
                                                    &nbsp; <a href="/configuration/editPeriode"><i
                                                            class="material-icons mdc-button__icon"
                                                            style="color:white;">edit</i>

                                                </button>
                                            </td>

                                        </tr>

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
                                            <td class="mdc-data-table__cell" scope="row" id="u0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">

                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bolder">Période
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
                                            <td class="mdc-data-table__cell">Trimestre</td>
                                            <td class="mdc-data-table__cell">Trimestriel</td>
                                            <td class="mdc-data-table__cell">Trimestrielle</td>
                                            <td class="mdc-data-table__cell">
                                                <button class="mdc-button mdc-button--dark icon-button">
                                                    &nbsp; <a href="/configuration/editPeriode"><i
                                                            class="material-icons mdc-button__icon"
                                                            style="color:white;">edit</i>

                                                </button>
                                            </td>

                                        </tr>
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
                                            <td class="mdc-data-table__cell" scope="row" id="u0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">

                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bolder">Sous-Période
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
                                            <td class="mdc-data-table__cell">Séquence</td>
                                            <td class="mdc-data-table__cell">Séquentiel</td>
                                            <td class="mdc-data-table__cell">Séquentielle</td>
                                            <td class="mdc-data-table__cell">
                                                <button class="mdc-button mdc-button--dark icon-button">
                                                    &nbsp; <a href="/configuration/editPeriode"><i
                                                            class="material-icons mdc-button__icon"
                                                            style="color:white;">edit</i>

                                                </button>
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
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection

@section('script')

@endsection
