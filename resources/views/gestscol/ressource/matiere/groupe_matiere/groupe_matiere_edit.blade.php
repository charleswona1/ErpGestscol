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
                <div>Groupe de Matière par Niveau Scolaire
                   <!-- <div class="page-title-subheading">Liste des Apprenants.
                    </div> -->
                </div>
            </div>
            <div class="page-title-actions">
                <a href="parametrages-matieres.html">
                    <button class=" btn btn-primary"><!-- <i class="fa fa-plus"></i> --> Paramétrages </button>
                </a>
                 
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
    </div>            
    <div class="row">
        
        <div class="col-lg-12">
        
        <div class="col-md-10">
                     <div class="main-card mb-3 card">
                        <x-flash-back></x-flash-back>
                        
                        <div class="card-body ">
                            <form action="{{route('gestscol.groupe_matiere.update')}}" method="POST">
                                @csrf 
                                <table class="col-md-12">
                                    <tr>
                                        <td>
                                    
                                
                                        </td>
                                        <td width="50%">
                                            <input type="hidden" value="{{$groupe_matiere->id_groupe_matiere}}" name="id">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Nom du Groupe <span style="color:red;">*</span></label>
                                        <input name="nom" id="exampleEmail" placeholder=" " value="{{$groupe_matiere->nom}}" type="text" class="form-control" required>
                                    </div>
                                        </td>
                                    
                                        <td>
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Numéro du Groupe <span style="color:red;">*</span></label>
                                        <input name="numero" id="exampleEmail" placeholder=" " value="{{$groupe_matiere->numero}}" type="number" class="form-control" required>
                                    </div>
                                        </td>
                                        
                                    </tr>
                                
                                </table>	 
                                    
                                     
                                    <button class="mt-1 btn btn-secondary"><a href="periodes-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                    <button class="mt-1 btn btn-success">Modifier</button>
                                
                            </form>
                        </div>
                    </div>
               
                
            <div class="main-card mb-3 card">
                
                <div class="card-body" class="scroll-area-md">
                   <!-- <h5 class="card-title">Table with hover</h5> -->
                    <table class="mb-0 table table-hover" >
                        <thead>
                        <tr>
                            
                            <th>Numéro</th>
                            <th>Nom du Groupe</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($groupe_matieres as $item)
                            <tr>
                                <td>{{$item->numero}}</td>
                                <td>{{$item->nom}}</td>
                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="{{route('gestscol.groupe_matiere.edit',$item->id_groupe_matiere)}}"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="{{route('gestscol.groupe_matiere.delete',$item->id_groupe_matiere)}}" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>  
                            @empty
                            <tr>
                                <td colspan="10">
                                    <div class="lead text-center text-muted pt-30 pb-30">
                                        Pas de groupe de matieres
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
                
        <!-- <div class="col-lg-6">
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
               
        </div> -->
            
        
        </div>
    </div>
</div>






<!-- Footer 
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
<span>Copyright &copy; Your Website 2020</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
</div>
</div>
@endsection
