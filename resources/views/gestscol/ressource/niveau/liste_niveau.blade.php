@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title" style="position:relative; top:0%;">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-network icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Liste des Niveaux Scolaires
                       <!-- <div class="page-title-subheading">Liste des Apprenants.
                        </div> -->
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{route("gestscol.formulaire_niveau")}}">
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"">
                            <i class="fa fa-plus"></i> Nouveau Niveau Scolaire
                        </button>
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
                    <x-flash-back></x-flash-back>
                    
                    <div class="card-body" class="scroll-area-md">
                       <!-- <h5 class="card-title">Table with hover</h5> -->
                        <table class="mb-0 table table-hover" >
                            <thead>
                            <tr >
                                <th width="5%">
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <th width="10%">Ordre</th>
                                <th>Cycle</th>
                                <th>Niveau Scolaire</th>
                                <th>Bar??me</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @forelse ($niveau_scolaires as $resultat)
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                        <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                        <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                    </th>
                                    <td>{{$i}}</td>
                                    <td>{{$resultat->cycle()->get()[0]->nom}}</td>
                                    <td>{{$resultat->nom}}</td>
                                    <td>{{$resultat->bareme}}</td>

                                    <td class="mdc-data-table__cell">
                                        <a href='#'><i class="fas fa-eye"></i></a>
                                        <a href="{{route('gestscol.formulaire_niveau.edit', $resultat->id_niveau)}}"><i class="fas fa-edit"></i></i></a>
                                        <a href='#'><i class="fas fa-print"></i></i></a>
                                        <a href='{{route('gestscol.delete_niveau', $resultat->id_niveau)}}' style="color:red;"><i class="fas fa-trash"></i></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>  
                                @empty
                                <tr>
                                    <td colspan="10">
                                        <div class="lead text-center text-muted pt-30 pb-30">
                                            Pas de niveaux
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                               
                            <tr>
                                <th scope="row" colspan="5"></tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>

         <!--   <div class="col-lg-6">
                        <nav class="" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">??</span><span class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">??</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>

            </div> -->


            </div>
        </div>
    </div>
    @endsection
