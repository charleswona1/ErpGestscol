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
		<div class="dropdown d-inline-block">
			<button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-1 mr-1 dropdown-toggle btn btn-link">
				<img src="/images/logo-fr.jpg" width="20px" alt="Logo Fr" />&nbsp; Français
			</button>
			<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" >
				<button type="button" tabindex="0" class="dropdown-item" >
					<img src="/images/logo-En.png" width="20px" alt="Logo En" />&nbsp; Anglais
				</button>                                         
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col col-lg-12" style="margin-bottom:10px;">
			<div class="logo">	
				<img src="/images/logo-School-engine.png" width="400px" alt="Logo SchoolEngine" />
			</div>
		</div>
		
		
<div class="container">
		<div class="col col-lg-12" style="margin-top: 30px;">
		
			<div class="title">	
				Se connecter
			</div>
		</div>
		<p></p>
	</div>
	

      
 <div class="container login-container">
            <div class="row">
                <div class="col-md-4 offset-md-4" >
					<form class="login-form-1"  method="POST" action="{{ route('login') }}">
						@csrf
                        <div class="form-group">
                            <input type="text" class="form-control1 @error('login') is-invalid @enderror" id="login" name="login" placeholder="Identifiant *" value="{{ old('login') }}" required autocomplete="login" autofocus />
		                    @error('login')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
                        </div>
                        
						<div class="form-group">
                            <input type="password" class="form-control1 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mots de passe *" required autocomplete="current-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <a href="home.html">
								<button type="submit" class="btn btn-primary mb">Connexion</button>
							</a>
							@if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('mot de passe oublié?') }}
                                </a>
                            @endif
						</div>
						<div class="form-group">
							<label>
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                               </label>
                            </label>
                        </div>
                        
                    </form>
					
                </div>
                
            </div>
  </div>



               
         
        <div class="col col-lg-12" style="margin-top: 20px; float:bottom; ">
		
			<div class="link">	
				<ul class="lien">
					<li class="liste"><a href="">Besoin d'aide?</a></li>
					<li class="liste"> <a href="">Découvrir le produit</a></li>
				</ul>
			</div>
		</div>
        
        
        
      </div>
    </div>






</body>
<footer >

							<div class="align-middle"  style="font-size:0.8em; text-align: right; margin-right: 20px; margin-top:5px;" >
								 CopyRight © 2021 Infogenie Technologies
							</div>
						
</footer>  


<script type="text/javascript" src="/assets/scripts/main.js"></script></body>

</html>


<html></html> 
<html></html> 