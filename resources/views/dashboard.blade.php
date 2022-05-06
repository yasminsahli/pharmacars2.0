

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/btnrecherche.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PharmaCars</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <center>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PharmaCars') }}
        </h2>
        </center>
    </x-slot>


                <a type="button" class="btn btn-outline-danger" style="line-height : 140px;" href="{{route('goVisiteur')}}">
    <i class="fas fa-user"></i>    
    VISITEURS
</a>

<a type="button" class="btn btn-outline-danger" style="line-height : 140px;" href="{{route('goVehicule')}}">
    <i class="fas fa-car-side"></i>
    VEHICULES
</a>

<a type="button" class="btn btn-outline-danger" style="line-height : 140px;" href="{{route('goFormulaire')}}">
    <i class="fas fa-file-alt"></i>
    FORMULAIRES RETOUR
</a>

<a type="button" class="btn btn-outline-danger" style="line-height : 140px;" href="{{route('goBookFormu')}}">
    <i class="fas fa-file-alt"></i>
    FORMULAIRES RESERVATIONS
</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
