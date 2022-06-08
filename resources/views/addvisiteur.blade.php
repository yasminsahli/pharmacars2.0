<!DOCTYPE html>
 <html>
    <head>
        <title>Ajouter un visiteur</title>
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
         <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Ajouter un visiteur</h3>
             
             <form class="needs-validation" method="post" action="{{ route('goAddVisit') }}">
               @csrf
                 <div class="form-row" style="padding : 0 20%">
                     <div class="mb-3">
                         <label for="VISITId">ID</label>
                         <input type="text" class="form-control" name="VISITId" placeholder="19" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="mb-3">
                         <label for="VISITNom">Nom</label>
                         <input type="text" class="form-control" name="VISITNom" placeholder="Twingo" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="mb-3">
                         <label for="VISITPrenom">Prénom</label>
                         <input type="text" class="form-control" name="VISITPrenom" placeholder="12/05/2013" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="form-row" style = "padding : 0 20%">
                     <div class="mb-3">
                         <label for="VISITPoste">Poste</label>
                         <input type="text" class="form-control" name="VISITPoste" placeholder="Libre" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="mb-3">
                         <label for="VISITAge">Age</label>
                         <input type="text" class="form-control" name="VISITAge" placeholder="Harry Potter" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Envoyer</button>
             </form>
         </div>
         
    </body>
</html>