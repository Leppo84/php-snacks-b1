<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// $input_name = '';
// $input_email = '';
// $input_age = '';
$input_name = $_GET['name'];
$input_mail = $_GET['email'];
$input_age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Inserisci il tuo nome... </label>
        <input type="text" name="name" placeholder="Cognome Nome">
        <br>
        <label for="email">Inserisci il tuo indirizzo e-mail... </label>
        <input type="text" name="email" placeholder="name@sample.it">
        <br>
        <label for="age">Inserisci la tua età... </label>
        <input type="text" name="age" placeholder="33">
        <br>
        <button>Invia</button>
    </form>
    <?php
        $position_chiocc = strpos($input_mail,'@');
        $position_mark = strpos($input_mail, '.', $position_chiocc);
        if (empty($input_name) | empty($input_mail) | empty($input_age)) {
            $message = 'Accesso negato. Uno o più dati mancanti.';
        }
        elseif (strlen($input_name) > 2 && $position_chiocc == true && $position_mark == true && is_numeric($input_age) == true) {
            $message = 'Accesso riuscito. Dati registrati correttamente.';
        }
        else {
            $message = 'Accesso negato. Qualquadra non cosa!';
        }
    
    echo $message; ?>
</body>
</html>