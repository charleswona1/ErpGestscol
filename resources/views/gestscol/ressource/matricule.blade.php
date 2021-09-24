@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title" style="position:relative; top:0%;">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-display2 icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Gestion des Matricules
                       <!-- <div class="page-title-subheading">Liste des Apprenants.
                        </div> -->
                    </div>
                </div>
                <div class="page-title-actions">
                    <!--<a href="cycle-formulaire.html">
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"">
                            <i class="fa fa-plus"></i> Nouveau Cycle
                        </button>
                    </a>-->
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
        </div>
                    <div class="row">
            <div class="col-lg-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">

                        <form class="">
                            <table>
                                <tr>
                                    <td>
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Classe</label>
                                            <select name="select" id="exampleSelect" class="form-control" required>
                                                <option>6e A</option>
                                                <option>6e B</option>
                                                <option>5e A</option>
                                                <option>5e B</option>
                                                <option>4e Esp</option>
                                                <option>4e All</option>
                                                <option>3e Esp</option>
                                                <option>3e All</option
                                            </select>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="custom-checkbox custom-control">
                                            Sélectionner toute la classe

                                        &ensp; &ensp; &ensp;<input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                        <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                    </td>
                                    <td>

                                        &ensp; &ensp; &ensp; &ensp;<button class="mt-1 btn btn-primary">Générer les matricules</button>
                                    </td>
                                </tr>
                            </table>








                                </form>

                    </div>

                </div>
                <button class="mt-1 btn btn-secondary"><a href="niveau-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                        <a href="niveau-liste.html"><button class="mt-1 btn btn-success">Enrégistrer</button></a>
            </div>
            <div class="col-lg-6">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Matricules des Apprenants</h5>
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>Matricule</th>
                                <th>Nom de l'Apprenant</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>20CPL1483F</td>
                                <td>ABELA MBOE Parfaite Maeva</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>20CPL1484F</td>
                                <td>ABENKOU MINKO Gabrielle Manuela</td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>20CPL1485F</td>
                                <td>AMOR à BAROUNG Chantal Carenne</td>

                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>20CPL1561M</td>
                                <td>AZOMBO ONANDA Abner</td>

                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>20CPL1484M</td>
                                <td>BRYAN MBENDA Kevin Leopold</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
               </div>


        </td>
                            </tr>

                            <tr>
                                <th scope="row" colspan="5"></tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    @endsection
