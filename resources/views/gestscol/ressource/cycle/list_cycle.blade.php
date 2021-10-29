@extends('gestscol.partiel.content')

@section('content')
<?php //dd($cycles); ?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title" style="position:relative; top:0%;">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-help2 icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Liste des Cycles Scolaires
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{route("gestscol.formulaire_cycle")}}">
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"">
                            <i class="fa fa-plus"></i> Nouveau Cycle
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
                                <th width="20%">Numéro</th>
                                <th width="50%">Nom du cycle</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($cycles as $cycle)
                                    <tr>
                                        <th>
                                            <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                        </th>
                                        <td>{{$i}}</td>
                                        <td>{{$cycle->nom}}</td>

                                        <td class="mdc-data-table__cell">
                                            <a href="#"><i class="fas fa-eye"></i></i></a>
                                            <a href="#"><i class="fas fa-edit"></i></i></a>
                                            <a href="#"><i class="fas fa-print"></i></i></a>
                                            <a href="#" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
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