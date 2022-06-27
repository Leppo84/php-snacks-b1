<!-- Snack 1 (visto a lezione)
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $incontri = [
        [
            [
                'nome' => 'Olimpia Milano',
                'casa' => true,
                'punti' => 55
            ],
            [
                'nome' => 'Cantù',
                'casa' => false,
                'punti' => 60
            ]
        ],
        [
            [
                'nome' => 'Locomotiv Monza',
                'casa' => true,
                'punti' => 56
            ],
            [
                'nome' => 'Cuneo United',
                'casa' => false,
                'punti' => 69
            ]
        ],
        [
            [
                'nome' => 'Deportivo la Bologna',
                'casa' => true,
                'punti' => 75
            ],
            [
                'nome' => 'Real Masone',
                'casa' => false,
                'punti' => 73
            ]
        ]
    ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
    $arr_length = count($incontri);
    for ($_i = 0; $_i < $arr_length ; $_i++) { 
        $incontro = $incontri[$_i];
        echo "<div>{$incontro[0]['nome']} - {$incontro[1]['nome']} | {$incontro[0]['punti']} - {$incontro[1]['punti']}</div>";
    } ?>
</body>
</html>