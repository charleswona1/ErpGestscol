@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">   
          <div class="fab">
            <button class="mdc-button mdc-menu-button mdc-button--dark icon-button secondary-filled-button fab-icon">
                <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Créer une Année Solaire &nbsp;
            </button>
            <form class='cntt-wrapper'>
                <div id="fab-hdr">
                   <h5 class="card-title card-padding pb-0">Création d'une Année Scolaire</h5>
                </div>
                                <div class="mdc-layout-grid">
                  <div class="mdc-layout-grid__inner">
                    
                    
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12	">
                      <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="text-field-hero-input" required>
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Libellé</label>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                      <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="text-field-hero-input" >
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Date début</label>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6	">
                      <div class="mdc-text-field w-100">
                        <input class="mdc-text-field__input" type="date-picker" id="text-field-hero-input" >
                        <div class="mdc-line-ripple"></div>
                        <label for="text-field-hero-input"  class="mdc-floating-label">Date fin</label>
                      </div>
                    </div>
                    
                    
                    
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                      <div class="mdc-form-field">
                        <div class="mdc-checkbox">
                          
                           
                        </div>

                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                      
                    </div>
                    
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                      <a href="annees-scolaires.html" id="cancel" class="mdc-button mdc-button--secondary w-100">
                        Annuler
                      </a>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                      <a href="annees-scolaires.html"  class="mdc-button mdc-button--dark w-100">
                        Enregistrer
                      </a>
                    </div>
                    
                    <!-- <button class="mdl-button mdl-js-button" id="cancel">Cancel</button> -->
                  </div>
                </div>

            </form>
          </div>
                      
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
            <div class="d-flex justify-content-between">
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Années Scolaires</h6></center>
              
              <div class="template-demo">
                    
                    <div class="menu-button-container">
                      <button class="mdc-button mdc-menu-button">
                        <i class="material-icons mdc-button__icon">settings</i>
                      </button>
                      <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">print</i>&nbsp; Imprimer</h6>
                          </li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">do_not_disturb_on</i>&nbsp; Clôturer</h6>
                          </li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">https</i>&nbsp; Verouiller</h6>
                          </li>
                          <li class="mdc-list-divider"></li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="color:red; font-size:1.2em;">move_to_inbox</i>&nbsp; Archiver</h6>
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
                      <th class="mdc-data-table__header-cell mdc-data-table__header-cell--checkbox" role="columnheader" scope="col">
                        <div class="mdc-checkbox mdc-data-table__header-row-checkbox mdc-checkbox--selected">
                          <input type="checkbox" class="mdc-checkbox__native-control" aria-label="Toggle all rows"/>
                          <div class="mdc-checkbox__background">
                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                              <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                            </svg>
                            <div class="mdc-checkbox__mixedmark"></div>
                          </div>
                          <div class="mdc-checkbox__ripple"></div>
                        </div>
                      </th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Libélé</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date de Début</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date de Fin</th>						  
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Status</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                        <div class="mdc-checkbox mdc-data-table__row-checkbox">
                          <input type="checkbox" class="mdc-checkbox__native-control" aria-labelledby="u0"/>
                          <div class="mdc-checkbox__background">
                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                              <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
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
                                                            <div class="widget-heading font-weight-bolder">Année Scolaire 2020/2021
                                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div> 
                                                        </div>
                                                    </div>
                      </td>
                      <td class="mdc-data-table__cell">25/07/2020</td>
                      <td class="mdc-data-table__cell">25/07/2021</td>
                      <td class="mdc-data-table__cell">
                        <button class="mdc-button text-button--success">
                          En Cours
                        </button>
                      </td>
                      <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                       
                      <td class="mdc-data-table__cell">
                        <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                        <a href="etablissement-matriculedit.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                        <!-- <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a> -->
                        <a href=""><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
                      </td>
                    </tr>
                    
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell mdc-data-table__cell--checkbox">
                        <div class="mdc-checkbox mdc-data-table__row-checkbox">
                          <input type="checkbox" class="mdc-checkbox__native-control" aria-labelledby="u0"/>
                          <div class="mdc-checkbox__background">
                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                              <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
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
                                                            <div class="widget-heading font-weight-bolder">Année Scolaire 2019/2020
                                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div> 
                                                        </div>
                                                    </div>
                      </td>
                      <td class="mdc-data-table__cell">25/07/2019</td>
                      <td class="mdc-data-table__cell">25/07/2020</td>
                      <td class="mdc-data-table__cell">
                        <button class="mdc-button text-button--secondary">
                          Vérouillée
                        </button>
                      </td>
                      <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                      <td class="mdc-data-table__cell">
                        <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                        <a href="licence-profiledit.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                        <!-- <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a> -->
                        <a href=""><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
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
                                    <a href="annees-scolaires.html">
                                        <button class="mdc-button mdc-button--success icon-button" >
                                                &nbsp; <a href="annees-scolaires.html"><i class="material-icons mdc-button__icon" style="color:white;">
                                                check_circle</i> 
                                                &nbsp;<span style="color:white; font-size:0.8em;">Mettre en Cours &nbsp; </span></a>
                                        </button>
                                    </a>
                                        </td>
                                        <td class="mdc-data-table__cell">
                                    <a href="annees-scolaires.html">
                                        <button class="mdc-button mdc-button--secondary icon-button" >
                                                &nbsp; <a href="annees-scolaires.html"><i class="material-icons mdc-button__icon" style="color:white;">https</i> 
                                                &nbsp;<span style="color:white; font-size:0.8em;">Vérouiller &nbsp; </span></a>
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