<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Said présentation</title>
</head>
<body>

<h1>Hello ! </h1>
    <?php


        // **************************** Opérations mathématiques ***************************************** 

        $nb1 = 5;
        $nb2 = 12;

                // Addition

        $nb1 + $nb2;

                // Soustraction

        $nb1 - $nb2;

                // Division

        $nb1 / $nb2;

                // Multiplication

        $nb1 * $nb2;

                // Modulo ( Reste de la division entière entre deux nombre )

        $nb1 % $nb2;

                // Exponentielle 

        $nb1 ** $nb2;

        $prenom = 'Said';
        $nom = 'Maktabi';
        $age = 23;

        if ($age > 20) {
                echo 'Vous êtes majeur';
        }

        // **************************** Fin Opérations mathématiques ***************************************** 
    ?>

    <script>
        let age = prompt('Quel âge avez vous ?');
        alert('Vous avez ' + age + ' ans');
    </script>
</body>
</html>