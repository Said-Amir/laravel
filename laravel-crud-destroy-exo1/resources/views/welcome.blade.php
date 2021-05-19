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
        <div class="row border-bottom p-3">
            <div class="col text-center fw-bold">#</div>
            <div class="col text-center fw-bold">Nom</div>
            <div class="col text-center fw-bold">Prenom</div>
            <div class="col text-center fw-bold">Age</div>
            <div class="col text-center fw-bold">Date de naissance</div>
            <div class="col text-center fw-bold">Genre</div>
            <div class="col text-center fw-bold">Action</div>
        </div>
        
        @foreach ($personnes as $user)
                <div class="row border-bottom px-3 py-2 align-items-center">
                    <div class="col">
                        <p class="p-0 m-0 text-center">{{ $user->id }}</p>
                    </div>
                    <div class="col">
                        <p class="p-0 m-0 text-center">{{ $user->nom }}</p>
                    </div>
                    <div class="col">
                        <p class="p-0 m-0 text-center">{{ $user->prenom }}</p>
                    </div>
                    <div class="col">
                        <p class="p-0 m-0 text-center">{{ $user->age }}</p>
                    </div>
                    <div class="col">
                        <p class="p-0 m-0 text-center">{{ $user->dob }}</p>
                    </div>
                    <div class="col">
                        <p class="p-0 m-0 text-center">{{ $user->genre }}</p>
                    </div>
                    <div class="col">
                        <form class="d-flex justify-content-center" action="user/{{ $user->id }}/delete" method="POST">
                            @csrf
                            <button class=" mx-auto btn btn-sm btn-danger text-white" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
        @endforeach
    </div>
</body>
</html>