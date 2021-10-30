@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-folder icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Modification d'un Niveau Scolaire

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
                    <div class="col-md-6">
                         <div class="main-card mb-3 card">
                            <div class="card-body alert alert-success" id="idSuccess" style="display: none;">
                            </div>
                            <div class="card-body alert alert-warning" id="idError" style="display: none;">
                            </div>
                            <div class="card-body ">
                                <form action="{{route('gestscol.edit_niveau')}}" method="POST">
                                    @csrf 
                                    <input type="hidden" value="{{$niveau_scolaire->id}}" name="id">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Cycle <span style="color:red;">*</span></label>
                                            <select name="id_cycle" class="form-control"  required>
                            
                                                @foreach ($cycles as $cycle)
                                                @if ($cycle->id_cycle==$niveau_scolaire->cycle()->get()[0]->id_cycle)
                                                <option value="{{$niveau_scolaire->cycle()->get()[0]->id_cycle}}" selected>{{$niveau_scolaire->cycle()->get()[0]->nom}}</option>
                                                @else
                                                <option value="{{$cycle->id_cycle}}">{{$cycle->nom}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Nom du Niveau Scolaire <span style="color:red;">*</span></label>
                                            <input name="nom"  placeholder=" " value="{{$niveau_scolaire->nom}}" type="texte" class="form-control" required>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Barême <span style="color:red;">*</span></label>
                                            <input name="bareme"  placeholder=" " value="{{$niveau_scolaire->bareme}}" type="number" class="form-control" required>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Ordre <span style="color:red;">*</span></label>
                                            <input name="ordre"  placeholder=" " value="{{$niveau_scolaire->ordre}}" type="number" class="form-control" required>
                                        </div>
                                        <button class="mt-1 btn btn-secondary">Annuler</button>
                                        <button class="mt-1 btn btn-success" type="submit">Modifier</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>

                      </div>

     </div>
   
     @endsection
