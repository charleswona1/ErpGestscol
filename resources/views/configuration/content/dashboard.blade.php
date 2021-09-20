@extends('configuration.home')

@section('content')

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card info-card info-card--success">
              <div class="card-inner">
                <h5 class="card-title">Effectif Etablissement</h5>
                 <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom"></h5></a>
                <a href=""><span class="tx-12 text-muted"></span></a> <br/>
                <a href=""><span class="tx-12 text-muted"></span></a>
                <div class="card-icon-wrapper">
                  <i class="material-icons">business</i>
                </div>
              </div>
            </div>
          </div>
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card info-card info-card--danger">
              <div class="card-inner">
                <h5 class="card-title">Utilisateurs</h5>
                <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom"></h5></a>
                <div class="card-icon-wrapper">
                  <i class="material-icons">people</i>
                </div>
              </div>
            </div>
          </div>
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card info-card info-card--primary">
              <div class="card-inner">
                <h5 class="card-title">Modules Installés</h5>
                <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom"></h5></a>

                <div class="card-icon-wrapper">
                  <i class="material-icons">widgets</i>
                </div>
              </div>
            </div>
          </div>
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card info-card info-card--info">
              <div class="card-inner">
                <h5 class="card-title">Années Académiques</h5>
                <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom"></h5></a>
                <a href=""><span class="tx-12 text-muted"> En cours</span></a> <br/>
                <div class="card-icon-wrapper">
                  <i class="material-icons">event_available</i>
                </div>
              </div>
            </div>
          </div>
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
            <div class="mdc-card">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Les Utilisateurs</h4>
                <div>
                    <i class="material-icons refresh-icon">refresh</i>
                    <i class="material-icons options-icon ml-2">more_vert</i>

                </div>
              </div>
              <div class="d-block d-sm-flex justify-content-between align-items-center">
                  <h5 class="card-sub-title mb-2 mb-sm-0">R&eacute;partition par modules installés</h5>
                 <div class="menu-button-container">
                    <button class="mdc-button mdc-menu-button mdc-button--raised button-box-shadow tx-12 text-dark bg-white font-weight-light">
                        Cette ann&eacute;e
                      <i class="material-icons">arrow_drop_down</i>
                    </button>
                    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                      <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                        <li class="mdc-list-item" role="menuitem">
                          <h6 class="item-subject font-weight-normal">L'ann&eacute;e derni&egrave;re</h6>
                        </li>
                        <li class="mdc-list-item" role="menuitem">
                          <h6 class="item-subject font-weight-normal">Toutes</h6>
                        </li>

                        <!-- <li class="mdc-list-divider"></li>
                        <li class="mdc-list-item" role="menuitem">
                          <h6 class="item-subject font-weight-normal">Save As..</h6>
                        </li> -->
                      </ul>
                    </div>
                  </div>
             </div>
              <div class="mdc-layout-grid__inner mt-2">
                <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12 mdc-layout-grid__cell--span-12-tablet">
                    <div class="table-responsive">
                      <!-- <table class="table dashboard-table"> -->
                      <table class="table dashboard-table" aria-label="Dessert calories">
                        <thead>
                            <tr>
                                <td style="font-size:0.9em;">Modules</td>
                                <td style="font-size:0.9em;">Nombre utilisateurs</td>
                                <td style="font-size:0.9em;">Actifs</td>
                                <td style="font-size:0.9em;">Inactif</td>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span class="flag-icon-container"></span>Gestscol</td>
                            <td>10</td>
                            <td>09</td>
                            <td>01</td>
                          </tr>
                          <tr>
                            <td>
                              <span class="flag-icon-container"></span>Caisse</td>
                            <td>05</td>
                            <td>05</td>
                            <td>00</td>
                            </tr>
                        </tbody>
                        <tfoot style="background-color:#9bc4fc;">
                            <tr>
                                <td style="font-size:0.9em; font-weight:bold;">TOTAUX</td>
                                <td style="font-size:0.9em; font-weight:bold;">15</td>
                                <td style="font-size:0.9em; font-weight:bold;">14</td>
                                <td style="font-size:0.9em; font-weight:bold;">01</td>

                            </tr>
                        </tfoot>
                      </table>
                    </div>
                </div>
                <!--<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                  <div id="revenue-map" class="revenue-world-map"></div>
                </div> -->
              </div>
            </div>
          </div>
        <!-- <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card bg-success text-white">
              <div class="d-flex justify-content-between">
                <h3 class="font-weight-normal">Impressions</h3>
                <i class="material-icons options-icon text-white">more_vert</i>
              </div>
              <div class="mdc-layout-grid__inner align-items-center">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-2-phone">
                  <div>
                    <h5 class="font-weight-normal mt-2">Customers 58.39k</h5>
                    <h2 class="font-weight-normal mt-3 mb-0">636,757K</h2>
                  </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8-desktop mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-2-phone">
                  <canvas id="impressions-chart" height="80"></canvas>
                </div>
              </div>
            </div>
          </div> -->
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card bg-info text-white">
                <div class="d-flex justify-content-between">
                  <h3 class="font-weight-normal">Traffic</h3>
                  <i class="material-icons options-icon text-white">more_vert</i>
                </div>
                <div class="mdc-layout-grid__inner align-items-center">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-2-phone">
                    <div>
                      <h5 class="font-weight-normal mt-2">Utilisateurs Actifs</h5>
                      <h2 class="font-weight-normal mt-3 mb-0">78%</h2>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8-desktop mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-2-phone">
                    <canvas id="traffic-chart" height="200"></canvas>
                  </div>
                </div>
            </div>
          </div>


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
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Copyright © 2021 <a href="https://www.infogenie.cm" target="_blank"> INFOGENIE </a> Technologies</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection
