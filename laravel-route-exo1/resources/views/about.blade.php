<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Je suis la page About, Monsieur {{ $prenom }} {{ $nom }}</h1>
    <a href={{ route("pagePrincipale") }}>Welcome</a>
</body>
</html>