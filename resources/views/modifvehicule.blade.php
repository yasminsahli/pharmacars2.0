<!DOCTYPE html>
<html>

<head>
  <title>Modifier un véhicule</title>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset('css/btnrecherche.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{route('goHome')}}">Acceuil</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('goVisiteur')}}">Visiteurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goVehicule')}}">Véhicules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goFormulaire')}}">Formulaire fin d'utilisation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goBookFormu')}}">Formulaire de réservation</a>
      </li>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0" style="position: absolute; right: 20px; display: flex">
    <input class="form-control mr-sm-2" type="search" placeholder="Tapez votre recherche" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
</nav>

<body>
  <div class="card" style="text-align: center;">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Modifier le véhicule</h3>
    <form method="post" action="">
           @csrf
      <div class="form-row" style="padding : 0 20%">

        <div class="mb-3">
          <label for="VEHId">ID</label>
          <input type="number" class="form-control" name="VEHId" required value="">
        </div>

        <div class="mb-3">
          <label for="VEHModele">Modèle</label>
          <input type="text" class="form-control" name="VEHModele" placeholder="Twingo" required>
        </div>

        <div class="mb-3">
          <label for="VEHDateRevision">Dernière révision</label>
          <input type="text" class="form-control" name="VEHDateRevision" placeholder="12/05/2013" required>
        </div>

      </div>
      <div class="form-row" style="padding : 0 20%">
        <div class="mb-3">
          <label for="ville">Etat</label>
          <input type="text" class="form-control" id="ville" placeholder="Libre" required>
        </div>
        <div class="mb-3">
          <label for="cp">Utilisateur actuel</label>
          <input type="number" class="form-control" id="codetypec" placeholder="Harry Potter" required>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="{{route('goVehicule')}}">Enregistrer les modifications</a>
    </form>
  </div>
</body>

</html>