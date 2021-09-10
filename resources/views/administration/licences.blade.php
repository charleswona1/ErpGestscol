@extends('administration.principal')

  @section('content')
  <?php //dd($modules) ?>
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">

			  <div class="fab">
				<button class="mdc-button mdc-menu-button mdc-button--raised icon-button secondary-filled-button fab-icon">
                    <i class="material-icons mdc-button__icon">&nbsp;add</i>&nbsp; Créer une Licence &nbsp;
                </button>
				<form class='cntt-wrapper'>
					@csrf
					<div id="fab-hdr">
					   <h5 class="card-title card-padding pb-0">Formulaire de Licence</h5>
					</div>
									<div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <table class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
						<tr>
						<td>
						  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
							<div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
							  <input type="hidden" name="enhanced-select" id="id_etablissement" required>
							  <i class="mdc-select__dropdown-icon"></i>
							  <div class="mdc-select__selected-text"></div>
							  <div class="mdc-select__menu mdc-menu-surface demo-width-class">
								<ul class="mdc-list">
								  <!-- <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
								  </li> -->
								  	@foreach($modules[2] as $etablissement)
									  <li class="mdc-list-item" data-value="{{$etablissement->id_etablissement}}">
										{{$etablissement->nom}}
									  </li>
									@endforeach
								</ul>
							  </div>
							  <span class="mdc-floating-label">Etablissement</span>
							  <div class="mdc-line-ripple"></div>
							</div>
						  </div>
						</td>
						<td>
							<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
							<div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
							  <input type="hidden" name="enhanced-select" id="id_module" required>
							  <i class="mdc-select__dropdown-icon"></i>
							  <div class="mdc-select__selected-text"></div>
							  <div class="mdc-select__menu mdc-menu-surface demo-width-class">
								<ul class="mdc-list">
								  <!-- <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
								  </li> -->
								  @foreach($modules[1] as $module)
									  <li class="mdc-list-item" data-value="{{$module->id_module}}">
										{{$module->nom}}
									  </li>
									@endforeach
								</ul>
							  </div>
							  <span class="mdc-floating-label">Module</span>
							  <div class="mdc-line-ripple"></div>
							</div>
						  </div>
	                     </td>
						 </tr>
						</table>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6	">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="date" id="id_date_debut" required>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"  class="mdc-floating-label">Date début</label>
                          </div>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="date" id="id_date_expiration" required>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"  class="mdc-floating-label">Date d'expiration</label>
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
                          <a href="utilisateurs.html" id="cancel" class="mdc-button mdc-button--label w-100">
                            Annuler
                          </a>
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                          <a class="mdc-button mdc-button--raised w-100" onclick="saveLicence()">
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
                   <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Licences enrégitrées</h6></center>

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
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom de l'Etablissemnt</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Module</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Numéro de Licence</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date début</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Date d'expirationn</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Temps Restant</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">status</th>
						  <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
						</tr>
					  </thead>
					  <tbody class="mdc-data-table__content">
					  	@foreach($modules[0] as $module)
						<tr data-row-id="u0" class="mdc-data-table__row" id="licence{{$module['id_mod']}}">
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
                                        <div class="widget-heading font-weight-bolder">{{$module['nom']}}
										&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
										<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
										&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
										&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
										</div>
                                    </div>
                                </div>
						  </td>
						  <td class="mdc-data-table__cell">{{$module['module']}}</td>
						  <td class="mdc-data-table__cell">{{$module['numero_licence']}}</td>
						  <td class="mdc-data-table__cell">{{$module['date_debut']}}</td>
						  <td class="mdc-data-table__cell">{{$module['expiration']}}</td>
						  <td class="mdc-data-table__cell">{{$module['nbreJ']}} Jours</td>
						  <!-- <td class="mdc-data-table__cell mdc-data-table__cell--numeric">Tous</td> -->
						  <td class="mdc-data-table__cell">
						  	@if($module['nbreJ'] > 0 && $module['nbreJ'] < 10 && $module['status'] > 0)
							 	<button class="mdc-button text-button--warning">
							  		En cours
								</button>
							@elseif($module['status'] > 0 && $module['nbreJ'] > 0)
								<button class="mdc-button text-button--success">
							  		En cours
								</button>
							@elseif($module['status'] == 0 && $module['nbreJ'] > 0)
								<button class="mdc-button text-button--info">
							  		Bloquée
								</button>
							@elseif($module['nbreJ'] <= 0 )
								<button class="mdc-button text-button--danger">
							  		Terminé
								</button>
							@else
								{{$module['status']}}  {{$module['nbreJ']}}
							@endif
						  </td>
						  <td class="mdc-data-table__cell">
							<a href="/administrateur/detail_licence/{{$module['id_mod']}}"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a>
							<a href="/administrateur/modif_licence/{{$module['id_mod']}}"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">edit</i></a>
							<a href=""><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">print</i></a>
							<a onclick="delete_licence('{{$module['id_mod']}}')"><i class="material-icons mdc-text-field__icon" style="color:red; font-size:1.5em;">delete</i></a>
						  </td>
						</tr>
						@endforeach
					  </tbody>
					</table>
                  </div>
                </div>
              </div>
			</div>
          </div>
        </main>
@endsection
