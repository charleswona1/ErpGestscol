@extends('administration.principal')

  @section('content')
  <?php //dd($resultatFinal); ?>
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="mdc-card">
                  <center><h6 class="card-title" style="color:grey;">Modification des Droits d'Accès </h6></center>
				  <br/>
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                     <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                        <div class="table-responsive">
							<table class="mdc-data-table__table" aria-label="Dessert calories">
								<tbody class="mdc-data-table__content">
									@foreach ($resultatFinal as $resultat)
                                        @if ($resultat['id_admin'] == $id)
                                        <?php $taille = $resultat['taille'] ?>
                                            <tr data-row-id="u0" class="mdc-data-table__row">
                                                <td class="mdc-data-table__cell" scope="row" id="u0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bold">{{$resultat['nom_admin']}}
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
                                                        @for($i = 0; $i < $resultat['taille']; $i++)
                                                            <div class="mdc-form-field">
                                                                <div class="mdc-checkbox">
                                                                    @if($resultat[$i]['presence'] == true)

                                                                        <input type="checkbox"
                                                                            id="droit{{$i}}"
                                                                            class="mdc-checkbox__native-control"
                                                                            value="{{$resultat[$i]["id_droit"]}}"
                                                                            checked/>
                                                                    @else
                                                                        <input type="checkbox"
                                                                        id="droit{{$i}}"
                                                                        class="mdc-checkbox__native-control"
                                                                        value="{{$resultat[$i]["id_droit"]}}"/>
                                                                    @endif
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
                                                                <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">{{$resultat[$i]['nom_droit']}}</label>
                                                            </div>
                                                        @endfor
                                                </td>
                                            </tr>
                                        @else
                                            <tr data-row-id="u0" class="mdc-data-table__row">
                                                <td class="mdc-data-table__cell" scope="row" id="u0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bold">{{$resultat['nom_admin']}}
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
                                                        @for($i = 0; $i < $resultat['taille']; $i++)
                                                            <div class="mdc-form-field">
                                                                <div class="mdc-checkbox">
                                                                    @if($resultat[$i]['presence'] == true)
                                                                        <input type="checkbox"
                                                                            id="basic-disabled-checkbox"
                                                                            class="mdc-checkbox__native-control"
                                                                            checked disabled />
                                                                    @else
                                                                        <input type="checkbox"
                                                                        id="basic-disabled-checkbox"
                                                                        class="mdc-checkbox__native-control"
                                                                    disabled />
                                                                    @endif
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
                                                                <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">{{$resultat[$i]['nom_droit']}}</label>
                                                            </div>
                                                        @endfor
                                                </td>
                                                <td class="mdc-data-table__cell" scope="row" id="u0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading font-weight-bold">
                                                                <button class="mdc-button mdc-button--raised icon-button filled-button--info">
                                                                    <a href="{{route("admin.edit_droit", [$resultat['id_admin']])}}" style="color:#fff;"><i class="material-icons mdc-button__icon" >edit</i></a>
                                                                </button>
                                                                &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                                <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                                &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                                &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
								</tbody>
							</table>

							<div class="mdc-card" style="text-align:right;">
							  <section class="mdc-card__primary">
								<h6 class="card-title"></h6>
							  </section>
							  <section class="mdc-card__supporting-text">

                                <div class="template-demo">
                                    <div class="alert alert-success" id="idSuccess" style="display: none; text-align: center;">

                                    </div>
                                    <div class="alert alert-warning" id="idError" style="display: none; text-align: center;">

                                    </div>
                                </div>

								<div class="template-demo">

								  <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
									&nbsp; <a href="config-admin-parametrages.html" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
								  </button>
								  <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
									<i class="material-icons mdc-button__icon">colorize</i>
								  </button> -->

									  <button class="mdc-button mdc-button--raised icon-button" >
										&nbsp; <a onclick="save_droit({{$id}}, {{$taille}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i>
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
        </main>
        <script type="text/javascript">
            function save_droit(id, taille){
                var formData = new FormData();
                var actif, verd;
                for (let i = 0; i < taille; i++) {
                    if ($('#droit'+i).is(":checked")){
                        verd = 1;
                        actif = $('#droit'+i).val();
                    } else {
                        verd = 0;
                        actif = $('#droit'+i).val();
                    }

                    formData.append('droit'+i, actif);
                    formData.append('verd'+i, verd);
                    console.log(actif);
                }
                formData.append('taille', taille);
                formData.append('id', id);


                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'},
                });
                $.ajax({
                    url: "{{route('admin.save_droit')}}",
                    type: "POST",
                    data:formData,
                    processData: false,
                    contentType: false,

                    success:function(response){
                         console.log(response);
                        if(response == 1){
                            $('#idSuccess').css('display','block');
                            $( "#idSuccess" ).empty().append("Droits modifiés avec succes");
                            var fade_out = function() {
                                $("#idSuccess").css('display','none');
                            }
                            setTimeout(fade_out, 5000);
                        }
                    },
                    error: function(response){
                        console.log(response);
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Erreur de modification des droits");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    }
                });
            }
        </script>
        @endsection
