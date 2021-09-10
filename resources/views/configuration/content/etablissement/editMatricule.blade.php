@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection
@section('content')
<?php
    if(isset($matricule->prefix_mat))
        $prefix_mat = $matricule->prefix_mat;
    else
    $prefix_mat = "";

    if(isset($matricule->prefix2_mat))
        $prefix2_mat = $matricule->prefix2_mat;
    else
    $prefix2_mat = "";

    if(isset($matricule->suffix_mat))
        $suffix_mat = $matricule->suffix_mat;
    else
    $suffix_mat = "";

    if(isset($matricule->pos_mat))
        $pos_mat = $matricule->pos_mat;
    else
    $pos_mat = "";

    $id = $matricule->id_parametrage;
?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">

          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
            <div >
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Modification Matricule</h6></center>


                 </div>
                 <br/>
                 <br/>
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>

                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Préfixe 1</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Préfixe 2</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Suffixe</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Position ID</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                    <tr data-row-id="u0" class="mdc-data-table__row">
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="prefix_mat" placeholder="Nom complet" value="{{$prefix_mat}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="prefix2_mat" placeholder="Nom complet" value="{{$prefix2_mat}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <input type="text" class="form-control" style="width:100%" id="suffix_mat" placeholder="Nom complet" value="{{$suffix_mat}}">
                      </td>
                      <td class="mdc-data-table__cell">
                        <select class="mdl-selectfield__select" id="pos_mat" name="professsion" style="width:100%">
                            <option value="{{$pos_mat}}" selected></option>
                            <option value="Avant Préfixe 1">Avant Préfixe 1</option>
                            <option value="Avant Préfixe 2">Avant Préfixe 2</option>
                            <option value="Avant suffixe">Avant suffixe</option>
                            <option value="Après suffixe">Après suffixe</option>
                        </select>
                      </td>
                      <td class="mdc-data-table__cell">
                        <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                        <a href="etablissement-matricule.html">
                            <button class="mdc-button mdc-button--dark icon-button" >
                                    &nbsp; <a onclick="save_matricule({{$id}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                    &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span></a>
                            </button>
                        </a>
                        <a href="etablissement-matricule.html">
                            <button class="mdc-button mdc-button--secondary icon-button" >
                                    &nbsp; <a href="etablissement-matricule.html"><i class="material-icons mdc-button__icon" style="color:white;">close</i>
                                    &nbsp;</a>
                            </button>
                        </a>
                      </td>
                    </tr>

                  </tbody>
                </table>
                <div class="alert alert-success" id="idSuccess" style="display: none;"></div>
                <div class="alert alert-warning" id="idError" style="display: none;"></div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </main>
  </div>

  <script type="text/javascript">
    function save_matricule(id){
        var prefix_mat, prefix2_mat, pos_mat, suffix_mat;

        prefix_mat = $("#prefix_mat").val();
        prefix2_mat = $("#prefix2_mat").val();
        pos_mat = $("#pos_mat").val();
        suffix_mat = $("#suffix_mat").val();


        $.ajax({
            url: "{{ route('users.add_matricule') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                prefix_mat: prefix_mat,
                prefix2_mat: prefix2_mat,
                pos_mat: pos_mat,
                suffix_mat: suffix_mat,
            },

            success: function(response) {
                if (response == 1) {
                    $('#idSuccess').css('display','block');
                    $( "#idSuccess" ).empty().append("Matricule enregistré avec succès");

                    var fade_out = function() {
                        $("#idSuccess").css('display','none');
                    }
                    setTimeout(fade_out, 2000);
                    window.location.href = "/configuration/matricule";
                } else {
                    $('#idError').css('display','block');
                    $( "#idError" ).empty().append("Erreur d'enregistrement du matricule ");

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
