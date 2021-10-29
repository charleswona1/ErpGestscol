@extends('gestscol.partiel.content')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title" style="position:relative; top:0%;">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-share icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Paramétrage des Matières par Niveau
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
        </div>            <div class="row">

            <div class="col-lg-12">

            <div class="col-md-10">
                         <div class="main-card mb-3 card">

                            <div class="card-body ">
                                <form action="{{ route('gestscol.parametrage_matiere.update') }}" method="POST">
                                    @csrf                                   
                                     <table class="col-md-12">
                                         <input type="hidden" name="id" value="{{$matiere_niveau->id}}">
                                        <tr>
                                            <td>
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Niveau <span style="color:red;">*</span></label>
                                            <select name="id_niveau_scolaire" class="form-control" required>
                                                @foreach ($niveaux as $niveau)
                                                @if ($niveau->id_niveau==$matiere_niveau->niveau_scolaire()->get()[0]->id_niveau)
                                                <option value="{{$niveau->id_niveau_scolaire}}" selected>{{$niveau->nom}}</option> 
                                                @else
                                                <option value="{{$niveau->id_niveau_scolaire}}">{{$niveau->nom}}</option> 
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                            </td>
                                            <td>
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Matière <span style="color:red;">*</span></label>
                                            <select name="id_matiere" class="form-control" required>
            
                                                @foreach ($matieres as $matiere)
                                                    @if ($matiere->id_matiere==$matiere_niveau->matiere()->get()[0]->id_matiere)
                                                        <option value="{{$matiere->id_matiere}}" selected>{{$matiere->nom}}</option> 
                                                    @else
                                                        <option value="{{$matiere->id_matiere}}">{{$matiere->nom}}</option> 
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                            </td>

                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Coefficient <span style="color:red;">*</span></label>
                                            <input name="coefficient"  placeholder=" " type="float" value="{{$matiere_niveau->coefficient}}" class="form-control" required>
                                        </div>
                                            </td>
                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Groupe <span style="color:red;">*</span></label>
                                            <input name="id_groupe_matiere"  placeholder=" " type="number" value="{{$matiere_niveau->groupe_matiere_numero()}}" class="form-control" required>
                                        </div>
                                            </td>
                                        </tr>
                                    
                                    </table>

                                    
                                    <button class="mt-1 btn btn-secondary"><a href="classe-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                    <button class="mt-1 btn btn-success" type="submit">Enregistrer</button>

                                </form>
                            </div>
                        </div>


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
                                <th>Matière</th>
                                <th>Coefficient</th>
                                <th>Groupe</th>
                                 <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($matiere_niveaux as $item)
                            
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>{{$item->matiere()->get()[0]->nom}}</td>
                                <td>{{$item->coefficient}}</td>
                                <td>{{$item->groupe_matiere()->get()[0]->nom}}</td>
                                
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="{{ route('gestscol.parametrage_matiere.edit', $item->id) }}"><i class="fas fa-edit"></i></i></a>
                                    <a href="#"><i class="fas fa-print"></i></i></a>
                                    <a href="{{ route('gestscol.parametrage_matiere.delete', $item->id) }}" style="color:red;"><i class="fas fa-trash"></i></i></a>
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
                                <th scope="row" colspan="5"></tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

</div>
@endsection
