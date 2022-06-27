<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php
$all_num=[];
    while (count($all_num) < 15) {
        $number = rand(1, 100);
        if (!in_array($number, $all_num)) {
            $all_num[] = $number;
        }
    }
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
    echo var_dump($all_num);
    ?>
</body>
</html>