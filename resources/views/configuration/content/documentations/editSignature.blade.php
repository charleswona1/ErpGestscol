@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection
<?php
    if(isset($document->sign_bulg))
        $sign_bulg = $document->sign_bulg;
    else
    $sign_bulg = "";

    if(isset($document->sign_buld))
        $sign_buld = $document->sign_buld;
    else
    $sign_buld = "";

    if(isset($document->sign_bulm))
        $sign_bulm = $document->sign_bulm;
    else
    $sign_bulm = "";

    if(isset($document->sign_app))
        $sign_app = $document->sign_app;
    else
    $sign_app = "";

    $id = $document->id_signature;

?>
@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">

               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Intitulés des Signatures</h6></center>

              <div class="template-demo">


                  </div>

              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>
                    <tr class="mdc-data-table__header-row">

                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Gauche</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Centre</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Droite</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Sign Apprenant</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="sign_bulg" placeholder="Nom complet" value="{{$sign_bulg}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="sign_bulm" placeholder="Nom complet" value="{{$sign_bulm}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="sign_buld" placeholder="Nom complet" value="{{$sign_buld}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="sign_app" placeholder="Nom complet" value="{{$sign_app}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <button class="mdc-button mdc-button--dark icon-button" >
                                &nbsp; <a onclick="save_signature({{$id}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                        </button>
                        <button class="mdc-button mdc-button--secondary icon-button" >
                                &nbsp; <a href="etablissement-signature.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i>
                                &nbsp;</a>
                        </button>
                      </td>

                    </tr>


                  </tbody>
                </table>
                <div class="alert alert-success" id="idSuccess" style="display: none;">

                </div>
                <div class="alert alert-warning" id="idError" style="display: none;">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script type="text/javascript">
    function save_signature(id){
        var sign_bulg, sign_buld, sign_app, sign_bulm;

        sign_bulg = $("#sign_bulg").val();
        sign_buld = $("#sign_buld").val();
        sign_app = $("#sign_app").val();
        sign_bulm = $("#sign_bulm").val();

        console.log(sign_app+" 1- "+sign_bulg+" 2- "+sign_buld+" 3- "+sign_app);

        $.ajax({
            url: "{{ route('users.addSignature') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                sign_bulg: sign_bulg,
                sign_buld: sign_buld,
                sign_bulm: sign_bulm,
                sign_app: sign_app,
            },

            success: function(response) {
                if (response == 1) {
                    $('#idSuccess').css('display','block');
                    $( "#idSuccess" ).empty().append("Signature enregistrée avec succès");

                    var fade_out = function() {
                        $("#idSuccess").css('display','none');
                    }
                    setTimeout(fade_out, 2000);
                    window.location.href = "/configuration/documentation/signature";
                } else {
                    $('#idError').css('display','block');
                    $( "#idError" ).empty().append("Erreur d'enregistrement de la signature ");

                    var fade_out = function() {
                        $("#idError").css('display','none');
                    }
                    setTimeout(fade_out, 5000);
                }

            },
            error: function(response) {
                alert("erreur");
                console.log(response);
            }
        });


    }
  </script>
@endsection
