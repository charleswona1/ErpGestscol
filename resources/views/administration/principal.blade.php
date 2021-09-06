<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Engine</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets1/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets1/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets1/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets1/vendors/jvectormap/jquery-jvectormap.css">
    @yield('css')
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets1/css/demo/style.css">
    <link rel="stylesheet" href="/assets1/css/add.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets1/images/favicon.png" />
    <script src="/js/alpine.js"></script>
</head>

<body>
    <script src="/assets1/js/preloader.js"></script>
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
            <div class="mdc-drawer__header">
                <a href="/administrateur" class="brand-logo">
                    <center>
                        <img src="/assets1/images/admin.png" height="40px" alt="logo">
                        <h2 style="font-size:1.8em; color:white;">Administration</h2>
                    </center>
                </a>
            </div>
            <div class="mdc-drawer__content">
                <!-- <div class="user-info" style="text-align:center">
          <p class="name">Gilles Fabrizio</p>
          <p class="email">gillesfabrizio@gmail.com</p>
        </div>  -->
                <div class="mdc-list-group">
                    <nav class="mdc-list mdc-drawer-menu">

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('administration.admin') }}">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                                    aria-hidden="true">home</i>
                                Tableau de Bord
                            </a>
                        </div>

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('administration.etablissement') }}">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                                    aria-hidden="true">business</i>
                                Etablissements
                            </a>
                        </div>

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('administration.utilisateurs') }}">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                                    aria-hidden="true">person</i>
                                Utilisateurs
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('administration.licence') }}">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                                    aria-hidden="true">beenhere</i>
                                Licences
                            </a>
                        </div>

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel"
                                data-target="ui-sub-menu">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                                    aria-hidden="true">settings</i>
                                Configuration
                                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                            </a>
                            <div class="mdc-expansion-panel" id="ui-sub-menu">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="{{ route('administration.configGroupe') }} ">
                                            Groupes
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="{{ route('administration.configParam') }}">
                                            Paramétrages
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </nav>
                </div>
                <br />
                <div class="profile-actions">

                    <a href="javascript:;" style="margin:auto; font-size:0.9em; ">D&eacute;connexion</a>
                </div>
            </div>
        </aside>
        <!-- partial -->
        <div class="main-wrapper mdc-drawer-app-content">
            <!-- partial:partials/_navbar.html -->
            <header class="mdc-top-app-bar">
                <div class="mdc-top-app-bar__row">
                    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        <button
                            class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
                        <span class="mdc-top-app-bar__title"> </span>
                        <a href="home.html">
                            <i style="margin-right:30px;"
                                class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                                aria-hidden="true">home</i>
                        </a>
                        <div
                            class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">

                            <i class="material-icons mdc-text-field__icon">search</i>
                            <input class="mdc-text-field__input" id="text-field-hero-input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="text-field-hero-input" class="mdc-floating-label">Recherche..</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                        <div class="menu-button-container menu-profile d-none d-md-block">
                            <button class="mdc-button mdc-menu-button">
                                <span class="d-flex align-items-center">
                                    <span class="figure">
                                        <img src="/assets1/images/faces/avatar.jpg" alt="user" class="user">
                                    </span>
                                    <span class="user-name">{{auth()->guard('admins')->user()->nom }}</span>
                                </span>
                            </button>
                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-account-edit-outline text-primary"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <a href="/administrateur/profil/{{auth()->guard('admins')->user()->id_admin}}"><h6 class="item-subject font-weight-normal">Profile</h6></a>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-settings-outline text-primary"></i>
                                        </div>
                                        <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <a class="dropdown-item" onclick="if(confirm('êtes-vous sure de vouloir vous déconnecter ??')){
                                                $('#logout-form').submit();
                                            }">
                                                <h6 class="item-subject font-weight-normal">D&eacute;connexion</h6>
                                            </a>
                                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="divider d-none d-md-block"></div>
                        <div class="menu-button-container d-none d-md-block">
                            <button class="mdc-button mdc-menu-button">
                                <i class="mdi mdi-settings"></i>
                            </button>
                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-alert-circle-outline text-primary"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">Configuration</h6>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-progress-download text-primary"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">Mise &agrave; jour</h6>
                                        </div>²
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-button-container">
                            <button class="mdc-button mdc-menu-button">
                                <i class="mdi mdi-bell"></i>
                            </button>
                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon">
                                            <i class="mdi mdi-email-outline"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">You received a new message</h6>
                                            <small class="text-muted"> 6 min ago </small>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon">
                                            <i class="mdi mdi-account-outline"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">New user registered</h6>
                                            <small class="text-muted"> 15 min ago </small>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon">
                                            <i class="mdi mdi-alert-circle-outline"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">System Alert</h6>
                                            <small class="text-muted"> 2 days ago </small>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon">
                                            <i class="mdi mdi-update"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">You have a new update</h6>
                                            <small class="text-muted"> 3 days ago </small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-button-container">
                            <button class="mdc-button mdc-menu-button">
                                <i class="mdi mdi-email"></i>
                                <span class="count-indicator">
                                    <span class="count">3</span>
                                </span>
                            </button>
                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail">
                                            <img src="/assets1/images/faces/face4.jpg" alt="user">
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                                            <small class="text-muted"> 1 Minutes ago </small>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail">
                                            <img src="/assets1/images/faces/face2.jpg" alt="user">
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                                            <small class="text-muted"> 15 Minutes ago </small>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail">
                                            <img src="/assets1/images/faces/face3.jpg" alt="user">
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                                            <small class="text-muted"> 18 Minutes ago </small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-button-container d-none d-md-block">
                            <button class="mdc-button mdc-menu-button">
                                <i class="mdi mdi-arrow-down-bold-box"></i>
                            </button>
                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">Verrouiller l'&eacute;cran</h6>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-logout-variant text-primary"></i>
                                        </div>
                                        <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">D&eacute;connexion</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- partial -->
            <div class="page-wrapper mdc-toolbar-fixed-adjust">

                @yield('content')

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
    <script src="/js/mesScript.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>
</div>
</div>
</main>
<!-- partial:partials/_footer.html -->
<footer>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <!-- <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span> -->
            </div>
            <div
                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Copyright © 2021 <a
                        href="https://www.infogenie.cm" target="_blank"> INFOGENIE </a> Technologies</span>
            </div>
        </div>
    </div>
</footer>
<!-- partial -->
</div>
</div>
</div>
<!-- plugins:js -->

<!-- End custom js for this page-->

<script type="text/javascript">
    function modif_admin(id) {
        var nom, email, password, confirm_password, telephone, login, actif;
        var choix_etabl = new Array();
        nom = $("#nom").val();
        telephone = $("#telephone").val();
        email = $("#email").val();
        login = $("#login").val();
        password = $("#password").val();
        confirm_password = $("#confirm_password").val();


        $('#multiselect :selected').each(function(){
            choix_etabl.push($(this).val());
        });

        console.log(choix_etabl);

        if ($('#activation').is("  :checked"))
            actif = 1;
        else
            actif = 0;

        console.log('test '+actif);
        if (password != "") {
            if (password != confirm_password) {
                alert("mot de passe non concordant");
            } else {
                $.ajax({
                    url: "{{ route('admin.modif') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nom: nom,
                        telephone: telephone,
                        email: email,
                        login: login,
                        activation: actif,
                        password: password,
                        password_confirmation: confirm_password,
                        presence: 1,
                        id: id,
                        choix_e: choix_etabl,
                    },

                    success: function(response) {
                        alert("administrateur modifié avec succes ");
                        console.log(response);
                    },
                    error: function(response) {
                        alert("echec de modification");
                        console.log(response);
                    }
                });
            }
        } else {
            console.log("non");
            if (password != confirm_password) {
                alert("mot de passe non concordant");
            } else {
                $.ajax({
                    url: "{{ route('admin.modif') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nom: nom,
                        telephone: telephone,
                        email: email,
                        login: login,
                        activation: actif,
                        presence: 0,
                        id: id,
                        choix_e: choix_etabl,
                    },

                    success: function(response) {
                        alert("administrateur modifié avec succes ");
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

    function supprimer_admin(id, niv) {
        var confirmation = confirm("Voulez-vous vraiment supprimer cet administrateur?");
        if (confirmation) {
            $.ajax({
                url: "{{ route('admin.delete') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },

                success: function(response) {
                    if (response["status"] == 1) {
                        if(niv == 1){
                            alert("administrateur supprimé avec succes ");
                            $("#admin" + response["ligneT"]).remove();
                        } else {
                            window.location.href = "/administrateur/register";
                        }
                    } else if(response["status"] == 2){
                        confirmation = confirm("Cet administrateur a plusieurs attribution voulez-vous cas meme le supprimer annuler la suppression");
                        if(confirmation){
                            $.ajax({
                                url: "{{ route('admin.delete_force') }}",
                                type: "POST",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    id: id,
                                },
                                success: function(response){
                                    if (response["status"] == 1) {
                                        if(niv == 1){
                                            alert("administrateur supprimé avec succes ");
                                            $("#admin" + response["ligneT"]).remove();
                                        } else {
                                            window.location.href = "/administrateur/register";
                                        }
                                    }
                                }
                            });
                        }
                    } else {
                        $('#idErreur').css('display','block');
                        $("#errorM").html(response.error);

                        var fade_out = function() {
                            $("#idErreur").css('display','none');
                        }

                        setTimeout(fade_out, 5000);
                    }

                },
                error: function(response) {
                    alert("erreur de suppression");
                    console.log(response);
                }
            });
        }
    }
    

    function saveLicence(){
      var etablissement = $("#id_etablissement").val();
      var module1 = $("#id_module").val();
      var date_debut = $("#id_date_debut").val();
      var date_expiration = $("#id_date_expiration").val();

      if (etablissement != null && $.trim(etablissement) != "" && module1 != null && $.trim(module1) != "" && date_debut != null && $.trim(date_debut) != "" && date_expiration != null && $.trim(date_expiration) != "") {

       $.ajax({
          url: "{{route('admin.save_licence')}}",
          type: "POST",
          data:{
            "_token": "{{ csrf_token() }}",
              etablissement:etablissement,
              module:module1,
              date_debut:date_debut,
              date_expiration:date_expiration,
          },

          success:function(response){
            if (response == 1) {
              alert("licence enregistrée avec success");
              $("#id_etablissement").val("");
              $("#id_module").val("");
              $("#id_date_debut").val("");
              $("#id_date_expiration").val("");
            }else if (response == -2) {
              alert("la date d'expiration doit etre superieure a la date de debut");
            } else {
              alert("ce module a déjà été affecté à cet établissement");
            }

          },
          error: function(response){
            alert("erreur d'enregistrement");
              console.log(response);
          }
        });

      }
    }


    function modifier_licence(id) {
      var date_debut = $("#id_date_debut").val();
      var date_expiration = $("#id_date_fin").val();
      var module1 = $("#id_module option:selected" ).val();
      var status = 0;

      if ($('#id_status').is("  :checked"))
            status = 1;
        else
            status = 0;

      console.log(status);
      var id1 = id;

      if (date_debut > date_expiration) {
        alert("date de debut doit etre superieure a la date de fin");
        return;
      }

      $.ajax({
          url: "{{route('admin.modifier_licence')}}",
          type: "POST",
          data:{
            "_token": "{{ csrf_token() }}",
              date_debut:date_debut,
              date_expiration:date_expiration,
              module:module1,
              status:status,
              id:id,
          },

          success:function(response){
            if (response == 1) {
              alert("licence modifiée avec success");
              window.location.href = '/administrateur/licence';
            } else {
              alert("ce module a déjà été affecté à cet établissement");
            }

          },
          error: function(response){
            alert("erreur d'enregistrement");
              console.log(response);
          }
        });

    }

    function delete_licence(id)
    {
      var confirmation = confirm("Voulez-vous vraiment supprimer cette licence?");
        if (confirmation) {
            $.ajax({
                url: "{{ route('admin.delete_licence') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },

                success: function(response) {
                    if (response["status"] == 1) {
                        alert("licence supprimé avec succes ");
                        $("#licence"+id).remove();
                    } else {
                        alert("erreur de suppression");
                    }

                },
                error: function(response) {
                    alert("erreur de suppression");
                    console.log(response);
                }
            });
        }
    }
</script>
</body>
@yield('script')


</html>
