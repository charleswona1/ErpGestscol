@extends('administration.principal')

  @section('content')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-2-tablet">
                <div class="mdc-card info-card info-card--success">
                  <div class="card-inner">
                    <h5 class="card-title">Gestscol</h5>
                    
                    <a href=""><p class="tx-12 text-muted">Gestion Scolaire</p></a>
                    <div class="card-icon-wrapper">
                      <img src="/assets1/images/icones-gestscol.jpg" height="80px"alt="logo"> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-2-tablet">
                <div class="mdc-card info-card info-card--danger">
                  <div class="card-inner">
                    <h5 class="card-title">Caisse</h5>
                    
                    <a href=""><p class="tx-12 text-muted">Gestion de la Tr&eacute;sorerie</p></a>
                    <div class="card-icon-wrapper">
                      <img src="/assets1/images/icones-caisse.jpg" height="80px"alt="logo"> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-2-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <div class="card-inner">
                    <h5 class="card-title">RH/Paye</h5>
                    
                    <a href=""><p class="tx-12 text-muted">Ressource humaine et salaire du personnel</p></a>
                    <div class="card-icon-wrapper">
                      <img src="/assets1/images/icones-Rh-Paie.jpg" height="80px"alt="logo"> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-2-tablet">
                <div class="mdc-card info-card info-card--info">
                  <div class="card-inner">
                    <h5 class="card-title">Comptabilit&eacute;</h5>
                    
                    <a href=""><p class="tx-12 text-muted">Comptabilit&eacute; g&eacute;n&eacute;rale</p></a>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">credit_card</i>
                    </div>
                  </div>
                </div>
              </div>
             </div> 
            
			</div>
          </div>
        </main>
@endsection