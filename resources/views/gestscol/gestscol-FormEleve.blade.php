<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SchoolEngine</title>

  <!-- Custom fonts for this template-->
 <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="/css/css1/main.css" rel="stylesheet">
  <script type="text/javascript" src="/js/jquery3.2.min.js"></script>
  
  
  <script type="text/javascript">

  function enregistrerEleve() {


    var nom = $("#nomE").val();
      var dateNaissance = $("#dateNaissance").val();
      var lieuNaissance = $("#lieuNaissance").val();
      var sexe = $("#sexe").val();
      var domicile = $("#domicile").val();
      var email = $("#email").val();
      var nom_pere = $("#nom_pere").val();
      var profession_pere = $("#profession_pere").val();
      var tel_pere = $("#tel_pere").val();
      var nom_mere = $("#nom_mere").val();
      var profession_mere = $("#profession_mere").val();
      var tel_mere = $("#tel_mere").val();
      var nom_tuteur = $("#nom_tuteur").val();
      var profession_tuteur = $("#profession_tuteur").val();
      var tel_tuteur = $("#tel_tuteur").val();
      var groupe_sanguin = $("input[name='radio1']:checked").val();
      var religion = $("#religion option:selected" ).text();
      var contact = $("#contact").val();
      var index_contact = $("#index_contact option:selected" ).val();
      var type_contact = 1;
      var t = groupe_sanguin.length;

      var rhesus;
      if (t == 2) {
        rhesus = groupe_sanguin.charAt(1);
      } else if (t == 3){
        rhesus = groupe_sanguin.charAt(2);
      } else {
        rhesus = "";
      }



      $.ajax({
          url: "{{route('eleve.ajout')}}",
          type: "POST",
          data:{
            "_token": "{{ csrf_token() }}",
            nom:nom,
            dateNaissance:dateNaissance,
            lieuNaissance:lieuNaissance,
            sexe:sexe,
            domicile:domicile,
            email:email,
            nom_pere:nom_pere,
            profession_pere:profession_pere,
            tel_pere:tel_pere,
            nom_mere:nom_mere,
            profession_mere:profession_mere,
            tel_mere:tel_mere,
            nom_tuteur:nom_tuteur,
            profession_tuteur:profession_tuteur,
            tel_tuteur:tel_tuteur,
            groupe_sanguin:groupe_sanguin,
            religion:religion,
            contact:contact,
            index_contact:index_contact,
            type_contact:type_contact,
            rhesus:rhesus,
          },

          success:function(response){
              console.log(response);
              alert(response);
          },
          error: function(response){
              console.log(response);
          }
      });
      

  }

</script>

  
 <!-- Search style --->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700"> -->

</head>

<body id="page-top" >

	<!-- Topbar -->
	
        <nav class="navbar navbar-expand navbar-light bg-light10 topbar mb-2 static-top shadow" >
			
			

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-6">
            <i class="fa fa-bars"></i>
          </button> 

			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="sales.html">
				
				<!-- LOGO SchoolEngine -->
				<div class="sidebar-brand-text mt-2" >
					<div class="col-lg-12">
						<a href="index.html"><img src="/images/logo-School-engine.png" width="150px" alt="Logo SchoolEngine" /></a>
					</div>
				</div>
			  </a>
			  
			  
			  
			  
		
          <!-- Topbar Search -->
          <!-- <form style="position:relative;  margin:auto;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <span class="tooltip-bottom" data-tooltip="Search"><button class="btn btn-primary" type="button"></span>
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
			
          </form> -->
		  
		  <form class="search" enctype="multipart/form-data">
			  <div class="search__wrapper">
				<input type="text" name="" placeholder="Recherche..." class="search__field">
				<button type="submit" class="fa fa-search search__icon"></button>
			  </div>
			</form>
	
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" enctype="multipart/form-data">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
	<!-- ******************************* Menu du TOP BAR  *****************************  -->		
			<!-- Nav Item - APP STORE -->
			

            <li class="nav-item dropdown no-arrow mx-1">
			
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="tooltip-bottom" data-tooltip="App Store"><i  style="color:#008ec2;" class="fas fa fa-th"></i></span>
				
                <!-- Counter - Alerts -->
                <!-- <span class="badge badge-danger badge-counter">3+</span> -->
              </a>
			 
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header1">
                  Modules
                </h6>
				
				<table style="text-align:center; width: 100%;">
					
					<tr>
						<td>
						
						
						
						
						<a class="dropdown-item " href="{{ route('gestscol.home') }}">
						  <div >
							<img src="/images/logos/gestscol.jpg" alt="Logo" height="50px" />
						  </div>
						  <span style="font-size:0.8em;">Gestscol</span>  
						</a> 
					

					
						
						</td>
						<td>
						<a class="dropdown-item " href="#">
						  <div >
							<img src="/images/logos/caisse.jpg" alt="Logo" height="50px" />
						  </div>
						  <span style="font-size:0.8em;">Caisse</span>
						</a>
						</td>
						
						<td>
						<a class="dropdown-item " href="#">
						  <div >
							<img src="/images/logos/paye.jpg" alt="Logo" height="50px" />
						  </div>
						  <span style="font-size:0.8em;">RH-Paye</span>
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a class="dropdown-item " href="#">
						  <div >
							<img src="/images/logos/compta.jpg" alt="Logo" height="50px" />
						  </div>
						  <span style="font-size:0.8em;">Comptabilité</span>
						</a>
						</td>
						<td>
						<a class="dropdown-item " href="{{ route('configuration.home') }}">
						  <div >
							<img src="/images/logos/configuration.jpg" alt="Logo" height="50px" />
						  </div>
						  <span style="font-size:0.8em;">configuration</span>
						</a>
						</td>
						<td>
						<a class="dropdown-item " href="#">
						  <div >
							<img src="/images/logos/tb.jpg" alt="Logo" height="50px" />
						  </div>
						  <span style="font-size:0.8em;">TB</span>
						</a>
						</td>
					</tr>
				</table>
                
				
				

				
				
				
				<!-- table primary start -->
                   

										
                                    
                    <!-- table primary end -->
				
				
				
				
              <!--  <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>  -->
              </div>
            </li>

            <!-- Nav Item - Alerts -->
			
			
			
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="tooltip-bottom" data-tooltip="Notifications"><i class="fas fa-bell fa-fw" style="color:#fff;"></i></span>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter rounded-circle1">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header1">
                  Notifications
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <!--<div class="mr-3">
                     <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>-->
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <!-- <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div> -->
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <!-- <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div> -->
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-100" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="tooltip-bottom" data-tooltip="Messages"><i class="fas fa-envelope fa-fw" style="color:#fff;"></i></span>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter rounded-circle1">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header1">
                  Messages
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-100" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small" style="color:#000;">Gilles Fabrizio</span>
                <span class="tooltip-bottom" data-tooltip="Gilles Fabrizio">
				<img class="img-profile rounded-circle1" src="/img/avatar.jpg" > &nbsp; 
				</span>
				<i class="fas fa-caret-down fa-sm "  style="color:#000;" ></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuration
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activités
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


<!-- ======= Header ======= -->
  <header id="header" style="margin-bottom:10px; margin-top:10px;" >
	
  
    <div style="height:20px;" class="container d-flex align-items-center col-md-12">
	
	<!-- <nav class="nav col-md-2">
      
	  
					<li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span style="margin-right:10px; color:#ff8431; float:left;">
							<i class="fas fa-cart-arrow-down"></i> 
						  </span>
						  <h5 style="color:#ff8431; " class="logo mr-auto">Sales</h5>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">  Sales Center</a>						  
                          <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="#">  Product</a>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="#">  Sales Analytics</a>					
                          
                        </div>
                      </li>
	  
		
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	<!-- </nav> -->
    <nav class="nav-menu ml-0 col-md-11" style="text-align:left; ">
		<ul >
		  <li  style="font-size: 1.2em; position:relative; margin-left:10px; margin-top:5px; color: black;"> <i class="fas fa-user-graduate"></i> &nbsp; GestscolXP &nbsp;| &nbsp;&nbsp; </li>
		  <li><a href="{{route("user.tb")}}">Tableau de Bord</a></li>
      <li><a href="{{route('user.list')}}">Données</a></li>
		  <li><a href="{{route('user.list')}}">Ressources</a></li>
		  <li><a href="{{route('user.group')}}">Documents</a></li>
      <li><a href="utilisateurs-conf.html">système</a></li>
      <li><a href="utilisateurs-conf.html">outils</a></li>
      <li><a href="utilisateurs-conf.html">Configuration</a></li>
		</ul>
	</nav>
	
	
	
	
	
	
	
	
	<nav class="nav-menu d-none d-lg-block col-md-1" style="position:relative; top:8px;">
			<ul class="navbar-nav mr-auto" style="text-align:right;">
				 <!--  <li class="nav-item dropdown no-arrow mx-1 ">
					  <a class="nav-link dropdown-toggle " href="#" id="alertsDropdown" role="button" aria-pressed="true" data-toggle="dropdown"  >
						<span class="tooltip-bottom" data-tooltip="Home"><i class="fas fa-home fa-fw"></i> </span>               
					  </a>              
				   </li>
				   <li class="nav-item dropdown no-arrow mx-1 ">
					  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="tooltip-bottom" data-tooltip="Reports"><i class="fas fa-chart-bar fa-fw"></i>  </span>              
					  </a>              
				   </li> -->
		   
					<li>
                        <a class="nav-link dropdown-toggle" href="#"  style="text-decoration: none; border:none;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="tooltip-bottom">Plus </i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#"> <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i> Configuration</a>						  
                          <a class="dropdown-item" href="#"> <i class="fas fa-bell fa-sm fa-fw mr-2 text-gray-400"></i> Notifications</a>
						              <a class="dropdown-item" href="#"> <i class="fas fa-file-import fa-sm fa-fw mr-2 text-gray-400"></i> Import</a>
                          <a class="dropdown-item" href="#"> <i class="fas fa-file-download fa-sm fa-fw mr-2 text-gray-400"></i> Export</a>
						  <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"> <i class="fas fa-trash-alt fa-sm fa-fw mr-2 text-gray-400"></i> Corbeille</a>
                        </div>
                      </li>
					  
					<li class="nav-item dropdown no-arrow ">
					  <form class="nav-link dropdown-toggle"  id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" enctype="multipart/form-data">
						
						
						
					<!-- Topbar Navbar -->
        <!--   <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          <!--  <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="btn btn-primary" onclick="$('#recherche').fadeIn();" data-target="#infos" type="button">
                        <span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
                </button>
              </a>
              <!-- Dropdown - Messages -->
             <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    
                    <div class="input-group-append">
                      <button class="btn btn-primary" onclick="$('#recherche').fadeIn();" data-target="#infos" type="button">
                        <span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
                      </button>
                    </div>
                  </div>
                </form>
              </div> 
            </li>	
			 </ul>	
						
						
						
					  </form>              
				   </li>
	
            <form  style="position: relative; top:10px;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-2 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search Leads..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
			  
			  <li class="nav-item dropdown no-arrow">
			  

					
				<button class="btn btn-primary" title="Recherche avancée" onclick="$('#recherche').fadeIn();" type="button">
					<span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
                </button> -->
							
				</div>
		</nav>

			  
			  
			  
			  
			  
                
				
			
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" enctype="multipart/form-data">
                  <div class="input-group">
                    
                    <div class="input-group-append">
                      <button class="btn btn-primary" onclick="$('#recherche').fadeIn();" type="button">
                        <span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
                      </button>	
                    </div>
                  </div>
                </form>
              </div>
            </li>	
				
				
				
				
              </div>
            </div>
			
          </form>
		  
		  
          <!-- <li><a href="#departments">Departments</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li> -->

        </ul>
     
</nav>
	 <!-- .nav-menu -->
	  
	  
	  <div class="col-4 col-md-3 col-lg-2">
                            
                        
						
						
						
	  
		</div>
      
	  
	  
	  
	  

    </div>
  </header><!-- End Header -->
  
   <header id="header2" scrolling="no" frameborder="0" allowTransparency="true"  overflow:"hidden" >
    <div style="margin:auto!important; " class="container d-flex align-items-center col-md-12">
	
		<nav class="nav col-md-2 ">
      
	  
					<li class="nav-item dropdown no-arrow mx-1">
                        
                        
                      </li>
	  
		
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	</nav>
    <!--  <nav class="nav-menu d-none d-lg-block col-md-4">
        <ul style="text-align:right;">
          <li class="active"><a href="index.html">Sales Center</a></li>
          <li><a href="#about">Products</a></li>
          <li><a href="#services">Sales Analytics</a></li>
		</ul>
	</nav> -->
	
	
	
	
	
	
	
	
	<nav style="margin: 15px auto; height:20px;"  class="navbar navbar-expand navbar-light  topbar col-md-8 ">
			<ul >
				  
					  
				<!-- <li class="nav-item dropdown no-arrow ">
					 <form class="nav-link dropdown-toggle"  id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
						
						
					<!-- Topbar Navbar -->
				  <ul class="navbar-nav ml-auto bg-white" style="width:100%;">


					<!-- Nav Item - Search Dropdown (Visible Only XS) -->
					<!--<li class="nav-item dropdown no-arrow d-sm-none">
					  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<button class="btn btn-primary" onclick="$('#recherche').fadeIn();" data-target="#infos" type="button">
								<span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
						</button>
					  </a>
					  <!-- Dropdown - Messages -->
					  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="searchDropdown">
						<form class="form-inline mr-auto navbar-search" enctype="multipart/form-data">
						  <div class="input-group">
							
							<div class="input-group-append">
							  <button class="btn btn-primary" onclick="$('#recherche').fadeIn();" data-target="#infos" type="button">
								<span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
							  </button>
							</div>
						  </div>
						</form>
					  </div>
					</li>	
				  </ul>	
						
						
						
					  </form>              
				</li>
	
            <form enctype="multipart/form-data"  style="position: relative; top:10px;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-2 my-2 my-md-0 mw-100 navbar-search">
				<div class="input-group">
              <input type="text" class="form-control bg-white border-0  small" style="border-radius:5px; height:30px; position:relative; top:15px;" placeholder="Recherche...." aria-label="Search" aria-describedby="basic-addon2">
              
			  <div class="input-group-append">
			  
			  <li class="nav-item dropdown no-arrow">
			  

					
				<button class="btn btn-white " style="position:relative; top: 10px;left:-30px;" title="Recherche avancée" onclick="$('#recherche').fadeIn();" type="button">
					<span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
                </button>
			<!--	<table style= "height:15px; margin-left:5px; position:relative; bottom:22px;" >
					<tr>
						<td style="border-right: 1px solid #aeaeae; margin:1px;"><i  style="color:#008ec2; cursor:pointer; font-size:25px;" class="fas fa fa-home"></i></span></td>
						<td style="border-right: 1px solid #aeaeae; margin:1px;"><i style="color:#aeaeae; cursor:pointer; font-size:22px; margin:2px;" class="fas fa-chart-bar"></i></i></span></td>
						<td style="border-right: 1px solid #aeaeae; margin:1px;"><i  style="color:#aeaeae; cursor:pointer; font-size:22px; margin:2px;" class="fas fa-ellipsis-h"></span></td>	
					</tr>
                </table>			-->		
				</div>
				
			
			  

			  <!--
				<ul class="navbar-nav  navbar-expand navbar-light topbar mb-4  " style="position:relative; left:100px;">
					<li class="nav-item dropdown no-arrow mx-0" >
						<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="tooltip-bottom" data-tooltip="home"><i  style="color:#008ec2; font-size:25px;" class="fas fa fa-home"></i></span>			
						</a>
						<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
							<h6 class="dropdown-header1">Home</h6>
						</div>
					</li>
					<li class="nav-item dropdown no-arrow mx-0">
						<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="tooltip-bottom" data-tooltip="Report"><i style="color:#aeaeae; font-size:15px;" class="fas fa-chart-bar"></i></span>			
						</a>
						<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
							<h6 class="dropdown-header1">Report</h6>
						</div>
					</li>
					<li class="nav-item dropdown no-arrow mx-0">
						<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="tooltip-bottom" data-tooltip="More"><i  style="color:#aeaeae; font-size:15px;" class="fas fa-ellipsis-h"></i></span>			
						</a>
						<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
							<h6 class="dropdown-header1">More</h6>
						</div>
					</li>
				</ul>
			  
			  -->
			  
                
				
			
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" enctype="multipart/form-data">
                  <div class="input-group">
                    
                    <div class="input-group-append">
                      <button class="btn btn-primary" onclick="$('#recherche').fadeIn();" type="button">
                        <span class="tooltip-bottom" data-tooltip="Advanced Search"><i class="fas fa-search-plus fa-sm"></i></span>
                      </button>	
                    </div>
                  </div>
                </form>
              </div>
            </li>	
				
				
				
				
              </div>
            </div>
			
          </form>
	</nav>
	
	
	  
	  
      
	  
	  
	  
	  

    </div>
  </header><!-- End Header -->
  
  <style>

</style>
  <!-- Page Wrapper -->
	<div id="wrapper">
	
		
	
		<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-light sidebar sidebar-dark accordion" id="accordionSidebar"  style="z-index:3;">
			
			<!-- Nav Item - Pages Collapse Menu -->			
			<!-- Heading -->
      
	  <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseapprenant" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user-graduate"></i>
            <span>Apprenants</span>
          </a>
          <div id="collapseapprenant" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('eleve.add') }}">Créer un apprenant</a>
            <a class="collapse-item" href="#">Elèves dans les classes</a>
            <a class="collapse-item" href="#">Groupe d'élèves</a>
            <a class="collapse-item" href="#">Elèves et Matières d'option</a>
            <a class="collapse-item" href="#">Travail des Elèves</a>
          <!--  <a class="collapse-item" data-toggle="collapse" data-target="#submenu1" href="#">
              Modules <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
              <ul class="nav nav-list collapse" id="submenu1">
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Gestscol</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >RH & Paye</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Caisse</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >comptabilité</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Configuration</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Tableau de bord</a></li> 
              </ul>   -->                     
            </div>
          </div>
          </li>
            
      
      <style>
        #submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
        {
          background-color:#fff;
          color:#008ec2;
        }
        
        
      </style>
      
          <!-- Divider -->
          <hr class="sidebar-divider">



          <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEnseignant" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Enseignants</span>
          </a>
          <div id="collapseEnseignant" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('enseignant.add') }}">Créer un Enseignant</a>
            <a class="collapse-item" href="#">Emploi du temps</a>
            <a class="collapse-item" href="#">Classes</a>
          <!--  <a class="collapse-item" data-toggle="collapse" data-target="#submenu1" href="#">
              Modules <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
              <ul class="nav nav-list collapse" id="submenu1">
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Gestscol</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >RH & Paye</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Caisse</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >comptabilité</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Configuration</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Tableau de bord</a></li> 
              </ul>   -->                     
            </div>
          </div>
          </li>
            
      
      <style>
        #submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
        {
          background-color:#fff;
          color:#008ec2;
        }
        
        
      </style>
      
          <!-- Divider -->
          <hr class="sidebar-divider">

            <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseListes" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-edit"></i>
            <span>Notes</span>
          </a>
          <div id="collapseListes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Saisie des Notes</a>
            <a class="collapse-item" href="#">Modification des Notes</a>
          <!--  <a class="collapse-item" data-toggle="collapse" data-target="#submenu1" href="#">
              Modules <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
              <ul class="nav nav-list collapse" id="submenu1">
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Gestscol</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >RH & Paye</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Caisse</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >comptabilité</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Configuration</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Tableau de bord</a></li> 
              </ul>   -->                     
            </div>
          </div>
          </li>
            
      
      <style>
        #submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
        {
          background-color:#fff;
          color:#008ec2;
        }
        
        
      </style>
      
          <!-- Divider -->
          <hr class="sidebar-divider">
        
         


          <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDiscipline" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-gavel"></i>
            <span>Discipline</span>
          </a>
          <div id="collapseDiscipline" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Gestion de la discipline</a>
            <a class="collapse-item" href="#">Consultation</a>
            <a class="collapse-item" href="#">Sanctions</a>
            <a class="collapse-item" href="#">Paramétrage des Sanctions</a>
            <a class="collapse-item" href="#">Motif des Sanctions</a>
            <a class="collapse-item" href="#">Rapport</a>
          <!--  <a class="collapse-item" data-toggle="collapse" data-target="#submenu1" href="#">
              Modules <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
              <ul class="nav nav-list collapse" id="submenu1">
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Gestscol</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >RH & Paye</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Caisse</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >comptabilité</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Configuration</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Tableau de bord</a></li> 
              </ul>   -->                     
            </div>
          </div>
          </li>
            
      
      <style>
        #submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
        {
          background-color:#fff;
          color:#008ec2;
        }
        
        
      </style>
      
          <!-- Divider -->
          <hr class="sidebar-divider">


          <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBulletin" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Bulletins</span>
          </a>
          <div id="collapseBulletin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Bulletin Sous-Période</a>
            <a class="collapse-item" href="#">Bulletin Période</a>
            <a class="collapse-item" href="#">Bulletin Annuel</a>
          <!--  <a class="collapse-item" data-toggle="collapse" data-target="#submenu1" href="#">
              Modules <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
              <ul class="nav nav-list collapse" id="submenu1">
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Gestscol</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >RH & Paye</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Caisse</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >comptabilité</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Configuration</a></li>
                <li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Tableau de bord</a></li> 
              </ul>   -->                     
            </div>
          </div>
          </li>
            
      
      <style>
        #submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
        {
          background-color:#fff;
          color:#008ec2;
        }
        
        
      </style>
      
          <!-- Divider -->
          <hr class="sidebar-divider">
					
					
					
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnalyses" aria-expanded="true" aria-controls="collapseUtilities">
					  <i class="fas fa-edit"></i>
					  <span>Evaluations</span>
					</a>
					<div id="collapseAnalyses" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					  <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="#">Gestion des Evaluations</a>
            <a class="collapse-item" href="#">Analyse des Evaluations</a>
            <a class="collapse-item" href="#">Analyse des Moyennes</a>											
					  </div>
					</div>
				  </li>
						
			
			<style>
				#submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
				{
					background-color:#fff;
					color:#008ec2;
				}
				
				
			</style>
			
					<!-- Divider -->
					<hr class="sidebar-divider">
				
				  <!-- Nav Item - Utilities Collapse Menu -->
				  <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOutils" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-star"></i>
            <span>Outils</span>
          </a>
          <div id="collapseOutils" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Envoie des SMS</a>
            <a class="collapse-item" href="#">envoie des Email</a>
                               
            </div>
          </div>
          </li>
            
      
      <style>
        #submenu1,#submenu2,#submenu3,#submenu4,#submenu5,#submenu6,#submenu7,#submenu8,#submenu9,#submenu10,#submenu11,#submenu12,#submenu13,#submenu14
        {
          background-color:#fff;
          color:#008ec2;
        }
        
        
      </style>
      
          <!-- Divider -->
          <hr class="sidebar-divider">

				  <!-- Heading -->
				  <div class="sidebar-heading">
					<!-- Addons-->
				  </div>
      <div class="text-center d-none d-md-inline">
        <button class="btn-circle" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
                                               </td>												                 
                                            </tr>
											

</div>



<div class="container">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div> <h5>Formulaire d'enrégistrement d'un élève</h5>
                                        <!-- <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                        </div>  -->
                                    </div>
                                </div>
                              </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Informations Personnelles</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Informations Famille</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span>Autres Informations</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Identification</h5>
                                              
                                                  {{ csrf_field() }}
                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">Nom complet</label><input name="nom" id="nomE" placeholder="Nom complet de l'élève" type="text" class="form-control"></div>
                                                  <div class="input-group">
                                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Né le </label><input name="dateNaissance" id="dateNaissance" placeholder="text" type="date" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">A</label>
                                                      <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'élève" type="text" class="form-control"></div>
                                                    </div>
                                               

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Sexe</label><select name="select" id="sexe" class="form-control">
                                                        <option value="M">Masculin</option>
                                                        <option value="F">Féminin</option>
                                                    </select></div>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Domicile</label><textarea name="domicile" id="domicile" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">Photo</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">Le taille de la photo doit être de 2Mo maximum.</small>
                                                    </div>

                                                <button class="mt-1 btn btn-primary" onclick="enregistrerEleve()">Enrégistrer</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                          <div class="card-body">   <!--<h5 class="card-title">Sizing</h5> -->
                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Réligion</label><select name="religion" id="religion" class="form-control">
                                                        <option>Catholique</option>
                                                        <option>Protestant</option>
                                                        <option>Evangeliste</option>
                                                        <option>Panthécotiste</option>
                                                        <option>Musulman</option>
                                                        <option>Budiste</option>
                                                        <option>Catholique</option>
                                                        <option>Autre</option>
                                                    </select></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Email</label><input name="email" id="email" placeholder="Email" type="email" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Contact</label><input name="contact" id="contact" placeholder="Téléphone de l'élève" type="text" class="form-control"></div>
                                            </div>

                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><label for="exampleSelect" class="">Groupe Sanguin</label>
                                                    <fieldset class="position-relative form-group">
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input"> A+ &nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="A-"> A- &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="AB+"> AB+ &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="AB"> AB- &nbsp; &nbsp;&nbsp; &nbsp;</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="B+"> B+ &nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="B-"> B-  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="O+"> O+ &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" id="radio1" type="radio" class="form-check-input" value="O-"> O- &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                                                        </div>
                                                      </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">PARENTS</h5>
                                                <div>
                                                    <div class="position-relative form-group">
                                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Nom du Père</label><input name="nom_pere" id="nom_pere" placeholder="Nom du père" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Profession</label><input name="profession_pere" id="profession_pere" placeholder="Profession du père" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Téléphone</label><input name="tel_pere" id="tel_pere" placeholder="Téléphone du père" type="text" class="form-control"></div>
                                                  <hr class="sidebar-divider">
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Nom de la Mère</label><input name="nom_mere" id="nom_mere" placeholder="Nom de la mère" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Profession</label><input name="profession_mere" id="profession_mere" placeholder="Profession, de la mère" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Téléphone</label><input name="tel_mere" id="tel_mere" placeholder="Téléphone de la mère" type="text" class="form-control"></div>
                                                    
                                                  <hr class="sidebar-divider">
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Nom du Tuteur</label><input name="nom_tuteur" id="nom_tuteur" placeholder="Nom de la mère" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Profession</label><input name="profession_tuteur" id="profession_tuteur" placeholder="Profession du Tuteur" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Téléphone</label><input name="tel_tuteur" id="tel_tuteur" placeholder="Téléphone du tuteur" type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">CONTACT D'URGENCE</h5>
                                                <div>
                                                    <div class="position-relative form-group">
                                                       <div class="position-relative form-group"><label for="exampleSelect" class="">Personne à contacter en cas d'urgence</label><select name="index_contact" id="index_contact" class="form-control">
                                                        <option value="1">Père</option>
                                                        <option value="2">Mère</option>
                                                        <option value="3">Tuteur</option>
                                                       <option value="0">Autre</option>
                                                    </select></div>
                                                    <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'Autre contact" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Checkboxes</h5>
                                                    <div class="position-relative form-group">
                                                        <div>
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox">Check this
                                                                custom checkbox</label></div>
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">Or this
                                                                one</label></div>
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3">But
                                                                not this disabled one</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Inline</h5>
                                                    <div class="position-relative form-group">
                                                        <div>
                                                            <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline" class="custom-control-input"><label class="custom-control-label">input</label></div>
                                                            <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline2" class="custom-control-input"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Radios</h5>
                                                    <div class="position-relative form-group">
                                                        <div>
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio">Select
                                                                this custom radio</label></div>
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio2">Or
                                                                this one</label></div>
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio3">But not this
                                                                disabled one</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Form Select</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Custom Select</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                                <option value="">Select</option>
                                                                <option>Value 1</option>
                                                                <option>Value 2</option>
                                                                <option>Value 3</option>
                                                                <option>Value 4</option>
                                                                <option>Value 5</option>
                                                            </select></div>
                                                            <div class="position-relative form-group"><label for="exampleCustomMutlipleSelect" class="">Custom Multiple Select</label><select multiple="" type="select" id="exampleCustomMutlipleSelect">
                                                              <option value="">Select</option>
                                                              <option>Value 1</option>
                                                              <option>Value 2</option>
                                                              <option>Value 3</option>
                                                              <option>Value 4</option>
                                                              <option>Value 5</option>
                                                            </select></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group"><label for="exampleCustomSelectDisabled" class="">Custom Select Disabled</label>
                                                              <select type="select" id="exampleCustomSelectDisabled" name="customSelect">
                                                                <option value="">Select</option>
                                                                <option>Value 1</option>
                                                                <option>Value 2</option>
                                                                <option>Value 3</option>
                                                                <option>Value 4</option>
                                                                <option>Value 5</option>
                                                            </select></div>
                                                            <div class="position-relative form-group"><label for="exampleCustomMutlipleSelectDisabled" class="">Custom Multiple Select Disabled</label>
                                                              <select multiple="" type="select">
                                                                <option value="">Select</option>
                                                                <option>Value 1</option>
                                                                <option>Value 2</option>
                                                                <option>Value 3</option>
                                                                <option>Value 4</option>
                                                                <option>Value 5</option>
                                                            </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>	
									</div>
								</div>
							</div>
    </div>    
</div>


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
    </ul>

        </nav>
  
  
  
  

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <!-- <script src="js/sb-admin-2.min.js"></script> -->
  
  <script src="/js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/chart-area-demo.js"></script>
  <script src="/js/demo/chart-pie-demo.js"></script>
  
  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>
    
   <!-- Tooltip search scripts -->
  <script src="/js/tooltip.js"></script>
  
     <!-- schrool fixed header2 -->
  <script src="/js/scrool.js"></script>
  
  <!-- dropdown-menu js ------>
	<script src="/js/dropdown-menu.js"></script>

  <script type="text/javascript" src="/assets/scripts/main.js"></script>

</body>

</html>
<html></html> 
<html></html> 