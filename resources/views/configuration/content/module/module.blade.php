@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">   

            
            
            
            
            
            

            
          <div class="fab" style="width: 60%;">
            <button class="mdc-button mdc-menu-button mdc-button--dark icon-button secondary-filled-button fab-icon">
                <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Nouvel Affectation &nbsp;
            </button>
            <form class='cntt-wrapper'>
                <div id="fab-hdr">
                   <h5 class="card-title card-padding pb-0">Affectation des Opérations de Groupe par Module</h5>
                </div>
                                <div class="mdc-layout-grid">
                  <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12	">
                <table class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                  <tr>
                    <td>
                      <div class=class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                        <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                          <input type="hidden" name="enhanced-select" required>
                          <i class="mdc-select__dropdown-icon"></i>
                          <div class="mdc-select__selected-text"></div>
                          <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                            <ul class="mdc-list">
                              <!-- <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                              </li> -->
                              <li class="mdc-list-item" data-value="grains">
                                Administrateur
                              </li>
                              <li class="mdc-list-item" data-value="vegetables">
                                Principal
                              </li>
                              <li class="mdc-list-item" data-value="grains">
                                Sécrétaire
                              </li>
                              <li class="mdc-list-item" data-value="grains">
                                Surveillant
                              </li>
                            </ul>
                          </div>
                          <span class="mdc-floating-label">Groupe de Compte</span>
                          <div class="mdc-line-ripple"></div>
                        </div>
                      </div>
                    </td>
                    </tr>
                  <tr>
                    <td>
                        <div class=class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                        <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                          <input type="hidden" name="enhanced-select" required>
                          <i class="mdc-select__dropdown-icon"></i>
                          <div class="mdc-select__selected-text"></div>
                          <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                            <ul class="mdc-list">
                              <!-- <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                              </li> -->
                              <li class="mdc-list-item" data-value="grains">
                                Gestscol
                              </li>
                              <li class="mdc-list-item" data-value="vegetables">
                                Caisse
                              </li>
                            </ul>
                          </div>
                          <span class="mdc-floating-label">Module</span>
                          <div class="mdc-line-ripple"></div>
                        </div>
                      </div>
                     </td>
                     </tr>
                </table>
                <table class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Appréciation Automatique des Notes</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Attributions Matières et Enseignant par Classe</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Bourses Disponibles</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Bourses Scolaires</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Bulletin de Fin d'Année</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Bulletin Séquentiel</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Certificats de Radiation</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Certificats de Scolarité</label>
                                        </div>
                    </td>
                  </tr>
                </table>
                
                <table class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Changer de Mot de Passe</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Clôture de Fin d'Année Scolaire</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Clôture de Période</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Clôture de Sous-Période</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Consultation de Notes</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Création d'une Année Académique</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked  />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Création de Notes Spéciales</label>
                                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                            <input type="checkbox"
                                                    id="basic-disabled-checkbox"
                                                    class="mdc-checkbox__native-control"
                                                    checked />
                                            <div class="mdc-checkbox__background">
                                              <svg class="mdc-checkbox__checkmark"
                                                    viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path"
                                                      fill="none"
                                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                              </svg>
                                              <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                          </div>
                                          <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Décision de Fin d'Année et Résultats aux Examens</label>
                                        </div>
                    </td>
                  </tr>
                </table>
                  
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
                      <a href="modules.html" id="cancel" class="mdc-button mdc-button--secondary w-100">
                        Annuler
                      </a>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                      <a href="modules.html"  class="mdc-button mdc-button--success w-100">
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
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Affectation des Modules par Groupe</h6></center>
              
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
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">file_upload</i>&nbsp; Exporter</h6>
                          </li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="font-size:1.2em;">file_download</i>&nbsp; Importer</h6>
                          </li>
                          <li class="mdc-list-divider"></li>
                          <li class="mdc-list-item" role="menuitem">
                            <h6 class="item-subject font-weight-normal"><i class="material-icons" style="color:red; font-size:1.2em;">delete</i>&nbsp; Supprimer</h6>
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
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Groupes d'utilisateurs</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Modules</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nombre d'utilisateurs</th>						  
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">statut</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Action</th>
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
                                                            <div class="widget-heading font-weight-bolder">Administrateur
                                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div> 
                                                        </div>
                                                    </div>
                      </td>
                      <td class="mdc-data-table__cell"> Gestscol</td>
                      <td class="mdc-data-table__cell">02</td>
                      
                      <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                      <td class="mdc-data-table__cell">
                         <button class="mdc-button text-button--success">
                          Activé
                        </button>
                      </td>
                      <td class="mdc-data-table__cell">
                        <a href="utilisateur-groupe-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
                        <a href="utilisateur-groupe-profiledit.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                        <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
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
                                                            <div class="widget-heading font-weight-bolder">Administrateur
                                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div> 
                                                        </div>
                                                    </div>
                      </td>
                      <td class="mdc-data-table__cell"> Caisse</td>
                      <td class="mdc-data-table__cell">02</td>
                      
                      <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                      <td class="mdc-data-table__cell">
                         <button class="mdc-button text-button--success">
                          Activé
                        </button>
                      </td>
                      <td class="mdc-data-table__cell">
                        <a href="utilisateur-groupe-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
                        <a href="utilisateur-groupe-profiledit.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                        <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
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
                                                            <div class="widget-heading font-weight-bolder">Sécrétaire
                                                            &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                            &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div> 
                                                        </div>
                                                    </div>
                      </td>
                      <td class="mdc-data-table__cell"> Gestscol</td>
                      <td class="mdc-data-table__cell">06</td>
                      
                      <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
                      <td class="mdc-data-table__cell">
                         <button class="mdc-button text-button--success">
                          Activé
                        </button>
                      </td>
                      <td class="mdc-data-table__cell">
                        <a href="utilisateur-groupe-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
                        <a href="utilisateur-groupe-profiledit.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
                        <a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
                        <a href=""><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
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