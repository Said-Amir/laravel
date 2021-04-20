<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href={{ route('home') }}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('date') }}>Date</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('fruits') }}>Fruits</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src={{ asset('img/molengeek.png') }} class="d-block w-75" alt="molengeek">
            </div>
            <div class="carousel-item">
            <img src={{ asset('img/molengeek.png') }} class="d-block w-75" alt="molengeek">
            </div>
            <div class="carousel-item">
            <img src={{ asset('img/molengeek.png') }} class="d-block w-75" alt="molengeek">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <footer>
        <div class="container-fluid bg-dark text-light p-5 text-center">
            <div class="row">
                <div class="col-md-4">Copyright</div>
                <div class="col-md-4">Footer</div>
                <div class="col-md-4">2021</div>
            </div>
            <h4 class="text-center mt-5">Molengeek</h4>
        </div>
    </footer>
    <script src={{ asset('js/app.js') }}></script>
</body>
</html>