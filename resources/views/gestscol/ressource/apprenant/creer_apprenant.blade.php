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
                </div>    </div>
        </div>
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Informations Personnelles</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <span>Informations Familiales</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                    <span>Autres Informations</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                       <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Identification</h5>
                                <form class="">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Nom complet <span style="color:red;">*</span></label><input name="nom" id="exampleEmail" required placeholder="Nom complet de l'élève" type="email" class="form-control">
                                    </div>
                                  <div class="input-group">
                                        <div class="position-relative form-group">
                                            <label for="lieuNaissance" class="">Né le <span style="color:red;">*</span></label><input name="lieuNaissance" id="lieuNaissance" required placeholder="Email" type="date" class="form-control"></div>
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">A</label>
                                      <input name="lieuNaissance" id="lieuNaissance" placeholder="Lieu de naissance" type="text" class="form-control"></div>
                                    </div>



                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Sexe <span style="color:red;">*</span></label><select name="select" required id="exampleSelect" class="form-control">
                                        <option>Masculin</option>
                                        <option>Féminin</option>
                                    </select></div>
                                    <div class="position-relative form-group"><label for="exampleText" class="">Domicile</label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                   <div class="position-relative form-group"><label for="exampleFile" class="">Photo</label><input name="file" id="exampleFile" type="file" class="form-control-file">
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
                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Réligion</label><select name="select" id="exampleSelect" class="form-control">
                                        <option>Catholique</option>
                                        <option>Protestant</option>
                                        <option>Evangeliste</option>
                                        <option>Panthécotiste</option>
                                        <option>Musulman</option>
                                        <option>Budiste</option>
                                        <option>Catholique</option>
                                        <option>Autre</option>
                                    </select></div>
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Email</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Email" type="email" class="form-control"></div>
                                    <div class="position-relative form-group"><label for="lieuNaissance" class="">Contact</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'élève" type="text" class="form-control"></div>
                            </div>

                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><label for="exampleSelect" class="">Groupe Sanguin</label>
                                <form class="">
                                    <fieldset class="position-relative form-group">
                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> A+ &nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> A- &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> AB+ &nbsp;&nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> AB- &nbsp; &nbsp;&nbsp; &nbsp;</label>
                                        </div>
                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> B+ &nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> B-  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> O+ &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</label>
                                          <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> O- &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">PARENTS</h5>
                                <div>
                                    <table>
                                     <tr>
                                        <td width="50%">
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Nom de la Mère <span style="color:red;">*</span></label></label><input name="lieuNaissance" id="lieuNaissance" placeholder="Nom de la mère" type="text" class="form-control"></div>
                                        </td>
                                        <td>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Profession</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Profession de la mère" type="text" class="form-control"></div>
                                        </td>
                                        <td>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Téléphone</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de la mère" type="text" class="form-control"></div>
                                        </td>
                                     </tr>
                                    </table>
                                    <table>
                                     <tr>
                                        <td width="50%">
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Nom du Père</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Nom du père" type="text" class="form-control"></div>
                                        </td>
                                        <td>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Profession</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Profession du père" type="text" class="form-control"></div>
                                        </td>
                                        <td>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Téléphone</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone du père" type="text" class="form-control"></div>
                                        </td>
                                     </tr>
                                    </table>
                                    <table>
                                     <tr>
                                        <td width="50%">
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Nom du Tuteur</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Nom du tuteur" type="text" class="form-control"></div>
                                        </td>
                                        <td>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Profession</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Profession du tuteur" type="text" class="form-control"></div>
                                        </td>
                                        <td>
                                        <div class="position-relative form-group"><label for="lieuNaissance" class="">Téléphone</label><input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone du tuteur" type="text" class="form-control"></div>
                                        </td>
                                     </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">CONTACT D'URGENCE</h5>
                                <div>
                                    <div class="position-relative form-group">
                                       <div class="position-relative form-group"><label for="exampleSelect" class="">Personne à contacter en cas d'urgence</label><select name="select" id="exampleSelect" class="form-control">
                                        <option>Père</option>
                                        <option>Mère</option>
                                        <option>Tuteur</option>
                                       <option>Autre</option>
                                    </select></div>
                                    <input name="lieuNaissance" id="lieuNaissance" placeholder="Téléphone de l'Autre contact" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                <form class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">SANTE</h5>
                                    <div class="position-relative form-group">
                                        <div>
                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox">
                                                Apte</label></div>
                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">
                                                Inapte</label></div>
                                             <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">
                                                Handicapé</label></div>
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
                                                Etablissement</label><input name="nom" id="exampleEmail" placeholder="Etablissement" type="email" class="form-control"></div>

                                            <div class="position-relative form-group"><label for="exampleEmail" class="">
                                                Classe</label><input name="nom" id="exampleEmail" placeholder="classe" type="email" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">
                                                Classes Redoublées</label><input name="nom" id="exampleEmail" placeholder="Classes Redoublées" type="email" class="form-control"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-success">Enrégistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
