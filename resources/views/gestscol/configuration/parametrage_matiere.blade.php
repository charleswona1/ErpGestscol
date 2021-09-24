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
                                <form class="">
                                    <table class="col-md-12">
                                        <tr>
                                            <td>
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Niveau <span style="color:red;">*</span></label>
                                            <select name="select" id="exampleSelect" class="form-control" required>
                                                <option>6e</option>
                                                <option>5e</option>
                                                <option>5e</option>
                                                <option>4e Esp</option>

                                                <option>4e All</option>
                                                <option>3e All</option>
                                                <option>3e Esp</option>

                                            </select>
                                        </div>
                                            </td>
                                            <td>
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Matière <span style="color:red;">*</span></label>
                                            <select name="select" id="exampleSelect" class="form-control" required>
                                                <option>Anglais</option>
                                                <option>Mathématiques</option>
                                                <option>Littérature</option>
                                                <option>Histoire</option>

                                                <option>SVT</option>
                                                <option>Espagnol</option>
                                                <option>Expression Ecrite</option>

                                            </select>
                                        </div>
                                            </td>

                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Coefficient <span style="color:red;">*</span></label><input name="nom" id="exampleEmail" placeholder=" " type="float" class="form-control" required>
                                        </div>
                                            </td>
                                            <td>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Groupe <span style="color:red;">*</span></label><input name="nom" id="exampleEmail" placeholder=" " type="number" class="form-control" required>
                                        </div>
                                            </td>
                                        </tr>

                                    </table>


                                        <button class="mt-1 btn btn-secondary"><a href="periodes-liste.html" style="color:white; text-decoration:none;">Annuler</a></button>
                                        <a href="periodes-liste.html"><button class="mt-1 btn btn-success">Enrégistrer</button></a>

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
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Anglais</td>
                                <td>3.0</td>
                                <td>2</td>

                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Education à la Citoyenneté</td>
                                <td>2.0</td>
                                <td>2</td>

                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Expression Ecrite</td>
                                <td>2.0</td>
                                <td>2</td>

                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Mathématiques</td>
                                <td>4.0</td>
                                <td>1</td>

                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>Science et Technologie</td>
                                <td>2.0</td>
                                <td>1</td>

                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomCheckbox"> </label></div>
                                </th>
                                <td>EPS</td>
                                <td>2.0</td>
                                <td>3</td>

                                <td class="mdc-data-table__cell">
                                    <a href="utilisateur-profil.html"><i class="fas fa-eye"></i></i></a>
                                    <a href="utilisateur-profiledit.html"><i class="fas fa-edit"></i></i></a>
                                    <a href=""><i class="fas fa-print"></i></i></a>
                                    <a href="" style="color:red;"><i class="fas fa-trash"></i></i></a>
                                </td>
                            </tr>
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
