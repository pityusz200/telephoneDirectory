<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Telefonkönyv') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])
    @livewireStyles
</head>
<body>
<div id="app">
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Telefonkönyv kezelő program</h3>
                <p class="blue-text">Ezzel a weboldallal felhasználókat tud létrehozni, szerkeszteni és törölni <br> illetve különbőző adatokat hozzájuk adni.</p>
                <div class="card">
                    <h5 class="text-center mb-4">Létrehozás, szerkesztés, hozzáadás, törlés</h5>
                    <h6 class="text-center mb-4">Létrehozás</h6>
                    <livewire:createUser>
                        <br>
                    <h6 class="text-center mb-4">Szerkesztés</h6>
                    <livewire:updateUser>
                        <br>
                    <h6 class="text-center mb-4">Törlés</h6>
                    <livewire:deletUser>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>
</body>
</html>
