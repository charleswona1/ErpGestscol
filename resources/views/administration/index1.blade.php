
@extends('administration.principal')

  @section('content')

  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--success">
            <div class="card-inner">
              <h5 class="card-title">Total Etablissements</h5>
               <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom">50</h5></a>
              <a href=""><p class="tx-12 text-muted">65 Utilisateurs</p></a>
              <div class="card-icon-wrapper">
                <i class="material-icons">dvr</i>
              </div>
            </div>
          </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--danger">
            <div class="card-inner">
              <h5 class="card-title">Ecoles Primaires</h5>
              <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom">05</h5></a>
              <a href=""><p class="tx-12 text-muted">10 Utilisateurs</p></a>
              <div class="card-icon-wrapper">
                <i class="material-icons">credit_card</i>
              </div>
            </div>
          </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--primary">
            <div class="card-inner">
              <h5 class="card-title">Secondaires</h5>
              <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom">35</h5></a>
              <a href=""><p class="tx-12 text-muted">45 Utilisateurs</p></a>
              <div class="card-icon-wrapper">
                <i class="material-icons">credit_card</i>
              </div>
            </div>
          </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--info">
            <div class="card-inner">
              <h5 class="card-title">Universit&eacute;s</h5>
              <a href=""><h5 class="font-weight-light pb-2 mb-1 border-bottom">10</h5></a>
              <a href=""><p class="tx-12 text-muted">10 Utilisateurs</p></a>
              <div class="card-icon-wrapper">
                <i class="material-icons">credit_card</i>
              </div>
            </div>
          </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
          <div class="mdc-card">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mb-0">Nos Etablissements</h4>
              <div>
                  <i class="material-icons refresh-icon">refresh</i>
                  <i class="material-icons options-icon ml-2">more_vert</i>
  		
              </div>
            </div>
            <div class="d-block d-sm-flex justify-content-between align-items-center">
                <h5 class="card-sub-title mb-2 mb-sm-0">R&eacute;partition des &eacute;tablissements par r&eacute;gion</h5>
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
  					<td style="font-size:0.9em;">Region</td>
  					<td style="font-size:0.9em;">Nombre d'Etablissements</td>
  					<td style="font-size:0.9em;">Pourcentage</td>
  					<td style="font-size:0.9em;">Nombre d'utilisateurs</td>
  					<td style="font-size:0.9em;">Gestscol</td>
  					<td style="font-size:0.9em;">Caisse</td>
  					<td style="font-size:0.9em;">RH/Paye</td>
  					<td style="font-size:0.9em;">Comptabilit&eacute;</td>
  				</tr>
  			</thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Adamaoua</td>
                          <td>00</td>
                          <td class=" font-weight-medium"> 00% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
  			  <tr>
                          <td>
                            <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Centre</td>
                          <td>45</td>
                          <td class=" font-weight-medium"> 90% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
  			  <tr>
                          <td>
                            <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Est</td>
                          <td>01</td>
                          <td class=" font-weight-medium"> 00% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
                        <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Extr&ecirc;me-Nord 	</td>
                          <td>00</td>
                          <td class=" font-weight-medium"> 00% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
                        <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Littoral</td>
                          <td>02</td>
                          <td class=" font-weight-medium"> 02 </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
                        <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Nord</td>
                          <td>00</td>
                          <td class=" font-weight-medium"> 00% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
                        <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Nord-Ouest</td>
                          <td>00</td>
                          <td class=" font-weight-medium"> 00% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
  			  <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Ouest</td>
                          <td>5</td>
                          <td class=" font-weight-medium"> 05% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
  			  <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Sud</td>
                          <td>03</td>
                          <td class=" font-weight-medium"> 03% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
  			  <tr>
                          <td> <span class="flag-icon-container"><i class="flag-icon flag-icon-cm mr-2"></i></span>Sud-ouest</td>
                          <td>00</td>
                          <td class=" font-weight-medium"> 00% </td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
  				<td>01</td>
                        </tr>
                      </tbody>
  			<tfoot style="background-color:#9bc4fc;">
  				<tr>
  					<td style="font-size:0.9em; font-weight:bold;">TOTAUX</td>
  					<td style="font-size:0.9em; font-weight:bold;">50</td>
  					<td style="font-size:0.9em; font-weight:bold;">100%</td>
  					<td style="font-size:0.9em; font-weight:bold;">65</td>
  					<td style="font-size:0.9em; font-weight:bold;">60</td>
  					<td style="font-size:0.9em; font-weight:bold;">42</td>
  					<td style="font-size:0.9em; font-weight:bold;">40</td>
  					<td style="font-size:0.9em; font-weight:bold;">27</td>
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
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
          <div class="mdc-card">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-2 mb-sm-0">Licences par Modules</h4>
              <div class="d-flex justtify-content-between align-items-center">
                <p class="d-none d-sm-block text-muted tx-12 mb-0 mr-2">Ann&eacute;es</p>
                <i class="material-icons options-icon">more_vert</i>
              </div>
            </div>
            <div class="d-block d-sm-flex justify-content-between align-items-center">
              <h6 class="card-sub-title mb-0">Taux d'activation des Licences par Modules</h6>
              <div class="mdc-tab-wrapper revenue-tab mdc-tab--secondary"> 
                <div class="mdc-tab-bar" role="tablist">
                  <div class="mdc-tab-scroller">
                    <div class="mdc-tab-scroller__scroll-area">
                      <div class="mdc-tab-scroller__scroll-content">
                        <button class="mdc-tab mdc-tab--active" role="tab" aria-selected="true" tabindex="0">
                          <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">2021</span>
                          </span>
                          <span class="mdc-tab-indicator mdc-tab-indicator--active">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                          </span>
                          <span class="mdc-tab__ripple"></span>
                        </button>
                        <button class="mdc-tab mdc-tab" role="tab" aria-selected="true" tabindex="0">
                          <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">2022</span>
                          </span>
                          <span class="mdc-tab-indicator mdc-tab-indicator">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                          </span>
                          <span class="mdc-tab__ripple"></span>
                        </button>
                        
                        <button class="mdc-tab mdc-tab" role="tab" aria-selected="true" tabindex="0">
                          <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Toutes</span>
                          </span>
                          <span class="mdc-tab-indicator mdc-tab-indicator">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                          </span>
                          <span class="mdc-tab__ripple"></span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content content--active">    
                </div>
                <div class="content">
                </div>
                <div class="content">    
                </div>
                <div class="content">
                </div>
                <div class="content">
                </div>
              </div>
            </div>
            <div class="chart-container mt-4">
              <canvas id="revenue-chart" height="260"></canvas>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </main>
@endsection
