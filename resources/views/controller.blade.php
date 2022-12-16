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
    <h1 class="text-center">Movies</h1>
    <div class="container">
        <div class="row row-cols-4 g-4">

            @foreach ($movies as $movie)
                {{-- oggetto o collezzione di oggetti ciò che arriva da model --}}
                <div class="col">

                    <div class="card  text-bg-dark w-100">
                        <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                        </div>
                        <ul class="list-group list-group-flush text-bg-dark">
                            <li class="list-group-item list-group-item-dark">Natinality: {{ $movie->nationality }}</li>
                            <li class="list-group-item ">Data: {{ $movie->date }} </li>
                            <li class="list-group-item list-group-item-dark">Vote: {{ $movie->vote }}</li>
                        </ul>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
