<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$arr_all_posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Questo post è bello bello.',
        ],
        [
            'title' => 'Post 2',
            'author' => 'Alessio Papagni',
            'text' => 'Mica guei.',
        ],
    ],
    '12/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Isabella Papagni',
            'text' => 'Questo post è accettabile.',
        ],
        [
            'title' => 'Post 4',
            'author' => 'Alessio Papagni',
            'text' => 'Sì ma issa issa.',
        ],
    ],
    '05/06/2019' => [
        [
            'title' => 'Post 5',
            'author' => 'Leonardo Papagni',
            'text' => 'Alessio fatti i cavoli tuoi.',
        ],
        [
            'title' => 'Post 6',
            'author' => 'Alessio Papagni',
            'text' => 'Ok.',
        ],
    ],
    '27/06/2019' => [
        [
            'title' => 'Post 7',
            'author' => 'Isabella Papagni',
            'text' => 'Auguri mamma.',
        ],
        [
            'title' => 'Post 8',
            'author' => 'Alessio Papagni',
            'text' => 'Guarda che era ieri.',
        ],
    ],
];


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

    // echo var_dump($arr_all_posts);
    // echo var_dump($arr_all_posts[1]);



    $all_dates = array_keys($arr_all_posts);
    // echo var_dump($all_dates);
    // echo var_dump($all_dates[1]);



    $arr_dates_posts = count($arr_all_posts);

    for ($_i = 0; $_i < $arr_dates_posts ; $_i++) {
        $stamp_date = $all_dates[$_i];
        echo "<br><div><b>{$stamp_date}</b>";
            $day_posts_leng = count($arr_all_posts[$stamp_date]);
            // echo var_dump('E questo: '.$day_posts_leng . ' che è?');

            for ($_j=0; $_j < $day_posts_leng; $_j++) {
                echo "<h4>{$arr_all_posts[$stamp_date][$_j]['title']}</h4>";     
                echo "<span>{$arr_all_posts[$stamp_date][$_j]['author']}:</span>";
                echo "<br>";
                echo "<span>{$arr_all_posts[$stamp_date][$_j]['text']}</span>";

            }
        echo "</div>";            
    }
    ?>
</body>
</html>