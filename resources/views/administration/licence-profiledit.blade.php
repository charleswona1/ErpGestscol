@extends('administration.principal')

  @section('content')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">		  
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="mdc-card">
                  <center><h6 class="card-title" style="color:grey;">Modification de la Licence </h6></center>
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
													<div class="widget-heading font-weight-bold">Nom de l'Etablissement
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div> 																			
												</div>
											</div>
										</div>
									  </td>
									   <td class="mdc-data-table__cell">Collège François Xavier VOGT</td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Numéro de licence
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div> 																			
												</div>
											</div>
										</div>
									  </td>
									   <td class="mdc-data-table__cell">S2021-0003</td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Date de début 
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
										<input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="date debut" value="16-06-2021" required>
									  </td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Date d'expiration 
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
										<input type="text" class="form-control" style="width:100%" id="validationCustom01" placeholder="date expiration" value="15-06-2022" required>
									  </td>								  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Module
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
											<select class="mdl-selectfield__select" id="professsion1" name="professsion">
											  <option value=""></option>
											  <option value="option1" selected>Gestscol</option>
											  <option value="option2">Caisse</option>
											  <option value="option3" >RH&Paye</option>
											  <option value="option4">Comptabilité</option>
											</select>
										</td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									 								  
									</tr>	
									</tbody>
							</table>
						<!--	</table>
								</tbody>
<tr>									  
										<td class="mdc-data-table__cell">
										<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                          <a href="utilisateur-profil.html" class="mdc-button mdc-button--label w-100">
                            Annuler
                          </a>
						  </td>
						  <td class="mdc-data-table__cell">
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                          <a href="utilisateur-profil.html"  class="mdc-button mdc-button--raised w-100">
                            Mettre à jour
                          </a>
                        </div>
										</td>
									</tr>	
									
					            </tbody>
							</table>  -->
					      </div>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
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
													<div class="widget-heading font-weight-bold">Date et Heure de création 
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div> 																			
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">16-06-2021 00:14</td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Vendeur
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div> 																			
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">Gilles Fabrizio ZANETTIN</td>									  
									</tr>
									
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Nombre d'utilisateurs
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div> 																			
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">15</td>									  
									</tr>
									
									<tr data-row-id="u0" class="mdc-data-table__row">
									 								  
									</tr>									
					            </tbody>
							</table>
							<br/>
							<br/>
							
							<div class="mdc-card" style="text-align:right;">
							  <section class="mdc-card__primary">
								<h6 class="card-title"></h6>
							  </section>
							  <section class="mdc-card__supporting-text">
								<div class="template-demo">
								  
								  <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
									&nbsp; <a href="licence-profil.html" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
								  </button>
								  <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
									<i class="material-icons mdc-button__icon">colorize</i>
								  </button> -->
								  
									  <button class="mdc-button mdc-button--raised icon-button" >
										&nbsp; <a href="licence-profil.html"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
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
            
			
			
			
			
			
			
			
			
			
			
          </div>
        </main>
@endsection