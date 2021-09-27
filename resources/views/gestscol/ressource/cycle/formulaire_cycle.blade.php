@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-help2 icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Création d'un Cycle

                    </div>
                </div>
                <div class="page-title-actions">

                    <div class="d-inline-block dropdown">


                    </div>
                </div>    </div>
        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Formulaire</span>
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                         <div class="main-card mb-3 card">
                            <div class="card-body alert alert-success" id="idSuccess" style="display: none;">
                            </div>
                            <div class="card-body alert alert-warning" id="idError" style="display: none;">
                            </div>
                            <div class="card-body ">
                                <form class="">


                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Nom du Cycle <span style="color:red;">*</span></label><input name="nom" id="cycle" placeholder="Classe" type="texte" class="form-control" required>
                                        </div>

                                </form>
                                <button class="mt-1 btn btn-secondary"><a href="#" style="color:white; text-decoration:none;">Annuler</a></button>
                                <button class="mt-1 btn btn-success" onclick="enregistrerCycle()">Enrégistrer</button>
                            </div>

                        </div>
                    </div>

                      </div>

     </div>

     <script type="text/javascript">

        function enregistrerCycle() {
            var cycle = $("#cycle").val();

            $.ajax({
                url: "{{route('gestscol.creer_cycle')}}",
                type: "POST",
                data:{
                "_token": "{{ csrf_token() }}",
                cycle:cycle,
                },

                success:function(response){
                    console.log(response);
                    if (response == 1) {
                        $('#idSuccess').css('display','block');
                        $( "#idSuccess" ).empty().append("cycle enregistré avec succès");

                        var fade_out = function() {
                            $("#idSuccess").css('display','none');
                        }
                        setTimeout(fade_out, 5000);
                    } else {

                        $( "#idError" ).empty();
                        $('#idError').css('display','block');
                        $( "#idError" ).append("erreur d'enregistrement");

                        var fade_out = function() {
                            $("#idError").css('display','none');
                        }
                        setTimeout(fade_out, 5000);

                    }
                },
                error: function(response){
                    $('#idError').css('display','block');
                    $( "#idError" ).append("Veuillez remplir tous les champs obligatoires");
                    var fade_out = function() {
                        $("#idError").css('display','none');
                    }
                    setTimeout(fade_out, 5000);
                }
            });
        }

     </script>
     @endsection
