<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center py-5">La stazione dei treni</h1>
        
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
    
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    
                    <tr>               
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_di_partenza}}</td>
                    <td>{{$train->stazione_di_arrivo}}</td>
                    <td>{{$train->orario_di_partenza}}</td>                
                    </tr>
    
                @endforeach
                
            </tbody>
            </table>
    </div>

</body>

</html>