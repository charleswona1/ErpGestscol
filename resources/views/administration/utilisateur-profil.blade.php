@extends('administration.principal')

  @section('content')
  <?php //dd($admin) ?>
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">   

				
				
				
				
				
				
         
						  
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
				
				  
				    
            
              
                <div class="mdc-card">
                  <center><h6 class="card-title" style="color:grey;">Fiche de l'utilisateur </h6></center>
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
									  <td class="mdc-data-table__cell">{{$admin->nom}}</td>									  
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
									  <td class="mdc-data-table__cell">{{$admin->telephone}}</td>									  
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
									  <td class="mdc-data-table__cell">{{$admin->email}}</td>									  
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
									  <td class="mdc-data-table__cell">{{$admin->login}}</td>									  
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
													<div class="widget-heading font-weight-bold">Statut 
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
									  	@if($admin->enabled == 1)
										  	<button class="mdc-button mdc-button--unelevated filled-button--success">
												Actif
										  	</button>
										 @else
										 	<button class="mdc-button mdc-button--unelevated filled-button--success">
												Désactif
										  	</button>
										 @endif
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
									  <td class="mdc-data-table__cell">{{$admin->creation_date}}</td>									  
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">																		
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Type de compte
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
									  <td class="mdc-data-table__cell" scope="row" id="u0">
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
									  <td class="mdc-data-table__cell">Tous</td>									  
									</tr>
									
									<tr data-row-id="u0" class="mdc-data-table__row">
									 								  
									</tr>									
					            </tbody>
							</table>
							<div class="mdc-card" style="text-align:right;">
                  <section class="mdc-card__primary">
                    <h6 class="card-title"></h6>
                  </section>
                  <section class="mdc-card__supporting-text">
                    <div class="template-demo">
                      
					@if($admin->id_admin != auth()->guard('admins')->user()->id_admin)
                      <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                         <a onclick="supprimer_admin({{ $admin->id_admin }}, 2)" class="mdc-button mdc-button--raised icon-button"><i class="material-icons mdc-button__icon">delete</i></a>
                      </button>
					@endif
                      <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
                        <i class="material-icons mdc-button__icon">colorize</i>
                      </button> -->
                      
						  <button class="mdc-button mdc-button--raised icon-button filled-button--info">
							<a href="/administrateur/edit_admin/{{$admin->id_admin}}"><i class="material-icons mdc-button__icon">edit</i></a>
						  </button>
					   
                      
                      <button class="mdc-button mdc-button--raised icon-button filled-button--light">
                      	<a href="/administrateur/print_admin/{{$admin->id_admin}}" class="mdc-button mdc-button--raised icon-button">
                        	<i class="material-icons mdc-button__icon">print</i>
                        </a>
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
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="/assets1/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/assets1/js/material.js"></script>
  <script src="/assets1/js/misc.js"></script>
  
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>
            </div>
          </div>
        </main>
@endsection