@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-add-user icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Formulaire de création d'un Enseignant

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
                <span>Informations professionnelles</span>
              </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Identification</h5>
                            
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Nom complet</label>
                                    <input name="nom" id="nom" placeholder="Nom complet de l'enseignant" type="email" class="form-control">
                                </div>

                                <div class="input-group w-100">
                                    <div class="position-relative form-group">
                                        <label for="lieuNaissance" class="">Date de Naissance </label>
                                        <input name="lieuNaissance" id="dateNaissance" placeholder="Email" type="date" class="form-control">
                                    </div>
                                
                                
                                    <div class="position-relative form-group">
                                        <label for="lieuNaissance" class="">Lieu</label>
                                        <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'élève" type="text" class="form-control">
                                    </div>
                                    
                                    <div class="position-relative form-group">
                                        <label for="exampleSelect" class="">Sexe</label>
                                        <select name="select" id="sexe" class="form-control">
                                            <option value="Masculin">Masculin</option>
                                            <option value="Feminin">Féminin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-group w-100">
                                    <div class="position-relative form-group w-100">
                                        <label for="exampleText" class="">Domicile</label>
                                        <textarea name="text" id="domicile" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="position-relative form-group">
                                    <label for="exampleFile" class="">Photo</label>
                                    <input name="file" id="imageEns" type="file" class="form-control-file">
                                    <small class="form-text text-muted">Le taille de la photo doit être de 2Mo maximum.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                          <div class="card-body">   <!--<h5 class="card-title">Sizing</h5> -->
                                <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Statut au sein de l'établissement</label>
                                    <select name="select" id="status" class="form-control">
                                        <option value="Permanent">Permanent</option>
                                        <option value="Vacataire">Vacataire</option>
                                    </select>
                                </div>

                                <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Niveau Scolaire</label>
                                    <select name="select" id="niveau" class="form-control">
                                        <option value="BEPC">BEPC</option>
                                        <option value="Probatoire">Probatoire</option>
                                        <option value="Baccalauréat">Baccalauréat</option>
                                        <option value="Licence">Licence</option>
                                        <option value="Master">Master</option>
                                        <option value="Doctorat">Doctorat</option>
                                    </select>
                                </div>

                                <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Réligion</label>
                                    <select name="select" id="religion" class="form-control">
                                        <option value="Catholique">Catholique</option>
                                        <option value="Protestant">Protestant</option>
                                        <option value="Evangeliste">Evangeliste</option>
                                        <option value="Panthécotiste">Panthécotiste</option>
                                        <option value="Musulman">Musulman</option>
                                        <option value="Budiste">Budiste</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="lieuNaissance" class="">Email</label>
                                    <input name="lieuNaissance" id="email" placeholder="Email" type="email" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="lieuNaissance" class="">Contact</label>
                                    <input name="lieuNaissance" id="contact" placeholder="Téléphone de l'enseignant" type="text" class="form-control">
                                </div>
                            </div>                                    
                            <div class="card-body">
                                <label for="exampleSelect" class="">Groupe Sanguin</label>
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="A+"> A+ &nbsp; &nbsp; &nbsp;</label>
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="A-"> A- &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="AB+"> AB+ &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="AB-"> AB- &nbsp; &nbsp;&nbsp; &nbsp;</label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="B+"> B+ &nbsp; &nbsp; &nbsp;</label>
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="B-"> B-  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="O+"> O+ &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                    <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input" value="O-"> O- &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">SITUATION</h5>
                                <div>
                                    <div class="position-relative form-group">
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Matricule</label><input name="lieuNaissance" id="matricule" placeholder="Matricule" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Numéro CNPS</label><input name="lieuNaissance" id="cnps" placeholder="N° CNPS père" type="text" class="form-control"></div>
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Numéro CNI</label><input name="lieuNaissance" id="cni" placeholder="N° CNI" type="text" class="form-control"></div>
                                  <hr class="sidebar-divider">
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Date de délivrance CNI</label><input name="lieuNaissance" id="dateDelivrance" placeholder="Date CNI" type="date" class="form-control"></div>
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Fonction</label><input name="lieuNaissance" id="fonction" placeholder="Poste occupé" type="text" class="form-control"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Titre</label>
                                    <select name="select" id="titre" class="form-control">
                                        <option value="Pr">Professeur</option>
                                        <option value="Dr">Docteur</option>
                                        <option value="Mr">Monsieur</option>
                                        <option value="Mme">Madame</option>
                                        <option value="Mlle">Mademoiselle</option>
                                        <option value="Abbe">Abbé</option>
                                        <option value="Pasteur">Pasteur</option>
                                        <option value="Fr">Frère</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="lieuNaissance" class="">Localisation</label>
                                    <input name="lieuNaissance" id="localisation" placeholder="Téléphone" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="lieuNaissance" class="">numero d'autorisation</label>
                                    <input name="lieuNaissance" id="num_autorisation" placeholder="Téléphone" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">CONTACT D'URGENCE</h5>
                                <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Numéro de téléphone d'urgence</label>
                                    <input name="lieuNaissance" id="numero2" placeholder="Téléphone de l'Autre contact" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>  
                    <button class="mt-1 ml-3 btn btn-success" onclick="saveEnseignant()">Enrégistrer</button>
                </div>
            </div>
        </div>
    </div>
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Infogenie Technologies
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

function saveEnseignant() {

    debugger;
    var formData = new FormData();
    var nom = $("#nom").val();
    var dateNaissance = $("#dateNaissance").val();
    var lieuNaissance = $("#lieuNaissance").val();
    var sexe = $("#sexe option:selected" ).text();
    var domicile = $("#domicile").val();
    var image = $("#imageEns")[0].files[0];
    var lienImageVide =  '/images/defaut.jpg';
    var status = $("#status option:selected").val();
    var niveau = $("#niveau option:selected").val();
    var religion = $("#religion option:selected" ).text();
    var titre = $("#titre option:selected" ).text();
    var email = $("#email").val();
    var contact = $("#contact").val();
    var localisation = $("#localisation").val();
    var num_autorisation = $("#num_autorisation").val();
    var groupe_sanguin = $("input[name='radio1']:checked").val();
    var matricule = $("#matricule").val();
    var cnps = $("#cnps").val();
    var cni = $("#cni").val();
    var dateDelivrance = $("#dateDelivrance").val();
    var fonction = $("#fonction").val();

    var imageURL;
    if(image == null){
        imageURL = '/images/utilisateur.png';
        pImage = 1;
    } else {
        imageURL = window.URL.createObjectURL(image);
        pImage = 0;
    }

    formData.append('nom', nom);
    formData.append('dateNaissance', dateNaissance);
    formData.append('lieuNaissance', lieuNaissance);
    formData.append('num_autorisation', num_autorisation);
    formData.append('sexe', sexe);
    formData.append('domicile', domicile);
    formData.append('image', image);
    formData.append('status', status);
    formData.append('niveau', niveau);
    formData.append('religion', religion);
    formData.append('email', email);
    formData.append('contact', contact);
    formData.append('groupe_sanguin', groupe_sanguin);
    formData.append('localisation', localisation);
    formData.append('matricule', matricule);
    formData.append('cnps', cnps);
    formData.append('cni', cni);
    formData.append('dateDelivrance', dateDelivrance);
    formData.append('fonction', fonction);
    formData.append('titre', titre);


    $.ajaxSetup({
        headers: {'X-CSRF-Token': '{{csrf_token()}}'},
    });

    $.ajax({

        url: "{{route('gestscol.ajouter_enseignant')}}",
        type: "POST",
        data:formData,
        processData: false,
        contentType: false,

        success:function(response){
            console.log(response);
            if (response == 1) {
                $('#idSuccess').css('display','block');
                $( "#idSuccess" ).empty().append("Enseignant enregistré avec succès");

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
