@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title" style="position:relative; top:0%;">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-news-paper icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Paramétrage des Sanctions
                       <!-- <div class="page-title-subheading">Liste des Apprenants.
                        </div> -->
                    </div>
                </div>
            
                <div class="page-title-actions">
                    <a href="{{route("gestscol.formulaire_sanction")}}">
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"">
                            <i class="fa fa-plus"></i> Nouvelle sanction
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
                </div>    
            </div>
        </div> 
        <div class="row card-body">
            <div class="col-md-12">
                 <div class="main-card mb-12 card">
                    
                    <div class="card-body col-md-12">
                        <form action="{{ route('gestscol.sanction.parametrage.update') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$parametrage_sanction->id_parametrage}}" name="id">
                        <table class="col-md-12">
                            <tr class="col-md-12">
                                <td class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Cycle <span style="color:red;">*</span></label>
                                    <select name="id_cycle" id="exampleSelect" class="form-control" required>
                                        @foreach ($cycles as $cycle)
                                            @if ($cycle->id_cycle==$parametrage_sanction->cycle()->get()[0]->id_cycle)
                                            <option value="{{$cycle->id_cycle}}" selected>{{$cycle->nom}}</option> 
                                            @else
                                            <option value="{{$cycle->id_cycle}}">{{$cycle->nom}}</option> 
                                            @endif
                                        @endforeach
                            
                                    </select>
                                </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr class="col-md-12">
                                <td class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Sanction 1 <span style="color:red;">*</span></label>
                                    <select name="id_sanction" id="exampleSelect" class="form-control" required>
                                        @foreach ($sanctions as $sanction)
                                            @if ($sanction->id_sanction==$parametrage_sanction->sanction1()->get()[0]->id_sanction)
                                                 <option value="{{$sanction->id_sanction}}" selected>{{$sanction->libelle}}</option>
                                            @else
                                            <option value="{{$sanction->id_sanction}}">{{$sanction->libelle}}</option> 
                                            @endif
                                        
                                        @endforeach
                                    </select>
                                </div>
                                </td>
                                <td class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Valeur <span style="color:red;">*</span></label>
                                    <input name="valeur" value="{{$parametrage_sanction->valeur}}" placeholder="Valeur" type="number" class="form-control" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Sanction 2 <span style="color:red;">*</span></label>
                                    <select name="id_sanction2" id="exampleSelect" class="form-control" required>
                                        @foreach ($sanctions as $sanction)
                                        @if ($sanction->id_sanction==$parametrage_sanction->sanction2()->get()[0]->id_sanction)
                                             <option value="{{$sanction->id_sanction}}" selected>{{$sanction->libelle}}</option>
                                        @else
                                        <option value="{{$sanction->id_sanction}}">{{$sanction->libelle}}</option> 
                                        @endif
                                    
                                         @endforeach
                                        
                                    </select>
                                </div>
                                </td>
                                <td class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Valeur <span style="color:red;">*</span></label>
                                    <input name="valeur2" value="{{$parametrage_sanction->valeur2}}" placeholder="Valeur" type="number" class="form-control" required>
                                </div>
                                </td>
                            </tr>
                        </table>
                                 
                                <button class="mt-1 btn btn-secondary"><a href="classe-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                <button class="mt-1 btn btn-success" type="submit">Modifier</button>
                            
                        </form>
                    </div>
                </div>
            </div>
            
            
        </div>          
         <div class="row card-body">

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
                                <th>Sanction 1</th>
                                <th>Entraîne</th>
                                <th>Sanction 2</th>
                                
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($parametrage_sanctions as $item)
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                        <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                        <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                    </th>
                                    <td>{{$item->sanction1()->get()[0]->libelle}}</td>
                                    <td>======></td>
                                    <td>{{$item->sanction2()->get()[0]->libelle}}</td>
                                    
                                    <td class="mdc-data-table__cell">
                                        
                                        <a href="{{route('gestscol.sanction.parametrage.edit',  $item->id_parametrage)}}"><i class="fas fa-edit"></i></i></a>
                                        <a href=""><i class="fas fa-print"></i></i></a>
                                        <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                    </td>
                                </tr>    
                                @empty
                                <tr>
                                    <td colspan="10">
                                        <div class="lead text-center text-muted pt-30 pb-30">
                                            Pas de parametrage de sanctions
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                              
                         


                            <tr>
                                <th scope="row" colspan="8">

                            </tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    @endsection

