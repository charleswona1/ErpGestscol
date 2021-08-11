@extends('administration.principal')

  @section('content')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
			  <div class="fab">
				<button class="mdc-button mdc-menu-button mdc-button--raised icon-button secondary-filled-button fab-icon">
                    <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Ajouter Etablissement &nbsp;
                </button>
				<form class='cntt-wrapper'>
					<div id="fab-hdr">
					   <h5 class="card-title card-padding pb-0">Création d'un Etablissement</h5>
					</div>
									<div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="nom" required>
                            <div class="mdc-line-ripple"></div>
                            <label for="nom" class="mdc-floating-label">Nom de l'Etablissement</label>
                          </div>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="abreviation">
                            <div class="mdc-line-ripple"></div>
                            <label for="abreviation" class="mdc-floating-label">Abréviation</label>
                          </div>
                        </div>
						
						  
						  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
							<div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
							  <input type="hidden" name="enhanced-select">
							  <i class="mdc-select__dropdown-icon"></i>
							  <div class="mdc-select__selected-text"></div>
							  <div class="mdc-select__menu mdc-menu-surface demo-width-class">
								<ul class="mdc-list">
								  <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
								  </li>
								  <li class="mdc-list-item" data-value="Maternelle">
									Maternelle
								  </li>
								  <li class="mdc-list-item" data-value="Primaire">
									Primaire
								  </li>
								  <li class="mdc-list-item" data-value="Secondaire">
									Secondaire
								  </li>
								  <li class="mdc-list-item" data-value="Universite">
									Université
								  </li>
								</ul>
							  </div>
							  <span class="mdc-floating-label">Type d'Etablissement</span>
							  <div class="mdc-line-ripple"></div>
							</div>
						  </div>
						
						
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="ville">
                            <div class="mdc-line-ripple"></div>
                            <label for="ville" type="" class="mdc-floating-label">Ville</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="boite_postale">
                            <div class="mdc-line-ripple"></div>
                            <label for="boite_postale" class="mdc-floating-label">Boite postal</label>
                          </div>
                        </div>
                        
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="phone" id="telephone">
                            <div class="mdc-line-ripple"></div>
                            <label for="telephone" class="mdc-floating-label">Téléphone</label>
                          </div>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="email" id="email">
                            <div class="mdc-line-ripple"></div>
                            <label for="email" class="mdc-floating-label">Email</label>
                          </div>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="fax">
                            <div class="mdc-line-ripple"></div>
                            <label for="fax" type="" class="mdc-floating-label">Fax</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8-desktop">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="site_web">
                            <div class="mdc-line-ripple"></div>
                            <label for="site_web" class="mdc-floating-label">Site web</label>
                          </div>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="localisation">
                            <div class="mdc-line-ripple"></div>
                            <label for="localisation" class="mdc-floating-label">Localisation</label>
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
                          <a href="etablissements.html" id="cancel" class="mdc-button mdc-button--label w-100">
                            Annuler
                          </a>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                          <a href="etablissements.html"  class="mdc-button mdc-button--raised w-100">
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
                   <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Liste des Etablissements</h6></center>
				  
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
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom de l'Etablissement | Responsable</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Abréviation</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Type d'établissement</th>	
                          <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Ville</th>						  
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">T&eacute;l&eacute;phone</th>
						  
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
                                                                <div class="widget-heading font-weight-bolder">Collège François Xavier VOGT
																&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
																<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
																&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
																&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
																</div> 
                                                                <div class="widget-subheading text-muted opacity-7">Père Georges Lissoumé</div>
                                                            </div>
                                                        </div>
						  </td>
						  <td class="mdc-data-table__cell">CFXV</td>
						  <td class="mdc-data-table__cell">Secondaire</td>
						  <td class="mdc-data-table__cell">Yaoundé</td>
						  <td class="mdc-data-table__cell">+237 650 02 78 95</td>
						  <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
						  
						  <td class="mdc-data-table__cell">
							<a href="etablissement-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
							<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
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
						  <td class="mdc-data-table__cell" scope="row" id="u1">
							<div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading font-weight-bolder">Centre Communautaire de l'Enfance 
																&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
																<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
																&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
																&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
																</div> 
                                                                <div class="widget-subheading text-muted opacity-7">Soeur Juliette</div>
                                                            </div>
                                                        </div>
						  </td>
						  <td class="mdc-data-table__cell">CCE</td>
						  <td class="mdc-data-table__cell">Primaire</td>
						  <td class="mdc-data-table__cell">Yaoundé</td>
						  <td class="mdc-data-table__cell">+237 655 56 04 04</td>
						  <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
						  
						  <td class="mdc-data-table__cell">
							<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
							<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
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
						  <td class="mdc-data-table__cell" scope="row" id="u1">
							<div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading font-weight-bolder">PREPAVOGT Mangement et Finances
																&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
																<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
																&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
																&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
																</div> 
                                                                <div class="widget-subheading text-muted opacity-7">Caryon Duplond</div>
                                                            </div>
                                                        </div>
						  </td>
						  <td class="mdc-data-table__cell">PREPA-MF</td>
						  <td class="mdc-data-table__cell">Université</td>
						  <td class="mdc-data-table__cell">Yaoundé</td>
						  <td class="mdc-data-table__cell">+237 678 15 24 75</td>
						  <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
						  
						  <td class="mdc-data-table__cell">
							<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
							<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
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
        </main>
@endsection