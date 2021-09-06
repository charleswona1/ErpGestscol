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

            <div class="mdc-card">
              <center><h6 class="card-title" style="color:grey;">Modification du Groupe</h6></center>
              <br/>

              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="table-responsive">
                        <table class="mdc-data-table__table" aria-label="Dessert calories">
                            <tbody class="mdc-data-table__content">
                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Nom du Groupe
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="id_nom_g" placeholder="Nom" value="{{$profil->libelle}}" required>
                                  </td>
                                </tr>

                                <tr data-row-id="u0" class="mdc-data-table__row">
                                  <td class="mdc-data-table__cell" scope="row" id="u0">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading font-weight-bold">Description
                                                    &nbsp;<i class="fa fa-envelope-o text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    <!-- &nbsp;<i class="fa fa-phone" style="cursor:pointer;" aria-hidden="true"></i> -->
                                                    &nbsp;<i class="fa fa-whatsapp text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                    &nbsp;<i class="fa fa-skype text-link" style="cursor:pointer;" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="mdc-data-table__cell">
                                    <input type="text" class="form-control" style="width:100%" id="id_desc" placeholder="Description" value="{{$profil->description}}" required>
                                  </td>
                                </tr>
                            </tbody>
                        </table>



                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5-desktop">
                    <div class="table-responsive">
                        <div class="mdc-card" style="text-align:right;">

                          <section class="mdc-card__supporting-text">
                            <div class="template-demo">

                              <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                &nbsp; <a href="utilisateur-groupe-profil.html" style="color:white;"><i class="material-icons mdc-button__icon">close</i> &nbsp;Annuler &nbsp;</a>
                              </button>
                              <!--<button class="mdc-button mdc-button--raised icon-button filled-button--success">
                                <i class="material-icons mdc-button__icon">colorize</i>
                              </button> -->

                                  <button class="mdc-button mdc-button--success icon-button" >
                                    &nbsp; <a onclick="modifier_groupe({{$profil->id_profil}})"><i class="material-icons mdc-button__icon" style="color:white;">save</i>
                                    &nbsp;<span style="color:white;">Enregistrer &nbsp; </span></a>
                                  </button>


                              <button class="mdc-button mdc-button--raised icon-button filled-button--light">
                                <i class="material-icons mdc-button__icon">print</i>
                              </button>


                            </div>
                          </section>
                        </div>



                    </div>
                  </div>


                </div>
              </div>
              <div class="alert alert-success" id="idSuccess" style="display: none;">

            </div>
            <div class="alert alert-warning" id="idError" style="display: none;">

            </div>
            </div>
          </div>

      </div>

    </main>
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
@endsection
<script type="text/javascript">

    function modifier_groupe(id) {
        var nom_groupe, desc;
        nom_groupe = $('#id_nom_g').val();
        desc = $('#id_desc').val();
        if(nom_groupe.trim() === ""){
            alert("Veuillez donner un nom à ce groupe")
        } else {
            $.ajax({
                url: "{{ route('users.modif_groupe') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                    libelle: nom_groupe,
                    description: desc,
                },

                success: function(response) {
                    if (response == 1) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("Profil modifié avec succès");

                        var fade_out = function() {
                            $("#idSuccess").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    } else {
                        $('#idError').css('display','block');
                        $( "#idError" ).empty().append("Erreur d'enregistrement du profil ");

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

    }

</script>
@section('script')

@endsection
