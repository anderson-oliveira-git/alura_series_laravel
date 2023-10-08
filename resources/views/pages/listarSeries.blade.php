<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel | Alura</title>
    </head>
    <body>
        @isset($series)
            <ul>
                @foreach ($series as $serie)
                    <li>{{ $serie }}</li>
                @endforeach
            </ul>
        @endisset
    </body>
</html>
