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
                    <div>Répartition des Enseignants dans les Classes
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
            <div class="col-lg-5">
                <table>
                <tr>
                <td>
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Rechercher un Enseignant...">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                    
                </div>
                </td>
                <td>
   <!-- <button class="mt-1 btn btn-primary">Lister</button> -->
   </td>
   </table>
   <div class="main-card mb-3 card">
        <div class="card-body"> <h5 class="card-title" style="color:black;">Liste des Enseignants</h5>
         
         
         <table id="myTable" class="table" cellspacing="0" width="100%">              
            
            <tbody>
                @foreach ($enseignants as $enseignant)
                <tr>
                    <td>{{$enseignant->nom}}</td>
                    <td><input type="checkbox" value="{{$enseignant->id_enseignant}}"></td>
                    </tr>  
                @endforeach
           
            </tbody>
            </table>
                         </div>
                </div>
            
               
                    
                    
                    
                
                
            </div>
            <div class="col-lg-6">
                 <div class="main-card mb-3 card">
                    <div class="card-body">
                    
                        <form class="">
                            <table>
                                <tr>
                                    <td width="60%" >
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
                                    
                                </tr>
                            </table>
                                        
                                                                    
                                        
                                         
                                        
                                         
                                         
                                    
                                </form>
                    <div class="card-body"><!--<h5 class="card-title"> Matricules des Apprenants</h5> -->
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>LISTE DES MATIERES DE 6e A</th>
                             
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                             
                                <td>Anglais</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>Correction Orthographique</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>Littérature</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>Mathématiques</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>Histoire</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>Géographie</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>Education à la Citoyenneté</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>EPS</td>
                                                                                 
                            </tr>
                            <tr>
                             
                                <td>TM</td>
                                                                                 
                            </tr>
                            
                            </tbody>
                        </table>
                        <!-- <button class="mt-1 btn btn-warning">Envoyer en 6e A</button>
                            <button class="mt-1 btn btn-danger">Retirer de la 6e A</button>	-->
                    </div>
                    
                </div>
                
            </div>
            <button class="mt-1 btn btn-secondary"><a href="index.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                        <a href="index.html"><button class="mt-1 btn btn-success">Affecter</button></a>
               </div>
    

        </td>
                            </tr>
                           
                            <tr>
                                <th scope="row" colspan="5"></tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
         <!--   <div class="col-lg-6">
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
                
            <div class="main-card mb-3 card">
                    
                    <div class="card-body" class="scroll-area-md">
                       <!-- <h5 class="card-title">Table with hover</h5> -->
                        <table class="mb-0 table table-hover" >
                            <thead>
                            <tr>
                                
                                <th>Matière</th>
                                <th>Enseignant</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                
                                <td width="50%" >Anglais</td>
                                <td>ABAH BIKOA Léonie Caline Neully</td>
                                
                                 
                                
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
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
@endsection
