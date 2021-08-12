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
             
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Intitulés des Signatures</h6></center>
              
              <div class="template-demo">
                    
                    
                  </div>
                  
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row">
                      
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Gauche</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Centre</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Droite</th>						  
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Apprenant</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="Le Principal" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="Le Surveillant Général" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="Le Parent" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="L'élève" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <a href="etablissement-signature.html">
                            <button class="mdc-button mdc-button--dark icon-button" >
                                    &nbsp; <a href="etablissement-signature.html"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
                                    &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                            </button>
                        </a>
                        <a href="etablissement-signature.html">
                            <button class="mdc-button mdc-button--secondary icon-button" >
                                    &nbsp; <a href="etablissement-signature.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i> 
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