<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ $current==='home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $current==='batiment' ? 'active' : '' }}" aria-current="page" href="/batiment">Batiments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $current==='formation' ? 'active' : '' }}" href="/formation">Formations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $current==='eleve' ? 'active' : '' }}" href="/eleve">Eleves</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
</body>
</html>