@extends('administration.principal')

  @section('content')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">

              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">

                <div class="mdc-card">
                  <center><h6 class="card-title" style="color:grey;">Fiche de l'établissement </h6></center>
				  <br/>
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div>
                          <a href="index.html" class="brand-logo">
							 <img src="{{  asset($etablissement[0]->logo?'logos_etablissements/'.$etablissement[0]->logo:'assets1/images/faces/logo.jpg') }}" height="180px" width="180px"  alt="user" class="user">
						  </a>
						  <p>
							<!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID <span style="color:grey;">0000001</span>	-->
						  </p>
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
									  <td class="mdc-data-table__cell">{{ $etablissement[0]->nom }}</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Responsable
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">Père Georges Lissoumé</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Abréviation
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{ $etablissement[0]->abreviation }}</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Type d'établissement
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{ $etablissement[0]->type_etablissement }}</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Ville
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{ $etablissement[0]->ville }}</td>
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
									  <td class="mdc-data-table__cell">{{ $etablissement[0]->telephone }}</td>
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
									  <td class="mdc-data-table__cell">contact@college-vogt</td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">{{ $etablissement[0]->email }}
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell"><a href="http://wwww.college-vogt.org">{{ $etablissement[0]->site_web }}</a></td>
									</tr>
									<tr data-row-id="u0" class="mdc-data-table__row">
									  <td class="mdc-data-table__cell" scope="row" id="u0">
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left flex2">
													<div class="widget-heading font-weight-bold">Localisation
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{ $etablissement[0]->localisation }}</a></td>
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
										  <button class="mdc-button mdc-button--unelevated filled-button--success">
											Actif
										  </button>
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
													<div class="widget-heading font-weight-bold">Type d'apprenants
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">Elèves</td>
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
										<button class="mdc-button mdc-button--unelevated filled-button--warning" style="margin:none; font-size:0.7em;">
											Gestscol
										</button>
										<button class="mdc-button mdc-button--unelevated filled-button--info" style="margin:none; font-size:0.7em;">
											RH&Paye
										</button>
										<button class="mdc-button mdc-button--unelevated filled-button--dark" style="margin:none; font-size:0.7em;">
											Caisse
										</button>
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
									<i class="material-icons mdc-button__icon">delete</i>
								  </button>
								  <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
									<i class="material-icons mdc-button__icon">colorize</i>
								  </button> -->

									  <button class="mdc-button mdc-button--raised icon-button filled-button--info">
										<a href="etablissement-profiledit.html"><i class="material-icons mdc-button__icon">edit</i></a>
									  </button>


								  <button class="mdc-button mdc-button--raised icon-button filled-button--light">
									<i class="material-icons mdc-button__icon">print</i>
								  </button>

								  <a href="javascript:;" class="mdc-button mdc-button--raised icon-button">
									<i class="material-icons mdc-button__icon">get_app</i>
								  </a>
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
