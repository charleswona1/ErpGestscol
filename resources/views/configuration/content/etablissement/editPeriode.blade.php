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
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Modification dénomination Période</h6></center>
              
              
                 </div>
                 <br/>
                 <br/>
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Type de période</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Adj. Masculin</th>						  
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Adj. Féminin</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                      <td class="mdc-data-table__cell">Année</td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="Année" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="Annuel" required>
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom complet" value="Annuelle" required>
                      </td>
                       
                      <td class="mdc-data-table__cell">
                        <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                        <a href="etablissement-matricule.html">
                            <button class="mdc-button mdc-button--dark icon-button" >
                                    &nbsp; <a href="etablissement-periode.html"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
                                    &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                            </button>
                        </a>
                        <a href="etablissement-matricule.html">
                            <button class="mdc-button mdc-button--secondary icon-button" >
                                    &nbsp; <a href="etablissement-periode.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i> 
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