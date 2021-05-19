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
    <div class="container">
        <div class="row pt-5 border-bottom border-black pb-2">
            <div class="col fw-bold">#</div>
            <div class="col fw-bold">Nom</div>
            <div class="col fw-bold">Prenom</div>
            <div class="col fw-bold">Age</div>
            <div class="col fw-bold">Date de Naissance</div>
            <div class="col fw-bold">Genre</div>
            <div class="col fw-bold">Action</div>
        </div>

        @foreach ($personnes as $key=>$personne)
            <div class="row pt-2">
                <div class="col">
                    <span>{{ $key }}</span>
                </div>
                <div class="col">
                    <span>{{ $personne->nom }}</span>
                </div>
                <div class="col">
                    <span>{{ $personne->prenom }}</span>
                </div>
                <div class="col">
                    <span>{{ $personne->age }}</span>
                </div>
                <div class="col">
                    <span>{{ $personne->dob }}</span>
                </div>
                <div class="col">
                    <span>{{ $personne->genre }}</span>
                </div>
                <div class="col">
                    <form action="personnes/{{ $personne->id }}/delete" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>