@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-next icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Modification d'une Période

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
                                <form action="{{route('gestscol.formulaire_periode.update')}}" method="POST">
                                    @csrf 
                                    <input type="hidden" name="id" value="{{$periode->id_periode}}">
                                    <table class="col-md-10">
                                        <tr class="col-md-5">
                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Numéro <span style="color:red;">*</span></label>
                                            <input   placeholder=" " value="1" type="number" class="form-control" required>
                                        </div>
                                            </td>
                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Pourcentage Annuel (%) <span style="color:red;">*</span></label>
                                            <input name="pourcentage"  value="{{$periode->pourcentage}}" placeholder=" " type="float" class="form-control" required>
                                        </div>
                                            </td>
                                        </tr>
                                        <tr class="col-md-5">
                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Date de début <span style="color:red;">*</span></label>
                                            <input name="date_debut" value="{{$periode->date_debut}}" placeholder=" " type="date" class="form-control" required>
                                        </div>
                                            </td>
                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Date de fin <span style="color:red;">*</span></label>
                                            <input name="date_fin"  value="{{$periode->date_fin}}" placeholder=" " type="date" class="form-control" required>
                                        </div>
                                            </td>
                                        </tr>

                                    </table>


                                        <button class="mt-1 btn btn-secondary"><a href="periodes-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                        <button class="mt-1 btn btn-success" type="submit">Modifier</button>
                                
                                </form>
                            </div>
                        </div>
                    </div>

                      </div>

     </div>
     @endsection
