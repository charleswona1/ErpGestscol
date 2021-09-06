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
                  <center><h6 class="card-title" style="color:grey;">Fiche du Groupe Utilisateur</h6></center>
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
													<div class="widget-heading font-weight-bold">Nom du Groupe d'utilisateur
														&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
														&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									  </td>
									  <td class="mdc-data-table__cell">{{$profil->libelle}}</td>
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
									  <td class="mdc-data-table__cell">{{$profil->description}}</td>
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
									  <td class="mdc-data-table__cell">{{$nbreUser}}</td>
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

						  <button class="mdc-button mdc-button--raised icon-button filled-button--dark">
							<a href="utilisateur-groupe-profiledit.html"><i class="material-icons mdc-button__icon" style="color:white;">edit</i></a>
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
			<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

							<div >
								<table style="text-align:center;">
								  <tr>
									<td class="mdc-data-table__cell">
										<a href="utilisateur-groupe.html">
											<button class="mdc-button mdc-button--dark icon-button" >
													&nbsp; <a href="utilisateur-groupe.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i>
													&nbsp;<span style="color:white; font-size:0.9em;">Fermer &nbsp; </span></a>
											</button>
										</a>
									</td>
								  </tr>
								</table>
							</div>
						</div>
          </div>
        </main>
      </div>
      @endsection

      @section('script')

      @endsection
