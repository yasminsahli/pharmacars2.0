<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/btnms.css')}}">
    <link rel="stylesheet" href="{{asset('css/btnadd.css')}}">
    <link rel="stylesheet" href="{{asset('css/btnrecherche.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>PharmaCars</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">PharmaCars</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('goHome')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('goVisiteur')}}">Visiteurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('goVehicule')}}">Véhicules</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">Formulaire fin d'utilisation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('goBookFormu')}}">Formulaire de réservation</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Tapez votre recherche" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>

<div class="card" style="text-align: center;">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Formulaire fin d'utilisation</h3>
  <a class="btn btn-outline-success2 my-2 my-sm-0" type="submit" href="{{route('goAddFormu')}}">Ajouter</a>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center"> ID Formulaire</th>
            <th class="text-center"> Nom</th>
            <th class="text-center"> Prénom</th>
            <th class="text-center"> Poste occupé</th>
            <th class="text-center"> Permis</th>
            <th class="text-center"> Durée d'utilisation</th>
            <th class="text-center"> Nombre de Km parcourus</th>
            <th class="text-center"> Modifier</th>
            <th class="text-center"> Supprimer</th>
          </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($formulaire as $Fiche_Fin_Utilisation)
            <tr>
              <td class="pt-3-half" contenteditable="true"> {{$Fiche_Fin_Utilisation->FICHEId}} </td>
              <td class="pt-3-half" contenteditable="true">{{$Fiche_Fin_Utilisation->VISITNom}}</td>
              <td class="pt-3-half" contenteditable="true">{{$Fiche_Fin_Utilisation->VISITPrenom}}</td>
              <td class="pt-3-half" contenteditable="true">{{$Fiche_Fin_Utilisation->VISITAge}}</td>
              <td class="pt-3-half" contenteditable="true">{{$Fiche_Fin_Utilisation->FICHEDureeUtil}}</td>
              <td class="pt-3-half" contenteditable="true">{{$Fiche_Fin_Utilisation->FICHENbKm}}</td>
              <td class="pt-3-half" contenteditable="true">{{$Fiche_Fin_Utilisation->FICHENbKm}}</td>
              <td class="pt-3-half" contenteditable="false">
                <a type="button" class="btn btn-outline-danger2" href="{{route('goModifFormu')}}">
                    Modifier
                </a>
              </td>
              <td class="pt-3-half" contenteditable="false"> 
                <a type="button" class="btn btn-outline-danger2" href="{{route('goSupprFormu')}}">
                    Supprimer
                </a>
              </td>
            </tr>  
            @endforeach
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>