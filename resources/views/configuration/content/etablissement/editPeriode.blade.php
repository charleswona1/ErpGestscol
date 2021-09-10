@extends('configuration.home')

@section('style')
<link rel="stylesheet" href="{{ asset('assets1/css/add.css') }}">
@endsection


@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">

          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
            <div >
               <center><h6 class="card-title card-padding pb-0" style="color:grey;" >Modification dénomination Période</h6></center>


                 </div>
                 <br/>
                 <br/>
              <div class="table-responsive">
                <table class="mdc-data-table__table" aria-label="Dessert calories">
                  <thead>

                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Type de période</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Nom</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Adj. Masculin</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Adj. Féminin</th>
                      <th class="mdc-data-table__header-cell" role="columnheader" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="mdc-data-table__content">
                    @if ($niv == 1)
                        <td class="mdc-data-table__cell">Année</td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den1" placeholder="Nom complet" value="{{$denomination->nom_annee}}" required>
                        </td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den2" placeholder="Nom complet" value="{{$denomination->adj_masculin_annee}}" required>
                        </td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den3" placeholder="Nom complet" value="{{$denomination->adj_feminin_annee}}" required>
                        </td>

                        <td class="mdc-data-table__cell">
                            <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                            <a onclick="save_denomination({{$niv}})">
                                <button class="mdc-button mdc-button--dark icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                        &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span>
                                </button>
                            </a>
                            <a href="#">
                                <button class="mdc-button mdc-button--secondary icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">close</i>
                                </button>
                            </a>
                        </td>
                    @elseif ($niv == 2)
                        <td class="mdc-data-table__cell">Periode</td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den1" placeholder="Nom complet" value="{{$denomination->nom_periode}}" required>
                        </td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den2" placeholder="Nom complet" value="{{$denomination->adj_masculin_periode}}" required>
                        </td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den3" placeholder="Nom complet" value="{{$denomination->adj_feminin_periode}}" required>
                        </td>

                        <td class="mdc-data-table__cell">
                            <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                            <a onclick="save_denomination({{$niv}})">
                                <button class="mdc-button mdc-button--dark icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                        &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span>
                                </button>
                            </a>
                            <a href="#">
                                <button class="mdc-button mdc-button--secondary icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">close</i>
                                </button>
                            </a>
                        </td>
                    @elseif ($niv == 3)
                        <td class="mdc-data-table__cell">Sous Periode</td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den1" placeholder="Nom complet" value="{{$denomination->nom_sous_periode}}" required>
                        </td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den2" placeholder="Nom complet" value="{{$denomination->adj_masculin_sous_periode}}" required>
                        </td>
                        <td class="mdc-data-table__cell">
                            <input type="text" class="form-control" style="width:100%" id="id_den3" placeholder="Nom complet" value="{{$denomination->adj_feminin_sous_periode}}" required>
                        </td>

                        <td class="mdc-data-table__cell">
                            <!-- <a href="licence-profil.html"><i class="material-icons mdc-text-field__icon" style="color:black; font-size:1.5em;">visibility</i></a> -->
                            <a onclick="save_denomination({{$niv}})">
                                <button class="mdc-button mdc-button--dark icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                        &nbsp;<span style="color:white; font-size:0.8em;">Enregistrer &nbsp; </span>
                                </button>
                            </a>
                            <a href="#">
                                <button class="mdc-button mdc-button--secondary icon-button" >
                                        &nbsp; <i class="material-icons mdc-button__icon" style="color:white;">close</i>
                                </button>
                            </a>
                        </td>
                    @endif
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
    function save_denomination(id){
        var nom, nom_max, nom_fem;
        nom = $('#id_den1').val();
        nom_fem = $('#id_den3').val();
        nom_max = $('#id_den2').val();

        $.ajax({
            url: "{{route('users.save_denomination')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                nom: nom,
                nom_fem: nom_fem,
                nom_max: nom_max,
                niv: id,
            },

            success:function(response){

                if (response == 1) {
                    $('#idSuccess').css('display','block');
                    $( "#idSuccess" ).empty().append("Dénomination modifiée avec succès avec succès");

                    var fade_out = function() {
                        $("#idSuccess").css('display','none');
                    }
                    setTimeout(fade_out, 2000);
                    window.location.href = "/configuration/periode";
                } else {
                    $('#idError').css('display','block');
                    $( "#idError" ).empty().append("Erreur de modification");

                    var fade_out = function() {
                        $("#idError").css('display','none');
                    }
                    setTimeout(fade_out, 5000);
                }

            },
            error: function(response){
                console.log(response);
                alert('erreur');
            }
        });

    }
  </script>
@endsection
