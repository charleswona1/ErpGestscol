@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-study icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Formulaire de création d'un Apprenant
                        <!-- <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                        </div> -->
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success" id="idSuccess" style="display: none;">
            </div>
            <div class="alert alert-warning" id="idError" style="display: none;">
            </div>
        </div>

        

        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="tab" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                <span>Informations Personnelles</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="tab" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                <span>Informations Familiales</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="tab" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                <span>Autres Informations</span>
              </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-6">
                       <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Identification</h5>
                                <form class="">
                                    @csrf
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Nom complet <span style="color:red;">*</span></label>
                                        <input name="nom" id="nom_apprenant" required placeholder="Nom complet de l'élève" type="email" class="form-control">
                                    </div>
                                  <div class="input-group">
                                        <div class="position-relative form-group">
                                            <label for="lieuNaissance" class="">Né le <span style="color:red;">*</span></label>
                                            <input name="lieuNaissance" id="dateN" required placeholder="date de naissance" type="date" class="form-control">
                                        </div>
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">A</label>
                                      <input name="lieuNaissance" id="lieuNaissance" placeholder="Lieu de naissance" type="text" class="form-control"></div>
                                    </div>

                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Sexe <span style="color:red;">*</span></label>
                                    <select name="sexe" required id="sexe" class="form-control">
                                        <option value="M">Masculin</option>
                                        <option value="F">Féminin</option>
                                    </select></div>
                                    <div class="position-relative form-group">
                                        <label for="exampleText" class="">Domicile</label>
                                        <textarea name="domicile" id="domicile" class="form-control"></textarea>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="exampleFile" class="">Photo</label>
                                        <input name="file" id="image" type="file" class="form-control-file">
                                        <small class="form-text text-muted">Le taille de la photo doit être de 2Mo maximum.</small>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                          <div class="card-body">   <!--<h5 class="card-title">Sizing</h5> -->
                                <form class="">
                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Réligion</label>
                                        <select name="religion" id="religion" class="form-control">
                                            <option value="Catholique">Catholique</option>
                                            <option value="Protestant">Protestant</option>
                                            <option value="Evangeliste">Evangeliste</option>
                                            <option value="Panthécotiste">Panthécotiste</option>
                                            <option value="Musulman">Musulman</option>
                                            <option value="Budiste">Budiste</option>
                                            <option value="1">Autre</option>
                                        </select>
                                    </div>
                                    <div class="position-relative form-group" style="display:none;">
                                        <label for="autre_religion" class="">Preciser</label>
                                        <input name="autre_religion" id="autre_religion" placeholder="Preciser l'autre religion" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="email" class="">Email</label>
                                        <input name="email" id="email" placeholder="Email" type="email" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="contact" class="">Contact</label>
                                        <input name="contact" id="contact" placeholder="Téléphone de l'élève" type="text" class="form-control">
                                    </div>
                            </div>

                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><label for="exampleSelect" class="">Groupe Sanguin</label>
                                <form class="">
                                    <fieldset class="position-relative form-group">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="A+"> A+ &nbsp; &nbsp; &nbsp;</label>
                                            <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="A-"> A- &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                            <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="AB+"> AB+ &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                            <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="AB-"> AB- &nbsp; &nbsp;&nbsp; &nbsp;</label>
                                        </div>
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="B+"> B+ &nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="B-"> B-  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="O+"> O+ &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="groupe_sanguin" type="radio" class="form-check-input" value="O-"> O- &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">PARENTS</h5>
                                <div>
                                    <table>
                                     <tr>
                                        <td width="50%">
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Nom de la Mère <span style="color:red;">*</span></label>
                                                <input name="nom_mere" id="nom_mere" placeholder="Nom de la mère" type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Profession</label>
                                                <input name="prof_mere" id="prof_mere" placeholder="Profession de la mère" type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Téléphone</label>
                                                <input name="tel_mere" id="tel_mere" placeholder="Téléphone de la mère" type="text" class="form-control">
                                            </div>
                                        </td>
                                     </tr>
                                    </table>
                                    <table>
                                     <tr>
                                        <td width="50%">
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Nom du Père</label>
                                                <input name="nom_pere" id="nom_pere" placeholder="Nom du père" type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Profession</label>
                                                <input name="prof_pere" id="prof_pere" placeholder="Profession du père" type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Téléphone</label>
                                                <input name="tel_pere" id="tel_pere" placeholder="Téléphone du père" type="text" class="form-control">
                                            </div>
                                        </td>
                                     </tr>
                                    </table>
                                    <table>
                                     <tr>
                                        <td width="50%">
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Nom du Tuteur</label>
                                                <input name="lieuNaissance" id="nom_tuteur" placeholder="Nom du tuteur" type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Profession</label>
                                                <input name="lieuNaissance" id="prof_tuteur" placeholder="Profession du tuteur" type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="lieuNaissance" class="">Téléphone</label>
                                                <input name="lieuNaissance" id="tel_tuteur" placeholder="Téléphone du tuteur" type="text" class="form-control">
                                            </div>
                                        </td>
                                     </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">CONTACT D'URGENCE</h5>
                                <div>
                                    <div class="position-relative form-group">
                                       <div class="position-relative form-group">
                                           <label for="exampleSelect" class="">Personne à contacter en cas d'urgence</label>
                                            <select name="select" id="index_contact" class="form-control">
                                                <option value="1">Père</option>
                                                <option value="2">Mère</option>
                                                <option value="3">Tuteur</option>
                                                <option value="Autre">Autre</option>
                                            </select>
                                        </div>
                                    <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'Autre contact" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <form class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">SANTE</h5>
                                    <div class="position-relative form-group">
                                        <div>
                                            <div class="custom-checkbox custom-control">
                                                <input name="sante" id="sante" type="radio" class="form-check-input" value="Apte">
                                                <label class="form-check-label" for="sante">Apte</label>
                                            </div>
                                            <div class="custom-checkbox custom-control">
                                                <input name="sante" id="sante" type="radio" class="form-check-input" value="Inapte">
                                                <label class="form-check-label" for="sante">Inapte</label>
                                            </div>
                                            <div class="custom-checkbox custom-control">
                                                <input name="sante" id="sante" type="radio" class="form-check-input" value="Handicapé">
                                                <label class="form-check-label" for="sante">Handicapé</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">etablissement antérieur</h5>
                                    <div class="position-relative form-group">
                                        <div>
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">
                                                Etablissement</label><input name="nom" id="etablA" placeholder="Etablissement" type="text" class="form-control"></div>

                                            <div class="position-relative form-group"><label for="exampleEmail" class="">
                                                Classe</label><input name="nom" id="classeA" placeholder="classe" type="text" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">
                                                Classes Redoublées</label><input name="ClasseR" id="classeR" placeholder="Classes Redoublées" type="text" class="form-control"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <button class="mt-2 btn btn-success" onclick="saveApprenant()">Enrégistrer</button>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">

function saveApprenant() {

    var nom = $("#nom_apprenant").val();
    var dateNaissance = $("#dateN").val();
    var lieuNaissance = $("#lieuNaissance").val();
    var sexe = $("#sexe option:selected" ).val();
    var domicile = $("#domicile").val();
    var email = $("#email").val();
    var nom_pere = $("#nom_pere").val();
    var profession_pere = $("#prof_pere").val();
    var tel_pere = $("#tel_pere").val();
    var nom_mere = $("#nom_mere").val();
    var profession_mere = $("#prof_mere").val();
    var tel_mere = $("#tel_mere").val();
    var nom_tuteur = $("#nom_tuteur").val();
    var profession_tuteur = $("#prof_tuteur").val();
    var tel_tuteur = $("#tel_tuteur").val();
    var groupe_sanguin = $("input[name='radio1']:checked").val();
    var religion = $("#religion option:selected" ).val();
    var contact = $("#contact").val();
    var autre = $("#index_contact").val();
    var type_contact = 1;

    $.ajax({
        url: "{{route('gestscol.ajouter_apprenant')}}",
        type: "POST",
        data:{
        "_token": "{{ csrf_token() }}",
        nom:nom,
        dateNaissance:dateNaissance,
        lieuNaissance:lieuNaissance,
        sexe:sexe,
        domicile:domicile,
        email:email,
        nom_pere:nom_pere,
        profession_pere:profession_pere,
        tel_pere:tel_pere,
        nom_mere:nom_mere,
        profession_mere:profession_mere,
        tel_mere:tel_mere,
        nom_tuteur:nom_tuteur,
        profession_tuteur:profession_tuteur,
        tel_tuteur:tel_tuteur,
        groupe_sanguin:groupe_sanguin,
        religion:religion,
        contact:contact,
        type_contact:type_contact,
        autre:autre
        },

        success:function(response){
            console.log(response);
            if (response == 1) {
                $('#idSuccess').css('display','block');
                $( "#idSuccess" ).empty().append("Apprenant enregistré avec succès");

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
