<!DOCTYPE html>
 <html>
    <head>
        <title>Modifier un formulaire</title>
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
         <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Modifier un formulaire</h3>
             <form class="needs-validation" novalidate>
                 <div class="form-row" style="padding : 0 20%">
                     <div class="mb-3">
                         <label for="cp">ID Formulaire</label>
                         <input type="number" class="form-control" id="numcaserne" placeholder="19" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="mb-3">
                         <label for="nom">Nom</label>
                         <input type="text" class="form-control" id="adresse" placeholder="Berja" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="mb-3">
                         <label for="pseudo">Prénom</label>
                         <input type="text" class="form-control" id="cp" placeholder="Jean" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="form-row" style = "padding : 0 20%">
                     <div class="mb-3">
                         <label for="ville">Poste occupé</label>
                         <input type="text" class="form-control" id="ville" placeholder="Consultant" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="mb-3">
                         <label for="cp">Permis</label>
                         <input type="number" class="form-control" id="codetypec" placeholder="B" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="form-row" style = "padding : 0 20%">
                      <div class="mb-3">
                          <label for="ville">Durée utilisation</label>
                          <input type="text" class="form-control" id="ville" placeholder="En jours" required>
                          <div class="valid-feedback">Ok !</div>
                          <div class="invalid-feedback">Valeur incorrecte</div>
                      </div>
                      <div class="mb-3">
                          <label for="cp">Nombre de Km parcourus</label>
                          <input type="number" class="form-control" id="codetypec" placeholder="XXXXX" required>
                          <div class="valid-feedback">Ok !</div>
                          <div class="invalid-feedback">Valeur incorrecte</div>
                      </div>
                  </div>
                 <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href= "{{route('goFormulaire')}}">Enregistrer les modifications</a>
             </form>
         </div>
         <script>
           (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>
    </body>
</html>