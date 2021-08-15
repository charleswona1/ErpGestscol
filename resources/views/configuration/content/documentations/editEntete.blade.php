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
                <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Entête de l'Etablissement</h6></center>
           </div>
            </div>		  
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
            <div class="mdc-card p-0">
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row"> 
                      <th class="mdc-data-table__header-cell" style="text-align:center;" role="columnheader" scope="col">Gauche</th>  
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="REPUBLIQUE DU CAMEROUN" required>
                        </td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="Paix - Travail - Patrie" required>
                        </td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="Ministère des Enseignements Secondaires" required>
                        </td>  
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                    <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="Délégation Régionale du Centre" required>
                        </td>  
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value=" " required>
                        </td> 
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
                    
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
            <div class="mdc-card p-0">
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row"> 
                      <th class="mdc-data-table__header-cell" style="text-align:center;"  role="columnheader" scope="col">lOGO</th>  
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell"> 
                        <a href="index.html" class="brand-logo">
                         <img src="../assets/images/faces/logo.jpg" height="160px" width="150px"  alt="user" class="user">
                      </a>
                      </td> 
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
                
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
            <div class="mdc-card p-0">
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row"> 
                      <th class="mdc-data-table__header-cell" style="text-align:center;"  role="columnheader" scope="col">Droite</th>  
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="ARCHIDIOCESE DE YAOUNDE" required>
                        </td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="Collège Mg. François Xavier VOGT" required>
                        </td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="Discipline - Travail - Succès" required>
                        </td>  
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value="BP: 972 Ydé - Tel: 242-08-34-69/242-68-62-97" required>
                        </td> 		
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%; text-align:center;" id="validationCustom01" placeholder="Nom" 
                            value=" " required>
                        </td> 
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
        
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">	
                    
                        <div >
                            <table style="text-align:center;">
                              <tr>
                                <td class="mdc-data-table__cell">
                                    <a href="etablissement-matricule.html">
                                        <button class="mdc-button mdc-button--success icon-button" >
                                                &nbsp; <a href="etablissement-entete.html"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
                                                &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                                        </button>
                                    </a>
                                        </td>
                                <td class="mdc-data-table__cell">
                                    <a href="etablissement-matricule.html">
                                        <button class="mdc-button mdc-button--secondary icon-button" >
                                                &nbsp; <a href="etablissement-entete.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i> 
                                                &nbsp;<span style="color:white; font-size:0.8em;">Annuler &nbsp; </span></a>
                                        </button>
                                    </a>
                                </td>
                              </tr>
                            </table>
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