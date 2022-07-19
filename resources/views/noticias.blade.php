<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Notícias</title>
</head>
<body>
<div class="container rounded my-3 py-5">
    <div class="row d-flex justify-content-between">
        @foreach($artigos as $artigo)
            <div class="card col-4 pt-3 m-2 mt-4" style="width: 22rem;">
                <a href="#">
                <img src="{{ $artigo['img'] }}" class="card-img-top rounded" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $artigos['titulos'] }}</h5>
                    <p class="card-text">Lista "The World's 50 Best Restaurants" foi anunciada nesta segunda-feira (18) durante evento em Londres. A Casa do Porco ficou entre os 10 melhores; Oteque, do RJ, conquistou a 47ª posição.</p>
                </div>
                <p class="card-text text-center mb-3"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        @endforeach
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
