<!DOCTYPE html>
<html>
<head>
    <title>Treni in partenza oggi</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                Codice: {{ $train->codice_treno }} - Partenza: {{ $train->stazione_di_partenza }} alle {{ $train->orario_di_partenza }}
            </li>
        @endforeach
    </ul>
</body>
</html>
