<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Material Dash</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('assets1/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets1/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="assets1/css/demo/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        <link rel="stylesheet" href="/css/bootstrap.css">
      </head>
<body>
<script src="assets/js/preloader.js"></script>

<div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  @if($errors->any())
                    <div class="alert alert-danger">
                      <p><strong>erreur!!!!</strong></p>
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                  @endif
                  <form class='cntt-wrapper' method="POST" action="{{ route('user.authentification') }}" id="form_user">
                    @csrf
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input @error('login') is-invalid @enderror" id="text-field-hero-input" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Login</label>
                          </div>
                          @error('login')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input @error('password') is-invalid @enderror" type="password" id="text-field-hero-input" name="password">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Mots de Passe</label>
                          </div>

                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
							  <input type="hidden" name="etablissement" id="etablissement">
							  <i class="mdc-select__dropdown-icon"></i>
							  <div class="mdc-select__selected-text"></div>
							  <div class="mdc-select__menu mdc-menu-surface demo-width-class">
								<ul class="mdc-list">
								  <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
								  </li>
                  @foreach($ecoles as $ecole)
                    <li class="mdc-list-item" data-value="{{$ecole->id_etablissement}}">
                      {{$ecole->nom}}
                    </li>
                  @endforeach
								</ul>
							  </div>
							  <span class="mdc-floating-label">Etablissement</span>
							  <div class="mdc-line-ripple"></div>
                          </div>
                        </div>
						<div class=class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">

							</div>
						  </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                              <input type="checkbox"
                                      class="mdc-checkbox__native-control"
                                      id="checkbox-1"/>
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
                            <label for="checkbox-1">Se souvenir de moi</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                          <a href="#">Mots de passe oubli&eacute;</a>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <a class="mdc-button mdc-button--dark w-100"
                            onclick="event.preventDefault();
                            document.getElementById('form_user').submit();">
                            Se connecter
                          </a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
    <script src="assets1/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets1/js/material.js"></script>
    <script src="assets1/js/misc.js"></script>
</body>
</html>
