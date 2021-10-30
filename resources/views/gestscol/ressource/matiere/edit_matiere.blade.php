@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-note2 icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Modification d'une Matière

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

                            <div class="card-body ">
                                <form action="{{ route('gestscol.matiere.update') }}" method="POST">
                                    @csrf 
                                    <input type="hidden" value="{{$matiere->id_matiere}}" name="id">
                                    <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Nom de la Matière <span style="color:red;">*</span></label>
                                            <input name="nom"  placeholder="Classe" type="texte" class="form-control" value="{{$matiere->nom}}" required>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Abréviation <span style="color:red;">*</span></label>
                                            <input name="abreviation" placeholder="Classe" type="texte" class="form-control" value="{{$matiere->abreviation}}" required>
                                        </div>




                                        <button class="mt-1 btn btn-secondary"><a href="matiere-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                        <button class="mt-1 btn btn-success" type="submit">Modifier</button>

                                </form>
                            </div>
                        </div>
                    </div>

                      </div>

     </div>
     @endsection
