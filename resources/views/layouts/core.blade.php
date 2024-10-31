<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCOP</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div>
        <div class="logo-container">
            <img src="{{ asset('assets/images/logos/logo-scop.svg') }}" alt="scop-logo">
        </div>
    </div>

    <div class="elmGraphique1">
        <img src="{{ asset('assets\formes\elmGraphique1.svg') }}" alt="form-graphique">
    </div>

    @yield('content')
    
    <div class="elmGraphique2">
        <img src="{{ asset('assets\formes\elmGraphique2.svg') }}" alt="form-graphique">
    </div>
</body>

</html>
