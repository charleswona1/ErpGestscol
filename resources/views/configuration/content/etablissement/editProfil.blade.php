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

            <div class="mdc-card">
              <center><h6 class="card-title" style="color:grey;">Modification de l'Etablissement </h6></center>
              <br/>

              <div class="template-demo">
                  <form method="POST" action="/configuration/modifierProfil" id="upload-file-form" enctype="multipart/form-data">
                    @csrf
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                    <div>
                      <a href="index.html" class="brand-logo">
                         <img src="{{  asset($etablissement[0]->logo?'logos_etablissements/'.$etablissement[0]->logo:'assets1/images/faces/logo.jpg') }}" height="180px" width="180px"  alt="user" class="user">

                        </a>
                      <p>
                          <div class="form-group">
                            <input type="file" name="file"  class="form-control-file" id="exampleFormControlFile1">
                          </div>
                      </p>
                    </div>
                  </div>

                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5-desktop">
                    <div class="table-responsive">
                        <table class="mdc-data-table__table" aria-label="Dessert calories">
                            <tbody class="mdc-data-table__content">
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Nom de l'Etablissement
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom" value="{{ $etablissement[0]->nom }}" name="nom" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Responsable
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Responsable" value="{{ $etablissement[0]->resp1 }}" name="resp1" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Abréviation
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Abréviation" value="{{ $etablissement[0]->abreviation }}" name="abreviation" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Type d'établissement
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Type d'établissement" value="{{ $etablissement[0]->type_etablissement }}" name="type_etablissement" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Ville
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Ville" value="{{ $etablissement[0]->ville }}" name="ville" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Boite postale
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Ville" value="{{ $etablissement[0]->boite_postale }}" name="boite_postale" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Téléphone
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Téléphone" value="{{ $etablissement[0]->telephone }}" name="telephone" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Email
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Email" value="{{ $etablissement[0]->email }}" name="email" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Site web
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Site web" value="{{ $etablissement[0]->site_web }}" name="site_web" required>
                                  </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Localisation
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Localisation" value="{{ $etablissement[0]->localisation }}" name="localisation" required>
                                  </td>
                                </tr>
                                </tbody>
                        </table>

                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                    <div class="table-responsive">
                        <table class="mdc-data-table__table" aria-label="Dessert calories">
                            <tbody class="mdc-data-table__content">
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Actif
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                         <div class="mdc-switch mdc-switch--success" data-mdc-auto-init="MDCSwitch">
                          <div class="mdc-switch__track"></div>
                          <div class="mdc-switch__thumb-underlay">
                            <div class="mdc-switch__thumb">
                                <input type="checkbox" id="basic-switch" class="mdc-switch__native-control" role="switch" checked>
                            </div>
                          </div>
                      </td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Date et Heure de création
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">16-06-2021 00:14</td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Type d'établissement
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>

                                    <td class="mdc-data-table__cell">
                                        <select class="mdl-selectfield__select" id="professsion1" name="professsion">
                                          <option value=""></option>
                                          <option value="option1">Maternelle</option>
                                          <option value="option2">Primaire</option>
                                          <option value="option3" selected>Secondaire</option>
                                          <option value="option4">Université</option>
                                          <option value="option4">Centre de Formation</option>
                                        </select>
                                    </td>


                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Nombre d'utilisateurs
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">15</td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Effectif
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">2548</td>
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">

                                </tr>
                            </tbody>
                        </table>
                        <br/>
                        <br/>

                        <div class="mdc-card" style="text-align:right;">
                          <section class="mdc-card__primary">
                            <h6 class="card-title"></h6>
                          </section>
                          <section class="mdc-card__supporting-text">
                            <div class="template-demo">

                              <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                &nbsp; <a href="" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
                              </button>
                              <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
                                <i class="material-icons mdc-button__icon">colorize</i>
                              </button> -->

                                  <button type="submit" class="mdc-button mdc-button--dark icon-button" >
                                    &nbsp;
                                        <i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                    &nbsp;<span style="color:white;">Enregistrer &nbsp; </span>
                                  </button>


                              <button class="mdc-button mdc-button--raised icon-button filled-button--light">
                                <i class="material-icons mdc-button__icon">print</i>
                              </button>


                            </div>
                          </section>
                        </div>

                      </div>

                    </div>
                  </div>


                </div>
            </form>
              </div>
            </div>
          </div>
      </div>
    </main>
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
@endsection
