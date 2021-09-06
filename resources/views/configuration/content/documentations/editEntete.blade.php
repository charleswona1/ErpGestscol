@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection

<?php
    $enteteG = explode("__", $entete->eng_gauche);
    $enteteD = explode("__", $entete->eng_droit);
?>

@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">

          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Entête de l'Etablissement</h6></center>
           </div>
            </div>
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
            <div class="mdc-card p-0">
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row">
                      <th class="mdc-data-table__header-cell" style="text-align:center;" role="columnheader" scope="col">Gauche</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">
                    <?php $i = 1; ?>
                    @foreach ($enteteG as $ent)
                        <tr data-row-id="u0" class="mdc-data-table__row">
                            <td class="mdc-data-table__cell">
                                <input type="text" class="form-control" style="width:100%; text-align:center;" id="eng_g{{$i}}" placeholder="Nom"
                                value="{{$ent}}" required>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                    @while ($i<5)
                        <tr data-row-id="u0" class="mdc-data-table__row">
                            <td class="mdc-data-table__cell">
                                <input type="text" class="form-control" style="width:100%; text-align:center;" id="eng_g{{$i}}" placeholder="Nom"
                                value="/" required>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endwhile
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
            <div class="mdc-card p-0">
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row">
                      <th class="mdc-data-table__header-cell" style="text-align:center;"  role="columnheader" scope="col">LOGO</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
            <div class="mdc-card p-0">
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row">
                      <th class="mdc-data-table__header-cell" style="text-align:center;"  role="columnheader" scope="col">Droite</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content" style="text-align:center;">
                        <?php $j = 1; ?>
                        @foreach ($enteteD as $ent)
                            <tr data-row-id="u0" class="mdc-data-table__row">
                                <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%; text-align:center;" id="eng_d{{$j}}" placeholder="Nom"
                                    value="{{$ent}}">
                                </td>
                            </tr>
                            <?php $j++; ?>
                        @endforeach

                        @while ($j<5))
                            <tr data-row-id="u0" class="mdc-data-table__row">
                                <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%; text-align:center;" id="eng_d{{$j}}" placeholder="Nom"
                                    value="/" required>
                                </td>
                            </tr>
                            <?php $j++; ?>
                        @endwhile

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

            <div >
                <table style="text-align:center;">
                    <tr>
                    <td class="mdc-data-table__cell">
                            <button class="mdc-button mdc-button--success icon-button" >
                                    &nbsp; <a onclick="save_entete({{$entete->id_entete}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                    &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                            </button>
                            </td>
                    <td class="mdc-data-table__cell">
                            <button class="mdc-button mdc-button--secondary icon-button" >
                                    &nbsp; <a href="etablissement-entete.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i>
                                    &nbsp;<span style="color:white; font-size:0.8em;">Annuler &nbsp; </span></a>
                            </button>
                    </td>
                    </tr>
                </table>
            </div>


        </div>
        </div>
      </div>
        <div class="alert alert-success" id="idSuccess" style="display: none;">

        </div>
        <div class="alert alert-warning" id="idError" style="display: none;">

        </div>
    </main>
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>

@endsection
<script type="text/javascript">
    function save_entete(id) {
        var entete_g, entete_d, i;
        i=4;
        entete_d = "";
        entete_g = "";
        compt1 = 0;
        compt2 = 0;
        while(i>0){
            if($("#eng_g"+i).val() != "/" && $("#eng_g"+i).val().trim() != ""){
                if(compt1 == 0){
                    entete_g = $("#eng_g"+i).val();
                    compt1++;
                } else {
                    entete_g = $("#eng_g"+i).val()+"__"+entete_g;
                }

            }

            if($("#eng_d"+i).val() != "/" && $("#eng_d"+i).val().trim() != ""){
                if(compt2 == 0){
                    entete_d = $("#eng_d"+i).val();
                    compt2++;
                } else {
                    entete_d = $("#eng_d"+i).val()+"__"+entete_d;
                }
            }

            i--;
        }

        console.log(entete_g+"  "+entete_d)

        $.ajax({
            url: "{{ route('users.modifEntete') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                entete_g: entete_g,
                entete_d: entete_d,
            },

            success: function(response) {
                console.log(response);
                if(response == 1){

                    $('#idSuccess').css('display','block');
                    $( "#idSuccess" ).empty().append("Entete modifié avec succès");

                    var fade_out = function() {
                        $("#idSuccess").css('display','none');
                    }
                    setTimeout(fade_out, 5000);

                } else {
                    $('#idError').css('display','block');
                    $( "#idError" ).empty().append("Erreur de suppression");

                    var fade_out = function() {
                        $("#idError").css('display','none');
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
</script>
@section('script')

@endsection
