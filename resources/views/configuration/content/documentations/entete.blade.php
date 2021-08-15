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
                      <td class="mdc-data-table__cell">REPUBLIQUE DU CAMEROUN</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">Paix - Travail - Patrie</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">Ministère des Enseignements Secondaires</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">Délégation Régionale du Centre</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell"> </td> 
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
                         <img src="{{ asset('assets1/images/faces/logo.jpg') }}" height="160px" width="150px"  alt="user" class="user">
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
                      <th class="mdc-data-table__header-cell" style="text-align:center;"  role="columnheader" scope="col">Gauche</th>  
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">ARCHIDIOCESE DE YAOUNDE</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">Collège Mg. François Xavier VOGT</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">Discipline - Travail - Succès</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">BP: 972 Ydé - Tel: 242-08-34-69/242-68-62-97</td> 
                    </tr>
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell"> </td> 
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
                                        <button class="mdc-button mdc-button--dark icon-button" >
                                                &nbsp; <a href="/configuration/documentation/editEntete"><i class="material-icons mdc-button__icon" style="color:white;">edit</i> 
                                                &nbsp;<span style="color:white; font-size:0.8em;">Modifier &nbsp; </span></a>
                                        </button>
                                    </a>
                                        </td>
                                        <td class="mdc-data-table__cell">
                                    <a href="etablissement-matricule.html">
                                        <button class="mdc-button mdc-button--secondary icon-button" >
                                                &nbsp; <a href="etablissement-entete.html"><i class="material-icons mdc-button__icon" style="color:white;">print</i> 
                                                &nbsp;<span style="color:white; font-size:0.8em;">Imprimer &nbsp; </span></a>
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