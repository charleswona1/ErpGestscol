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
            <div >
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Modification Matricule</h6></center>
              
              
                 </div>
                 <br/>
                 <br/>
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Type de matricule</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Préfixe 1</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Préfixe 2</th>						  
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Suffixe</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Position ID</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date de création</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actif</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      
                      <td class="mdc-data-table__cell">
                        <select class="mdl-selectfield__select" id="professsion1" name="professsion" style="width:100%">
                            <option value=""></option>
                            <option value="option1" selected>Apprenant</option>
                            <option value="option2">Personnel</option>
                        </select>
                      </td>	
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="ANNEE" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="VGT" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="SEXE" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <select class="mdl-selectfield__select" id="professsion1" name="professsion" style="width:100%">
                            <option value=""></option>
                            <option value="option1" selected>Avant Préfixe 1</option>
                            <option value="option2">Avant Préfixe 2</option>
                            <option value="option2">Avant suffixe</option>
                            <option value="option2">Après suffixe</option>
                        </select>
                      </td>	
                      <td class="mdc-data-table__cell">05/08/2021 11:02</td>
                      <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                      <td class="mdc-data-table__cell">
                         <div class="mdc-switch mdc-switch--success" data-mdc-auto-init="MDCSwitch">
                          <div class="mdc-switch__track"></div>
                          <div class="mdc-switch__thumb-underlay">
                            <div class="mdc-switch__thumb">
                                <input type="checkbox" id="basic-switch" class="mdc-switch__native-control" role="switch" checked>
                            </div>
                          </div>
                      </td>
                      <td class="mdc-data-table__cell">
                        <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                        <a href="etablissement-matricule.html">
                            <button class="mdc-button mdc-button--dark icon-button" >
                                    &nbsp; <a href="etablissement-matricule.html"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
                                    &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                            </button>
                        </a>
                        <a href="etablissement-matricule.html">
                            <button class="mdc-button mdc-button--secondary icon-button" >
                                    &nbsp; <a href="etablissement-matricule.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i> 
                                    &nbsp;</a>
                            </button>
                        </a>
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