@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title" style="position:relative; top:0%;">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-add-user icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Liste des Enseignants
                       <!-- <div class="page-title-subheading">Liste des Apprenants.
                        </div> -->
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{route("gestscol.creer_enseignant")}}">
                        <button class=" btn btn-primary"><i class="fa fa-plus"></i> Nouvel Enseignant </button>
                    </a>
                   <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-secondary">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-cog fa-w-20"></i>
                            </span>
                            Actions
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                         <i class="fa fa-download fa-w-20"></i>  &ensp; &ensp;
                                        <span>
                                            Exporter
                                        </span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <i class="fa fa-print fa-w-20"></i>  &ensp; &ensp;
                                        <span>
                                            Imprimer
                                        </span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <i class="fa fa-trash fa-w-20"></i>  &ensp; &ensp;
                                        <span>
                                            Supprimer
                                        </span>

                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>    </div>
        </div>            <div class="row">

            <div class="col-lg-12">
                <div class="main-card mb-3 card">

                    <div class="card-body" class="scroll-area-md">
                       <!-- <h5 class="card-title">Table with hover</h5> -->
                        <table class="mb-0 table table-hover" >
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <th>Titre</th>
                                <th>Nom Complet</th>
                                <th>Matière</th>
                                 <th>Statut</th>
                                 <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Mme.</td>
                                <td>AKABA BETIA Marie Therese</td>
                                <td>Littérature</td>
                                <td>Permanant</td>
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>M.</td>
                                <td>ATEBA ONGUENE Hervé Landry</td>
                                <td>Mathétiques</td>
                                <td>Permanant</td>
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Mme.</td>
                                <td>BAYIHA BA BAYIHA Jean</td>
                                <td>Anglais</td>
                                <td>Vacataire</td>
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>M.</td>
                                <td>BOUDJEU KEMGNE Silvere</td>
                                <td>Histoire</td>
                                <td>Permanant</td>
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Mlle.</td>
                                <td>KENTICK à EBONG Nicole</td>
                                <td>SVT</td>
                                <td>Vacataire</td>
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="5"></tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>

            <div class="col-lg-6">
                        <nav class="" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>

            </div>


            </div>
        </div>
    </div>
    @endsection
