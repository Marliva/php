<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Coucou</h1>
    <p>
        <?php
        echo 'Découverte de php';
        ?>
    </p>
    <?php
    echo '<h2>Titre</h2>';
    //Un commentaire
    /* Commentaires
    sur plusieurs
    lignes */

    $age = 30;
    $nom = 'Jane Doe';

    echo $nom . ' a ' . $age . ' ans.';



    echo '<hr>';

    // $tableau = array();
    // $tableau = [];

    // $tableau = ['Lundi', 'Mardi', 23, 45, 67.20];
    ?>
    <pre>
    <?php
    // var_dump($tableau);
    // echo '<br>';
    // print_r($tableau);
    // var_dump($tableau[2]);

    $releves = [
        [
            "ville" => "Rouen",
            "température" => 12
        ],
        [
            "ville" => "Paris",
            "température" => 14
        ],
        [
            "ville" => "Saint-Lô",
            "température" => 5
        ],
        [
            "ville" => "Dieppe",
            "température" => 8
        ]
    ];


// print_r($releves[1]['température'] + $releves[2]['température']);

foreach($releves as $releve):
    echo '<h1>' . $releve['ville'] . ' : ' . $releve['température'] . '°C</h1>';

endforeach;


    ?>
</pre>
</body>

</html>