<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ScoolEngine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="/css/style.css" rel="stylesheet">
<link href="/css/css1/main.css" rel="stylesheet">
<link href="/css/login.css" rel="stylesheet">

</head>


<body>
	<div class="langue">
		<div class="dropdown d-inline-block" style="text-decoration:none;">
			<button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-1 mr-1 dropdown-toggle btn btn-link">
				<img src="/images/logo-fr.jpg" width="20px" alt="Logo Fr" />&nbsp; Français
			</button>
			<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" >
				<button type="button" tabindex="0" class="dropdown-item" >
					<img src="/images/logo-En.png" width="20px" alt="Logo En" />&nbsp; Anglais
				</button>                                         
			</div>
		</div>
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="{{ route('logout') }}"
	           onclick="event.preventDefault();
	                         document.getElementById('logout-form').submit();">
	            {{ __('Logout') }}
	        </a>

	        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	            @csrf
	        </form>
	    </div>
	</div>
	
	
	
	<div class="row">
		<div class="col col-lg-12" style="margin-bottom:10px;">
			<div class="logo">	
				<img src="/images/logo-School-engine.png" width="400px" alt="Logo SchoolEngine" />
			</div>
		</div>
		
		
<div class="container" >
	<div class="row" style="padding-top:50px">
		<div class="col-md-3 col-sm-4 col-xs-6">
			<center>
			<a href=""><img class="img-responsive" src="/images/logos/tb.jpg" width="50%" />
			<br><span class="titre">Tableau de Bord</span> </a>
			</center>
		</div>
        <div class="col-md-3 col-sm-4 col-xs-6">
			<center>
			<a href="{{ route('gestscol.home') }}"><img class="img-responsive" src="/images/logos/gestscol.jpg" width="50%" />
			<br><span class="titre">Gestscol</span> </a>
			</center>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
		<center>
			<a href=""><img class="img-responsive" src="/images/logos/caisse.jpg" width="50%"/>
			<br><span class="titre">Caisse</span> </a>
			</center>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
		<center>
			<a href=""><img class="img-responsive" src="/images/logos/paye.jpg" width="50%" />
			<br><span class="titre">RH & Paye</span> </a>
			</center>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
		<center>
			<a href=""><img class="img-responsive" src="/images/logos/compta.jpg" width="50%"/>
			<br><span class="titre">Comptabilité</span> </a>
			</center>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
		<center>
			<a href="{{ route('configuration.home') }}"><img class="img-responsive" src="/images/logos/configuration.jpg" width="50%"/>
			<br><span class="titre">configuration</span> </a>
			</center>
		</div>
    </div>
</div>

</body>
<footer >

	<div class="align-middle"  style="font-size:0.8em; text-align: right; margin-right: 20px; margin-top:5px;" >
	    CopyRight © 2021 Infogenie Technologies
	</div>
						
</footer>  


<script type="text/javascript" src="/assets/scripts/main.js"></script>

</html>


<html></html> 
<html></html> 