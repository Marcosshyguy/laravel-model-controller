<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Model</title>
</head>

<body>
    <h1>Test controller</h1>
    <ul>
        @foreach ($movies as $movie)
            {{-- oggetto o collezzione di oggetti ciò che arriva da model --}}
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
</body>

</html>
