@extends('administration.principal')

  @section('content')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="mdc-card">
                  <center><h6 class="card-title" style="color:grey;">Fiche de Licence </h6></center>
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
									  <td class="mdc-data-table__cell">{{$module['nom']}}</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Num??ro de licence
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{$module['numero_licence']}}</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Date de d??but
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{$module['date_debut']}}</td>
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
									  <td class="mdc-data-table__cell">{{$module['expiration']}}</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Modules
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
										<button class="mdc-button mdc-button--unelevated filled-button--warning" style="margin:none; font-size:0.9em;">
											{{$module['module']}}
										</button>
									  </td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">

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
												@if($module['status'] == 1)
													<input type="checkbox" id="basic-switch" class="mdc-switch__native-control" role="switch" checked>
												@else
													<input type="checkbox" id="basic-switch" class="mdc-switch__native-control" role="switch">
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
									  	@if($module['nbreJ'] > 0)
												<button class="mdc-button mdc-button--unelevated filled-button--success" style="margin:none; font-size:0.9em;">
												En cours
											  </button>
										@else

										  <button class="mdc-button mdc-button--unelevated filled-button--error" style="margin:none; font-size:0.9em;">
											en Arret
										  </button>
										@endif
									  </td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Date et Heure de cr??ation
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{$module['date_debut']}}</td>
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
													<div class="widget-heading font-weight-bold">Nombre de jours restants
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{$module['nbreJ']}} Jours</td>
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

                      <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                        <i class="material-icons mdc-button__icon">delete</i>
                      </button>
                      <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
                        <i class="material-icons mdc-button__icon">colorize</i>
                      </button> -->

						  <button class="mdc-button mdc-button--raised icon-button filled-button--info">
							<a href="licence-profiledit.html"><i class="material-icons mdc-button__icon">edit</i></a>
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
