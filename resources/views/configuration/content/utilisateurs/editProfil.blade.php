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
              <center><h6 class="card-title" style="color:grey;">Modification du Profile </h6></center>
              <br/>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                    <div>
                      <a href="index.html" class="brand-logo">
                         <img src="{{ asset('assets1/images/faces/avatar.jpg') }}" height="180px" width="180px"  alt="user" class="user">
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
                                    <input type="text" class="form-control" style="width:100%" id="id_nom" placeholder="Nom complet" value="{{$user['nom']}}" required>
                                  </td>									  
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Fonction 
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
                                    <input type="text" class="form-control" style="width:100%" id="id_groupe" placeholder="Fonction" value="{{$user['groupe']}}" required>
                                  </td>
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
                                    <input type="text" class="form-control" style="width:100%" id="id_tel" placeholder="Téléphone" value="{{$user['telephone']}}" required>
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
                                    <input type="text" class="form-control" style="width:100%" id="id_email" placeholder="Email" value="{{$user['email']}}" required>
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
                                    <input type="password" class="form-control" style="width:100%" id="id_pass" placeholder="Mots de Passe" value="" required>
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
                                    <input type="password" class="form-control" style="width:100%" id="id_confirm" placeholder="Login" value="" required>
                                  </td>
                                </tr>
                                </tbody>
                        </table>
                        
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
                                          @if($user['enable'] != 0)
                                            <input type="checkbox" id="id_enable" class="mdc-switch__native-control" role="switch" checked>
                                          @else
                                            <input type="checkbox" id="id_enable" class="mdc-switch__native-control" role="switch">
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
                                  <td class="mdc-data-table__cell">{{$user['date']}}</td>									  
                                </tr>
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">																		
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Groupe de compte
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div> 																			
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell" style="width:100%;">
                                        <select class="mdl-selectfield__select" id="id_list_groupe" name="Administrateur">
                                          <option value="0" selected>Changer le groupe</option>
                                          @foreach($profils as $profil)
                                            <option value="{{$profil->id_profil}}">{{$profil->libelle}}</option>
                                          @endforeach
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
                              
                                  <button class="mdc-button mdc-button--success icon-button" >
                                    &nbsp; <a onclick="saveProfil({{$user['id']}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i> 
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

          <script type="text/javascript">
            function saveProfil(id){
              var nom, tel, email, pass, confirm, enable, groupe;
              nom = $("#id_nom").val();
              tel = $("#id_tel").val();
              email = $("#id_email").val();
              pass = $("#id_pass").val();
              confirm = $("#id_confirm").val();
              groupe = $("#id_list_groupe option:selected").val();

              if ($('#id_enable').is(":checked"))
                enable = 1;
              else
                enable = 0;

              console.log(nom+" "+tel+" "+email);
              if(groupe == 0){
                presence2 = 0;
              } else {
                presence2 = 1;
              }

              if(pass != ""){

                if (pass != confirm) {
                alert("mot de passe non concordant");
                  } else {
                      $.ajax({
                          url: "{{ route('user.modif') }}",
                          type: "POST",   
                          data: {
                              "_token": "{{ csrf_token() }}",
                              nom: nom,
                              tel: tel,
                              email: email,
                              activation: enable,
                              password: pass,
                              password_confirmation: confirm,
                              presence: 1,
                              presence2: presence2,
                              groupe: groupe,
                              id: id,
                          },

                          success: function(response) {
                              alert("utilisateur modifié avec succes ");
                              window.location.href = "/configuration/utilisateur/profilU";
                              console.log(response);
                          },
                          error: function(response) {
                              alert("echec de modification");
                              console.log(response);
                          }
                      });
                  }

              } else {

                if (pass != confirm) {
                  alert("mot de passe non concordant");
                } else {
                    $.ajax({
                    url: "{{ route('user.modif') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nom: nom,
                        tel: tel,
                        email: email,
                        activation: enable,
                        presence: 0,
                        presence2: presence2,
                        groupe: groupe,
                        id: id,
                    },

                    success: function(response) {
                        alert("utilisateur modifié avec succes ");
                        window.location.href = "/configuration/utilisateur/profilU";
                        console.log(response);
                    },
                    error: function(response) {
                        alert("echec de modification");
                        console.log(response);
                    }
                  });
                }

                

              }

            }
          </script>
        
        
        
        
        
        
        
        
        
        
        
      </div>
    </main>
    <!-- partial:../../partials/_footer.html -->
    
    <!-- partial -->
  </div>
@endsection

@section('script')
    
@endsection