<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel_model_controller</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      FILM {{$movie["id"]}}
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item">{{$movie["title"]}}</li>
                                        <li class="list-group-item">
                                            {{$movie["original_title"]}}
                                        </li>
                                        <li class="list-group-item">
                                            {{$movie["nationality"]}}
                                        </li>
                                        <li class="list-group-item">
                                            {{$movie["date"]}}
                                        </li>
                                        <li class="list-group-item">
                                            {{$movie["vote"]}}
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
            </div>
        </div>
    </div>
</body>
</html>