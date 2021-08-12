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
              <center><h6 class="card-title" style="color:grey;">Modification du Groupe</h6></center>
              <br/>
              
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  
                  
                  
                  
                  
                  
                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="table-responsive">
                        <table class="mdc-data-table__table" aria-label="Dessert calories">
                            <tbody class="mdc-data-table__content">
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Nom du Groupe
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
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Nom" value="Administrateur" required>
                                  </td>									  
                                </tr>
                                
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Groupe Parent 
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true" ></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div> 																			
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                 <td class="mdc-data-table__cell">
                                        <select class="mdl-selectfield__select" id="professsion1" name="professsion" style="width:50%;">
                                          <option value="option1"selected> - </option>
                                          <option value="option1">Sécretaire</option>
                                          <option value="option2">Principal</option>
                                          <option value="option2">Surveillant</option>
                                        </select>
                                    </td>										  
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Description
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
                                    <input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="Description" value="Administration complète de l'Etablissement" required>
                                  </td>									  
                                </tr>					
                            </tbody>
                        </table>
                        
                        

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
                                                <div class="widget-heading font-weight-bold">Date de création
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div> 																			
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">16-07-2021 00:14</td>									  
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Date de dernière modification
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div> 																			
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">16-07-2021 00:14</td>									  
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Auteur
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div> 																			
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">Roméo NKE</td>									  
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                                                   
                                </tr>									
                            </tbody>
                        </table>
                        
                        
                        
                        
                         
                        
                        
                        <div class="mdc-card" style="text-align:right;">
                          
                          <section class="mdc-card__supporting-text">
                            <div class="template-demo">
                              
                              <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                &nbsp; <a href="utilisateur-groupe-profil.html" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
                              </button>
                              <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
                                <i class="material-icons mdc-button__icon">colorize</i>
                              </button> -->
                              
                                  <button class="mdc-button mdc-button--success icon-button" >
                                    &nbsp; <a href="utilisateur-groupe-profil.html"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
                                    &nbsp;<span style="color:white;">Enregistrer &nbsp; </span></a>
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