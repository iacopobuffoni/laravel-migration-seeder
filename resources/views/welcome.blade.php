<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                @foreach ($trains as $train)
                <div class="row">
                    <div class="col-3 text-center">

                        <div class="card">
                            <div class="card-body">
                                

                                <h1 class="card-title"> 
                                    {{ $train->departure_station}}
                                    -
                                    {{ $train->arrival_station }}
                                </h1>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </main>

    </body>
</html>
