@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-albums icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Modification d'une Sous-Période

                    </div>
                </div>
                <div class="page-title-actions">

                    <div class="d-inline-block dropdown">


                    </div>
                </div>    
            </div>
        </div>            
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Formulaire</span>
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-10">
                         <div class="main-card mb-3 card">

                            <div class="card-body ">
                                <form action="{{route('gestscol.formulaire_sous_periode.update')}}" method="POST">
                                    @csrf 
                                    <input type="hidden" value="{{$sous_periode->id_sous_periode}}" name="id">
                                    <table class="col-md-10">
                                        <tr class="col-md-5">
                                            <td>
                                                 <div class="position-relative form-group"><label for="exampleSelect" class="">Période <span style="color:red;">*</span></label>
                                                    <select name="id_periode"  class="form-control" required>
                                                        @foreach ($periodes as $item)
                                                            @if($item->id_periode== $sous_periode->periode()->get()[0]->id_periode)
                                                            <option value="{{$item->id_periode}}" selected>{{$item->nom_periode()}}</option>
                                                            @else
                                                            <option value="{{$item->id_periode}}">{{$item->nom_periode()}}</option>
                                                            
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail" class="">Numéro de Sous-Période<span style="color:red;">*</span></label>
                                                    <input name="numero"  placeholder=" " type="number" class="form-control" value="{{$sous_periode->numero}}" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="col-md-5">
                                            <td>
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail" class="">Date de début <span style="color:red;">*</span></label>
                                                    <input name="date_debut"  placeholder=" " type="date" class="form-control" value="{{$sous_periode->date_debut}}" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail" class="">Date de fin <span style="color:red;">*</span></label>
                                                    <input name="date_fin"  placeholder=" " type="date" class="form-control" value="{{$sous_periode->date_fin}}" required>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>


                                    <button class="mt-1 btn btn-secondary"><a href="#" style="color:white; text-decoration:none;">Annuler</a></button>
                                    <button class="mt-1 btn btn-success" type="submit">Modifier</button>

                                </form>
                            </div>
                        </div>
                    </div>

                      </div>

     </div>
     @endsection
