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
		  
		  <form class="search">
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
                <form class="form-inline mr-auto w-100 navbar-search">
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
					  <form class="nav-link dropdown-toggle"  id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
						
						
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
                <form class="form-inline mr-auto w-100 navbar-search">
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
						<form class="form-inline mr-auto navbar-search">
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
                <form class="form-inline mr-auto w-100 navbar-search">
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
					<!--	<a class="collapse-item" data-toggle="collapse" data-target="#submenu1" href="#">
							Modules <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
							<ul class="nav nav-list collapse" id="submenu1">
								<li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Gestscol</a></li>
								<li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >RH & Paye</a></li>
								<li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Caisse</a></li>
								<li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >comptabilité</a></li>
								<li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Configuration</a></li>
								<li><a class="collapse-item collapse-inner" style="color:#008ec2;" href="#" >Tableau de bord</a></li> 
							</ul>		-->											
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

				  <!-- Heading -->
				  <div class="sidebar-heading">
					<!-- Addons-->
				  </div>
      
                 
				  <!-- Nav Item - Pages Collapse Menu -->
			<!--	  <li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
					  <i class="fas fa-link "></i>
					  <span>Useful Links</span>
					</a>
					<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
					  <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" data-toggle="collapse" data-target="#submenu11" href="#">
							Quick Links <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
							<ul class="nav nav-list collapse" id="submenu11">
								<li><a class="collapse-item collapse-inner" style="color:#aeaeae; " href="#" >No Shared views found</a></li>
							</ul>
						<a class="collapse-item" data-toggle="collapse" data-target="#submenu12" href="#">
							Integrating Apps <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
							<ul class="nav nav-list collapse" id="submenu12">
								<li><a class="collapse-item collapse-inner" style="color:#aeaeae; " href="#" >No Apps found</a></li>
							</ul>
						<a class="collapse-item" data-toggle="collapse" data-target="#submenu13" href="#">
							Related Help Links <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
							<!-- <ul class="nav nav-list collapse" id="submenu13">
								<li><a class="collapse-item collapse-inner" style="color:#aeaeae; " href="#" >No Shared views found</a></li>
							</ul> -->
				<!--		<a class="collapse-item" data-toggle="collapse" data-target="#submenu14" href="#">
							Quick Start Guides <i class="fas fa-caret-down" style="position:relative; left:5px;"></i></a>
							<!-- <ul class="nav nav-list collapse" id="submenu14">
								<li><a class="collapse-item collapse-inner" style="color:#aeaeae; " href="#" >No Shared views found</a></li>
							</ul> -->
				<!--	  </div>
					</div>
				  </li> -->
				
      <!-- Nav Item - Charts -->
	  <!--
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
	  <!--
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>     -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="btn-circle" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        
<!-- ************************************ TABLE ******************************************* -->
  <!-- ************************************ *********************************************** -->
  
<!--  <div class="container-fluid" style="margin-top:20px; background-color:#eef3f5;">
  

        
		<div class="row col-xl-12">
			
			<!-- <div class="col-xl-9 col-md-6 mb-4">
			  <!-- Page Heading -->
			 <!--  <h5 class=" text-gray-800">My Leads  <span style="color:#ff8431; font-size:0.7em;">(0)</span></h5> -->
			<!-- </div>
			
			
			
			
            <!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">
				<table style="width:100%!important;">
					<tr>
						<td>
							<div style="text-align:right;"><span class="text-xs2 mr-0 font-weight-bold">Modules</span></div>
							<div class="card bg-secondary shadow h-50 py-2">
								<div class="card-body text-white">
								  <div class="row no-gutters align-items-center">
									<div class="col mr-2" style="text-align:center;">
									  <div class="h6 font-weight-bold text-white mb-0 ml-1"> <i class="fa fa-cogs"></i> <br/>Applications Installées</div>
									  <div class="text-xl ml-1 mt-1 text-uppercase"><a href="" style="color:white; font-weight:bold; font-size:1.2em;">06</a></div>
									</div>	
								  </div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-xl-3 col-md-6 mb-4">
				<table style="width:100%!important;">
					<tr>
						<td >
							<div style="text-align:right;"><span class="text-xs2 mr-0">Utilisateurs</span></div>
							<div class="card bg-warning shadow h-50 py-2" style="box-shadow: -1px 3px 9px 0px rgba(0,0,0,0.62);">
								<div class="card-body text-white" >
								  <div class="row no-gutters align-items-center">
									<div class="col mr-2" style="text-align:center;">
									  <div class="h6 font-weight-bold text-white mb-0 ml-1"> <i class="fa fa-users"></i> <br/>Nombres d'utilisateurs</div>
									  <div class="text-xl ml-1 mt-1 text-uppercase"><a href="" style="color:white; font-weight:bold; font-size:1.2em;">03</a></div>
								  </div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-xl-3 col-md-6 mb-4">
				<table style="width:100%!important; ">
					<tr>
						<td>
							<div style="text-align:right;"><span class="text-xs2 mr-0 ">Utilisation des Modules</span></div>
							<div class="card bg-danger shadow h-50 py-2">
								<div class="card-body text-white">
								  <div class="row no-gutters align-items-center">
									<div class="col mr-2">
									  <div class="h6 text-white mb-0 ml-1">Gestscol <a href="" style="color:#333; font-weight:bold; font-size:0.8em; text-align:left;">(03)</a></div>
									  <div class="h6 text-white mb-0 ml-1">Caisse <a href="" style="color:#333; font-weight:bold; font-size:0.8em;">(03)</a></div>
									  <div class="h6 text-white mb-0 ml-1">RH & Paye <a href="" style="color:#333; font-weight:bold; font-size:0.8em;">(03)</a></div>
									  <div class="h6 text-white mb-0 ml-1">Caisse <a href="" style="color:#333; font-weight:bold; font-size:0.8em;">(03)</a></div>
									  <div class="h6 text-white mb-0 ml-1">comptabilité <a href="" style="color:#333; font-weight:bold; font-size:0.8em;">(03)</a></div>
									  <!-- <div class="text-xs ml-1 mt-1 text-uppercase">10 Overdue</div> -->
	<!--								</div>	
								  </div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-xl-2 col-md-6 mb-4">
				<table style="width:100%!important;">
					<tr>
						<td >
							<div style="text-align:right;"><span class="text-xs2 mr-0 font-weight-bold">Documentation</span></div>
							<div class="card bg-success shadow h-50 py-2">
								<div class="card-body text-white">
								  <div class="row no-gutters align-items-center">
									<div class="col mr-2">
									  <div class="mb-0 ml-1" style="font-size: 0.9em"><a href="" style="color:white;">Manuel de Configuration</a></div>
									  <div class="mb-0 ml-1" style="font-size: 0.9em"><a href="" style="color:white;">Manuel d'installation</a></div>
									  <div class="mb-0 ml-1" style="font-size: 0.9em"><a href="" style="color:white;">Astuces</a></div>
									  <div class="mb-0 ml-1" style="font-size: 0.9em"><a href="" style="color:white;">FAQ</a></div>
									  <div class="mb-0 ml-1" style="font-size: 0.9em"><a href="" style="color:white;">En savoir plus</a></div>
									  <!-- <div class="text-xs ml-1 mt-1 text-uppercase">20 Open Invoices</div> -->
	<!--							  </div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-xl-1 col-md-6 mb-4">
				<table style="width:100%!important;">
					<tr>
						<td>
							<div style="text-align:right;"><span class="text-xs2 mr-0 ">Lien</span></div>
							<div class="card  bg-info shadow h-50 py-2">
								<div class="card-body">
								  <div class="row no-gutters align-items-center text-white">
									<div class="col mr-2">
									  <div class="h6 font-weight-bold mb-0 ml-1 text-white"> 
										&nbsp;<a href="" style="color:white;"><i class="fa fa-facebook"></i></a>&nbsp;  
										<a href="" style="color:white;"><i class="fa fa-skype"></i></a>&nbsp;
										<a href="" style="color:white;"><i class="fa fa-whatsapp"></i></a>
									</div>
									 <!-- <div class="text-xs ml-1 mt-1 text-uppercase">12 Paid Last 30 Days</div> -->
	<!--							  </div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
				<!--	<tr>
						<td>
							<div class="invoice col-xl-3 col-md-6 mb-4" >
								<button class="button-search" style="font-size:0.7em;  z-index:4">
								<span>New Booking</span></button>
							</div>
						</td>
					</tr>  -->
					
					
					
					
				
            
	<!--	 </div>
		<p>
		</p>
		<p>
		</p>

		<div class="row">
                            <!-- Textual inputs start -->
  <!--                          <div id="recherche" 
								style="display:none;z-index:10001;position:absolute;top:18%;right:-20px;height:500px;width:500px;
								-webkit-box-shadow: -7px -6px 16px -6px rgba(0,0,0,0.29);
								-moz-box-shadow: -7px -6px 16px -6px rgba(0,0,0,0.29);
								box-shadow: -7px -6px 16px -6px rgba(0,0,0,0.29);">
								
								<div class="card-header col-12">
									<div class="form-row col-10">
										<h6 class="dropdown-header2" style="color:#ff8431;">Recherche avancée</h6>
									</div>
									<div class="form-row col-2">
										<span class="tooltip-bottom" data-tooltip="Close"> 
											<span style="position:relative; right:0px; bottom:0px; cursor: pointer;" onclick="$('#recherche').fadeOut();">X</span
											<!--<i class="fas fa-times-circle" style="color:#008ec2; position:absolute; right:0; bottom:0px; cursor: pointer;" onclick="$('#recherche').fadeOut();"></i>
											<!-- <button type="button" onclick="$('#recherche').fadeOut();">Fermer cette fenêtre<button> -->
	<!--									</span>
									</div>
								</div>
								
                                <div class="card1" style="padding:10px; font-size:0.8em;">
                                    <div class="card-body col-12" >
										<!--
										<div class="form-row col-10">
											<h6 class="dropdown-header2" style="color:#ff8431;">Advanced Search</h6>
										</div>
										<div class="form-row col-2">
											<i class="fas fa-times-circle" style="color:#008ec2; cursor: pointer;" onclick="$('#recherche').fadeOut();"></i>
										</div> -->
  <!--                                      <div class="form-row col-6">
                                            <label for="example-text-input" class="col-form-label">Utilisateur</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
										<div class="form-row col-6">
                                            <label class="col-form-label">Module</label>
                                            <select class="form-control">
                                                <option>Gestscol</option>
                                                <option>Caisse</option>
                                                <option>RH-Paye</option>
												<option>comptabilité</option>
                                            </select>
                                        </div>
										
										<div class="form-row col-6">
                                            <label for="example-date-input" class="col-form-label">Date début</label>
                                            <input class="form-control" type="date" value="2018-03-05" id="example-date-input">
                                        </div>
										<div class="form-row col-6">
                                            <label for="example-date-input" class="col-form-label">Date Fin</label>
                                            <input class="form-control" type="date" value="2018-03-05" id="example-date-input">
                                        </div>
										
										
                                        
                                    </div>
										<div id="search">
											<button class="button-search" onclick="$('#recherche').fadeOut();"><span>Rechercher</span></button>
										</div>
									
									
                                </div>
                            </div>
                            
                            
                        </div>
                   
  
				<!-- *********************************** div du contenu d'affichage des informations *************** -->
	<!--	<div class="row" >
							
							
		
                            <div class="col-md-12">
							<div class="main-card mb-3 card" style="position:relative; top:-20px;" >
							
							<!-- ************** ACTIONS TABLE ************************ -->	
	<!--				<div class="row col-md-12">			
					<!-- <div class="nav-item dropdown no-arrow mx-1"> -->
	<!--					<div class="invoice col-md-9">
							<a class="dd-button1 rounded-circle1" style="text-decoration:none;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  <span style="color:#333;"><i class="fas fa-level-down-alt fa-fw" style="transform: scaleX(-1);"></i> Action</span>
							</a>
						
							<ul class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
							  <li><a class="dropdown-item" href="#"> <i class="fa fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Mise à Jour</a>	</li>
							  </li><div class="dropdown-divider"></div></li>
							  <li><a class="dropdown-item" href="#"> <i class="fa fa-print fa-sm fa-fw mr-2 text-gray-400"></i> Imprimer</a>	</li>
							  <li><a class="dropdown-item" href="#"> <i class="fa fa-adjust fa-sm fa-fw mr-2 text-gray-400"></i> Enlever</a> </li>
							  <li><a class="dropdown-item" href="#"> <i class="fa fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i> Email</a> </li>
							  <li><a class="dropdown-item" href="#"> <i class="fas fa-file-download fa-sm fa-fw mr-2 text-gray-400"></i> Ajouter</a> </li>
							  <li><a class="dropdown-item" href="#"> <i class="fas fa-file-import fa-sm fa-fw mr-2 text-gray-400"></i> Exporter</a> </li>
							  </li><div class="dropdown-divider"></div></li>
							  <li><a class="dropdown-item" href="#"> <i class="fas fa-trash-alt fa-sm fa-fw mr-2 text-gray-400"></i> Supprimer</a> </li>
							</ul>
						</div>
						<!--<div class="nav-menu2 collapsed-item col-md-3 " style="text-align:right;">
							<ul>
							  
							  <li><a href="#"> <i class="fa fa-print"></i></a>	</li>
							  
							  <li><a  href="#"> <i class="fas fa-cog"></i></a> </li>
							  
							</ul>
						</div>-->
							
	<!--					<div class="invoice col-md-3" style="text-align:right;">
							<!-- <button class="button-search rounded-circle1" style="font-size:0.7em; width:110px;  z-index:4">
							<span>Nouveau</span></button> -->
							
							
	<!--						<a href="#"> <i class="fa fa-print"></i></a>	
							  
							  <a  href="#"> <i class="fas fa-cog"></i></a> 
							
						
							
						</div>
						
						
                     </div> 
								

							<!-- ************** Fin ACTIONS TABLE ************************ -->		
	<!--						</div>
                                <div class="main-card mb-3 card1" style="position:relative; top:-35px; 
									-webkit-box-shadow: 1px 1px 8px -3px rgba(0,0,0,0.42);
									-moz-box-shadow: 1px 1px 8px -3px rgba(0,0,0,0.42);
									box-shadow: 1px 1px 8px -3px rgba(0,0,0,0.42);
								">
								
                                    <!-- <div class="card-header">
										<h6>Liste des Ventes</h6>	
                                    </div>  -->
  <!--                                  <div class="table-responsive" style="font-size:0.8em;">
                                        <table class="align-middle mb-0 table table-borderless table-hover">
                                            <thead style="border-bottom: 1px solid rgba(174, 174, 174, 0.3);">
                                            <tr>
                                                <th class="text-center"> </th>
												<th>Utilisateur | Fonction</th>
                                                <th class="text-center">Contact</th>
												<th class="text-center">Groupes</th>
												<th class="text-center">Modules</th>  
												<th class="text-center">Action</th>												
                                            </tr>
                                            </thead>
                                            <tbody>
											
                                            <tr>
                                                <td class="text-center text-muted"><input type="checkbox" value="checked"/></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading font-weight-bolder">Fabrizio ZANETTIN  
																&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
																<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
	<!--															&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
																&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
																</div> 
                                                                <div class="widget-subheading text-secondary opacity-7">Responsable UX/UI Design du projet</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>                                                
												<td class="text-center text-muted">(+237) 691877403</td>
												<td class="text-center text-muted">Administrateur</td>
												<td class="text-center text-muted">Gestscol, Caisse, RH&Paye, Caisse, Comptabilité</td>
                                                <td class="text-center">
                                                    <!-- <div class="badge badge-warning">Pending</div> -->
	<!--												<div class="dropdown">
													  <button id="dLabel" class="dropdown-select" tabindex="7" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Modifier
														<span class="caret"></span>
													  </button> 
													  <i class="fa fa-caret-down" style="color:#008ec2;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"></i>
													  <ul class="dropdown-menu" aria-labelledby="dLabel">
														<!-- <li>Receive Payment</li> -->
	<!--													<li>Modifier</li>
														<li>Supprimer</li>
													  </ul>
													  
													 <!-- <select class="dropdown" tabindex="7">
														  <option value="1">Option 1</option>
														  <option value="2">Option 2</option>
														  <option value="3">Option 3</option>
														  <option value="4">Option 4</option>
														  <option value="5">Option 5</option>
														</select>  -->
													  
													  
	<!--												</div>
													<!-- <div class="badge badge-success">Receive Payment</div> -->
  <!--                                              </td>												                 
                                            </tr>
											
											<tr>
                                                <td class="text-center text-muted"><input type="checkbox" value="checked"/></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading font-weight-bolder">Diego Rogriguez 
																&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
		<!--														<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
		<!--														&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
																&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
																</div> 
                                                                <div class="widget-subheading text-secondary opacity-7">Sécrétaire</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>                                                
												<td class="text-center text-muted">(+237) 670 002 003</td>
												<td class="text-center text-muted">Utilisateur</td>
												<td class="text-center text-muted">Gestscol, Caisse, RH&Paye, Caisse, Comptabilité</td>
                                                <td class="text-center">
                                                    <!-- <div class="badge badge-warning">Pending</div> -->
		<!--											<div class="dropdown	">
													  <button id="dLabel" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Modifier
														<span class="caret"></span>
													  </button> 
													  <i class="fa fa-caret-down" style="color:#008ec2;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"></i>
													  <ul class="dropdown-menu" aria-labelledby="dLabel">
														<!-- <li>Receive Payment</li> -->
			<!--											<li>Modifier</li>
														<li>Supprimer</li>
													  </ul>
													</div>
													<!-- <div class="badge badge-success">Receive Payment</div> -->
      <!--                                          </td>												                 
                                            </tr>
											
											<tr>
                                                <td class="text-center text-muted"><input type="checkbox" value="checked"/></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading font-weight-bolder">Fabiola NANA 
																&nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
																<!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
			<!--													&nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
																&nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
																</div> 
                                                                <div class="widget-subheading text-secondary opacity-7">Elève</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>                                                
												<td class="text-center text-muted">(+237) 670 002 003</td>
												<td class="text-center text-muted">Elève</td>
												<td class="text-center text-muted">Gestscol</td>
                                                <td class="text-center">
                                                    <!-- <div class="badge badge-warning">Pending</div> -->
			<!--										<div class="dropdown">
													  <button id="dLabel" class="dropdown-select" tabindex="7" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Modifier
														<span class="caret"></span>
													  </button> 
													  <i class="fa fa-caret-down" style="color:#008ec2;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"></i>
													  <ul class="dropdown-menu" aria-labelledby="dLabel">
														<!-- <li>Receive Payment</li> -->
			<!--											<li>Modifier</li>
														<li>Supprimer</li>
													  </ul>
													  
													 <!-- <select class="dropdown" tabindex="7">
														  <option value="1">Option 1</option>
														  <option value="2">Option 2</option>
														  <option value="3">Option 3</option>
														  <option value="4">Option 4</option>
														  <option value="5">Option 5</option>
														</select>  -->
													  
													  
			<!--										</div>
													<!-- <div class="badge badge-success">Receive Payment</div> -->
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
                                    <div> <h5>Formulaire d'enrégistrement d'un enseignant</h5>
                                        <!-- <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                        </div>  -->
                                    </div>
                                </div>
                               <!-- <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->   </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Informations Personnelles</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Informations Professionelles</span>
                                </a>
                            </li>
                          <!--  <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span>Autres Informations</span>
                                </a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Identification</h5>
                                                <form class="">
                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">Nom complet</label><input name="nom" id="exampleEmail" placeholder="Nom complet de l'élève" type="email" class="form-control"></div>
                                                  <div class="input-group">
                                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Date de Naissance </label><input name="lieuNaissance" id="lieuNaissance" placeholder="Email" type="date" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Lieu</label>
                                                      <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'élève" type="text" class="form-control"></div>
                                                    </div>
                                               

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Sexe</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>Masculin</option>
                                                        <option>Féminin</option>
                                                    </select></div>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Domicile</label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                                   <!-- <div class="position-relative form-group"><label for="exampleSelectMulti" class="">Select Multiple</label><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div> -->
                                                    
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">Photo</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">Le taille de la photo doit être de 2Mo maximum.</small>
                                                    </div>
                                                    <button class="mt-1 btn btn-primary">Enrégistrer</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                          <div class="card-body">   <!--<h5 class="card-title">Sizing</h5> -->
                                                <form class="">

                                                  
                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Statut au sein de l'établissement</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>Ancien</option>
                                                        <option>Nouveau</option>
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Niveau Scolaire</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>BEPC</option>
                                                        <option>Probatoire</option>
                                                        <option>Baccalauréat</option>
                                                        <option>Licence</option>
                                                        <option>Master</option>
                                                        <option>Doctaurat</option>
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Réligion</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>Catholique</option>
                                                        <option>Protestant</option>
                                                        <option>Evangeliste</option>
                                                        <option>Panthécotiste</option>
                                                        <option>Musulman</option>
                                                        <option>Budiste</option>
                                                        <option>Catholique</option>
                                                        <option>Autre</option>
                                                    </select></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Email</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Email" type="email" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Contact</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'élève" type="text" class="form-control"></div>
                                            </div>

                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><label for="exampleSelect" class="">Groupe Sanguin</label>
                                                <form class="">
                                                    <fieldset class="position-relative form-group">
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> A+ &nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> A- &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> AB+ &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> AB- &nbsp; &nbsp;&nbsp; &nbsp;</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> B+ &nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> B-  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> O+ &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> O- &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                                                        </div>

                                                        
                                                       <!-- <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio1" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                                    </fieldset>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input"> Check me out</label> --></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">SITUATION</h5>
                                                <div>
                                                    <div class="position-relative form-group">
                                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Matricule</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Matricule" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Numéro CNPS</label><input name="lieuNaissance" id="lieuNaissance" placeholder="N° CNPS père" type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Numéro CNI</label><input name="lieuNaissance" id="lieuNaissance" placeholder="N° CNI" type="text" class="form-control"></div>
                                                  <hr class="sidebar-divider">
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Date de délivrance CNI</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Date CNI" type="date" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Fonction</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Poste occupé" type="text" class="form-control"></div>
                                                    
                                                    
                                                  
                                                    </div>

                                                   <!-- <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><input aria-label="Checkbox for following text input" type="checkbox" class=""></span></div>
                                                        <input placeholder="Check it out" type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group"><input placeholder="username" type="text" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">@example.com</span></div>
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
                                                        <input placeholder="Dolla dolla billz yo!" type="text" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                        <input placeholder="Amount" step="1" type="number" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                       <!-- <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">CONTACT D'URGENCE</h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Input Group Button Shorthand</h5>
                                                <div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-secondary">To the Left!</button>
                                                        </div>
                                                        <input type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group"><input type="text" class="form-control">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary">To the Right!</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-danger">To the Left!</button>
                                                        </div>
                                                        <input placeholder="and..." type="text" class="form-control">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-success">To the Right!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">


                                          <div class="position-relative form-group"><label for="lieuNaissance" class="">Email</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Email" type="email" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Numéro Téléphone</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone" type="text" class="form-control"></div>
                                             
                                          </div>
                                          
                                            <div class="card-body"><h5 class="card-title">CONTACT D'URGENCE</h5>
                                                <div>
                                                    <div class="position-relative form-group">
                                                       <!--<div class="position-relative form-group">
                                                        <label for="exampleSelect" class="">Personne à contacter en cas d'urgence</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>Père</option>
                                                        <option>Mère</option>
                                                        <option>Tuteur</option>
                                                       <option>Autre</option>
                                                    </select></div> -->
                                                    <label for="exampleSelect" class="">Numéro de téléphone d'urgence</label>
                                                    <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'Autre contact" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       <!-- <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Input Group Addon</h5>
                                                <div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
                                                        <input type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group"><input type="text" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
                                                        <input placeholder="and..." type="text" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Input Group Button</h5>
                                                <div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-secondary">I'm a button</button>
                                                        </div>
                                                        <input type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group"><input type="text" class="form-control">
                                                        <div class="input-group-append">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary">Split Button</button>
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle dropdown-toggle-split btn btn-outline-secondary"><span
                                                                    class="sr-only">Toggle Dropdown</span></button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                            </div>
                                                        </div>
                                                        <input placeholder="and..." type="text" class="form-control">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary">I'm a button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <form class="">
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
                                                            <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                                  for="exampleCustomInline">An inline custom
                                                                input</label></div>
                                                            <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline2" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                                   for="exampleCustomInline2">and another one</label>
                                                            </div>
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
                                                            <div class="position-relative form-group"><label for="exampleCustomMutlipleSelect" class="">Custom Multiple Select</label><select multiple="" type="select" id="exampleCustomMutlipleSelect"
                                                                                                                                                                                              name="customSelect" class="custom-select">
                                                                <option value="">Select</option>
                                                                <option>Value 1</option>
                                                                <option>Value 2</option>
                                                                <option>Value 3</option>
                                                                <option>Value 4</option>
                                                                <option>Value 5</option>
                                                            </select></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group"><label for="exampleCustomSelectDisabled" class="">Custom Select Disabled</label><select type="select" id="exampleCustomSelectDisabled" name="customSelect"
                                                                                                                                                                                              disabled="" class="custom-select">
                                                                <option value="">Select</option>
                                                                <option>Value 1</option>
                                                                <option>Value 2</option>
                                                                <option>Value 3</option>
                                                                <option>Value 4</option>
                                                                <option>Value 5</option>
                                                            </select></div>
                                                            <div class="position-relative form-group"><label for="exampleCustomMutlipleSelectDisabled" class="">Custom Multiple Select Disabled</label><select multiple="" type="select"
                                                                                                                                                                                                               id="exampleCustomMutlipleSelectDisabled"
                                                                                                                                                                                                               name="customSelect" disabled="" class="custom-select">
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






      <!-- Footer 
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
  
  <!-- Page custom search scripts -->
  <script src="/js/recherche.js"></script>
  
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