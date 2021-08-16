@extends('administration.principal')
@section('css')
    <style>
        .alert {
            padding: 12px 16px;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            margin-bottom: 12px;
            font-size: 16px;
        }

        .alert.alert-success {
            background-color: rgba(227, 253, 235, 1);
            border-color: rgba(38, 179, 3, 1);
            color: rgba(60, 118, 61, 1);
        }

    </style>
@endsection
@section('content')
<main class="content-wrapper">
	<div class="mdc-layout-grid">
	  <div class="mdc-layout-grid__inner">   		  
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
		  <div class="mdc-card p-0">
		  <div class="mdc-card">
			
			<center><h6 class="card-title" style="color:grey;">Modification de l'Etablissement </h6>
				<div id="alerte"></div></center>
			<br/>
			<div class="template-demo">
			  <div class="mdc-layout-grid__inner">
				<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
				  <div>
					<a href="index.html" class="brand-logo">
					   <img src="/assets1/images/faces/logo.jpg" height="180px" width="180px"  alt="user" class="user">
					</a>
					<p>
					  <form>
						<div class="form-group">
						  <input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>
					  </form>	
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
								<td class="mdc-data-table__cell">
								  <input type="text" class="form-control" style="width:100%"   id="nom" name="nom" placeholder="Nom" value="{{ $etablissement[0]->nom }}" required>
								</td>									  
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
								<td class="mdc-data-table__cell">
								  <input type="text" class="form-control" style="width:100%" id="responsable" name="responsable"  placeholder="Responsable" value="Père Georges Lissoumé" required>
								</td>									  
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
								<td class="mdc-data-table__cell">
								  <input type="text" class="form-control" style="width:100%" id="abreviation" name="abreviation" value="{{ $etablissement[0]->abreviation }}" placeholder="abreviation" required>
								</td>								  
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
								<td class="mdc-data-table__cell">
								  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                        <input type="hidden" name="type_etablissement" value="{{ $etablissement[0]->type_etablissement }}" id="type_etablissement">
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                            <ul class="mdc-list">
                                                <li class="mdc-list-item mdc-list-item--selected" data-value=""
                                                    aria-selected="true">
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
                                     
                                    </div>
                                </div>
								</td>									  
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
								<td class="mdc-data-table__cell">
								  <input type="text" class="form-control" style="width:100%" name="ville" id="ville" placeholder="Ville" value="{{ $etablissement[0]->ville }}" required>
								</td>									  
							  </tr>
							  <tr data-row-id="u0" class="mdc-data-table__row">
								<td class="mdc-data-table__cell" scope="row" id="u0">
								  <div class="widget-content p-0">
									  <div class="widget-content-wrapper">																		
										  <div class="widget-content-left flex2">
											  <div class="widget-heading font-weight-bold">Boite postale
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
								  <input type="text" class="form-control" style="width:100%" name="boite_postale" id="boite_postale" placeholder="Ville" value="2454 Ydé" required>
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
								  <input type="text" class="form-control" style="width:100%" id="telephone" name="telephone" placeholder="Téléphone" value="{{ $etablissement[0]->telephone }}" required>
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
								  <input type="text" class="form-control" style="width:100%" id="email" name="email" placeholder="Email" value="{{ $etablissement[0]->email }}" required>
								</td>
							  </tr>
							  <tr data-row-id="u0" class="mdc-data-table__row">
								<td class="mdc-data-table__cell" scope="row" id="u0">
								  <div class="widget-content p-0">
									  <div class="widget-content-wrapper">																		
										  <div class="widget-content-left flex2">
											  <div class="widget-heading font-weight-bold">Site web
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
								  <input type="text" class="form-control" style="width:100%" id="site_web" name="site_web" placeholder="Site web" value="{{ $etablissement[0]->site_web }}" required>
								</td>
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
								<td class="mdc-data-table__cell">
								  <input type="text" class="form-control" style="width:100%" id="localisation" name="localisation" placeholder="Localisation" value="{{ $etablissement[0]->localisation }}" required>
								</td>
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
				  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
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
								
								  <td class="mdc-data-table__cell">
									  <select class="mdl-selectfield__select" id="professsion1" name="professsion">
										<option value=""></option>
										<option value="option1">Maternelle</option>
										<option value="option2">Primaire</option>
										<option value="option3" selected>Secondaire</option>
										<option value="option4">Université</option>
										<option value="option4">Centre de Formation</option>
									  </select>
								  </td>

									
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
											  <div class="widget-heading font-weight-bold">Effectif
												  &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
												  <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
												  &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
												  &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
											  </div> 																			
										  </div>
									  </div>
								  </div>
								</td>
								<td class="mdc-data-table__cell">2548</td>									  
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
							  &nbsp; <a href="{{ route('administration.etablissement') }}" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
							</button>
							<!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
							  <i class="material-icons mdc-button__icon">colorize</i>
							</button> -->
							
								<button onclick="editEtablissement({{ $etablissement[0]->id_etablissement }})" class="mdc-button mdc-button--raised icon-button" >
								  &nbsp; <a ><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
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
@section('script')
	<script>
		function editEtablissement(id) {
			var nom = $("#nom").val()
            var telephone = $("#telephone").val()
            var email = $("#email").val()
            var abreviation = $("#abreviation").val()
            var type_etablissement = $("#type_etablissement").val()
            var ville = $("#ville").val()
            var boite_postale = $("#boite_postale").val()
            var fax = $("#fax").val()
            var site_web = $("#site_web").val()
            var localisation = $("#localisation").val()
            const alerte = document.getElementById('alerte')

			$.ajax({
                url: "{{ route('etablissement.modif') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
					id:id,
                    nom: nom,
                    telephone: telephone,
                    email: email,
                    abreviation: abreviation,
                    type_etablissement: type_etablissement,
                    ville: ville,
                    boite_postale: boite_postale,
                    fax: fax,
                    site_web: site_web,
                    localisation: localisation,
                },
                success: function(response) {
					
                    alerte.innerHTML = '<div class="alert alert-success ml-5 mr-5" role="alert">' +
                        response.message + '</div>'
						window.location.replace("{{ route('administration.etablissement') }}");
                },
                error: function(err) {
                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        alert(err)

                    }

                }
            });
		}
	</script>
@endsection