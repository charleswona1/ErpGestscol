@extends('configuration.home')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
<?php //dd($resultatFinal) ?>
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="mdc-card">
                                <center>
                                    <h6 class="card-title" style="color:grey;">Droits d'Accès des Groupes d'utilisateurs
                                    </h6>
                                </center>
                                <br />
                                <div class="template-demo">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                            <div class="table-responsive">
                                                <table class="mdc-data-table__table" aria-label="Dessert calories">
                                                    <tbody class="mdc-data-table__content">
                                                        @foreach ($resultatFinal as $resultat)
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
                                                        @endforeach
                                                        
                                                        
                                                    </tbody>
                                                </table>
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

@section('script')

@endsection
