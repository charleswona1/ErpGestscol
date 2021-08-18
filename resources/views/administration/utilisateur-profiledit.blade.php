@extends('administration.principal')

  @section('content')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">		  
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
				
				  
				    
            
              
                <div class="mdc-card">
                  <center><h6 class="card-title" style="color:grey;">Modification du Profile </h6></center>
				  <br/>
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5-desktop">
                        <div class="table-responsive">
							<table class="mdc-data-table__table" aria-label="Dessert calories">
								<tbody class="mdc-data-table__content">
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Nom complet 
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
										<input type="text" class="form-control" style="width:100%" id="nom" placeholder="Nom complet" value="{{$admin->nom}}" />
									  </td>									  
									</tr>
									
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Téléphone 
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
										<input type="text" class="form-control" style="width:100%" id="telephone" placeholder="Téléphone" value="+237 691 87 74 03" required>
									  </td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Email
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
										<input type="text" class="form-control" style="width:100%" id="email" placeholder="Email" value="{{$admin->email}}" required />
									  </td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Login
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
										<input type="text" class="form-control" style="width:100%" id="login" placeholder="Login" value="" required />
									  </td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Mots de Passe
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
										<input type="password" class="form-control" style="width:100%" id="password" placeholder="Mot de passe" value="" required>
									  </td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Confirmer Mots de Passe
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
										<input type="password" class="form-control" style="width:100%" id="confirm_password" placeholder="Confirmer Mot de passe" value="" required>
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
									<tr data-row-id="u0" class="mdc-data-table__row" style="width:100%;">
									  <td class="mdc-data-table__cell" scope="row" id="u0" style="width:30%;">
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
									@if($admin->enabled == 0)
										<input type="checkbox" id="basic-switch" class="mdc-switch__native-control" id="enabled" role="switch" />
									@else
										<input type="checkbox" id="basic-switch" class="mdc-switch__native-control" id="enabled" role="switch" checked />
									@endif
								</div>
							  </div>
						  </td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold" style="width:30%;">Type de compte
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div> 																			
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">Super Administrateur</td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0" style="width:30%;">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Etablissements
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
										<select id="multiselect" multiple="multiple" style="height:130px;">
										  <option selected>Collège François Xavier Vogt</option>
										  <option selected>Prépavogt IRCOM</option>
										  <option selected>Prépavogt MF</option>
										  <option selected>CETIC Jeanne Alegue</option>
										  <option selected>Centre Communautaire de l'Enfance</option>
										  <option selected>Lycée Technique d'Obala</option>
										</select>										 
									  </td>									  
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
									&nbsp; <a href="utilisateur-profil.html" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
								  </button>
								  <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
									<i class="material-icons mdc-button__icon">colorize</i>
								  </button> -->
								  
									  <button class="mdc-button mdc-button--raised icon-button" onclick="modif_admin({{$admin->id}})">
										&nbsp; <a><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
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