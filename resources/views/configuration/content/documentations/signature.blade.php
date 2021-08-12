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
                      <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                        Le Principal
                      </td>
                      <td class="mdc-data-table__cell" scope="row" id="u0">
                        <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bolder">Le Surveillant Général
                                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div> 
                                                        </div>
                                                    </div>
                      </td>
                      <td class="mdc-data-table__cell">Le Parent</td>
                      <td class="mdc-data-table__cell">L'élève</td>
                      
                      <td class="mdc-data-table__cell">
                        <button class="mdc-button mdc-button--dark icon-button" >
                                    &nbsp; <a href="/configuration/documentation/editSignature"><i class="material-icons mdc-button__icon" style="color:white;">edit</i> 
                                     
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