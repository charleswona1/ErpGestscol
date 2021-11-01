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
                    <div>Répartition des Apprenants dans les Classes
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
                </div>    
            </div>
        </div>
        <x-flash-back></x-flash-back>
        <div class="row">
            <div class="col-lg-5">
                <table>
                    <tr>
                        <td>
                            <div class="search-wrapper">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Rechercher un Apprenant...">
                                    <button class="search-icon"><span></span></button>
                                </div>
                                <button class="close"></button>

                            </div>  
                        </td>
                        <td>
                            <button class="mt-1 btn btn-primary">Lister</button>
                        </td>
                    </tr>
                </table>
                <div class="main-card mb-3 card">
                    <div class="card-body"> <h5 class="card-title" style="color:black;">Apprenants sans classe</h5>
                        <table id="myTable" class="table" cellspacing="0" width="100%">

                            <tbody>
                                @forelse ($apprenantsSansClasse as $apprenant)
                                    <tr>
                                        <td width="90%">{{$apprenant->nom}}</td>
                                        <td><input type="checkbox" name="" class="appSansClass"  id="{{$apprenant->id_apprenant}}"></td>
                                    </tr>
                                @empty
                                <tr>
                                    <td class="text-center">Aucun éleve crée</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="60%" >
                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Classe</label>
                                        <select name="select" id="classe" class="form-control" required>
                                            <option value="">liste des classes</option>
                                            @forelse ($listClasses as $classe)
                                                <option value="{{$classe->id_classe}}" >{{$classe->nom}}</option>
                                            @empty
                                                <option>Aucune classe disponible</option>
                                            @endforelse
                                            
                                        </select>
                                    </div>
                                </td>
                                <td style="padding-left: 40px;">
                                    Effectif
                                    <span id="effectif" style="border-style: groove;  padding:8px;"> 45 </span>

                                </td>
                            </tr>
                        </table>

                        <div class="content-btn">
                            <button class="mt-1 btn btn-warning" id="envoyer">Envoyer</button>
                            <button class="mt-1 btn btn-danger">Retirer</button>
                        </div>

                           
                        <div class="card-body"><!--<h5 class="card-title"> Matricules des Apprenants</h5> -->
                            <table class="mb-0 table table-bordered">
                                <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Matricule</th>
                                    <th>Nom de l'Apprenant</th>
                                    <th>action</th>

                                </tr>
                                </thead>
                                <tbody id="result-apprenant">
                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    <button class="mt-1 btn btn-secondary"><a href="index.html" style="color:white; text-decoration:none;">Annuler</a></button>
                    <a href="index.html"><button class="mt-1 btn btn-success">Enrégistrer</button></a>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
            $('#result-apprenant').empty();
            $('#effectif').empty();
            let id_classe = "";
            $('#classe').on('change',function (ev) {
                id_classe = ev.target.value;
                console.log('test')
                $.ajax({
                    url: "{{route('gestscol.apprenantparclasse')}}",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        key:id_classe
                    },

                    success:function(response){
                        console.log(response);
                        let data = ""
                        $('#effectif').append(response.length);

                        $.each(response, function(key,val){
                            console.log(key+'=='+val);
                            data+=generatTBody(key+1,'/',val?.nom,'<input type="checkbox" class="appClass" name="" id="'+val.id_apprenant+'">');
                        });
                        $('#result-apprenant').append(data);
                    },
                    error: function(errors){
                       console.log(errors)
                    }
                });
            });

            $('#envoyer').on('click',function(){
                let apprenants = [];
                $('.appSansClass').each(function(key,val){
                    if ($(this)[0].checked) {
                        apprenants.push($(this)[0].id)
                    }
                });

                if(apprenants.length == 0){
                    alert('selectionnez au moins un eleve');
                    return;
                }
                if(id_classe == ""){
                    alert('selectionnez un classe');
                    return;
                }

                $.ajax({
                    url: "{{route('gestscol.affectation')}}",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        dataAffectation: apprenants,
                        id_classe : id_classe
                    },

                    success:function(response){
                        location.reload();
                    },
                    error: function(errors){
                       console.log(errors)
                    }
                });
            });

            var generatTBody = function (...val) {
                var th = "";
                var tr = "";
               
                for (let i = 0; i < val.length; i++) {
                     th += '<th>'+val[i]+'</th>';
                }
                tr = '<tr>'+th+'</tr>';
               
                return tr;
            }
    </script>
@endsection
