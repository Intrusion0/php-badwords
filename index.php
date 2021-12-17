<?php
	
    // Descrizione:
    //Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. (vedi le funzioni stringhe nelle sliedes)
    //[OPZIONALE] Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

    $text = 'Ciao, sono Mario Lombardo e ho 20 anni';
    $asterisks = '***';
    $textBonus = str_replace($_GET['wordToBeCensored'], $asterisks, $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Badwords</title>
    <style>
        div {
            text-align: center;
            font-size: 22px;
            margin: 20px 0;
            line-height: 40px;
        }

        span {
            font-weight: 900;
            color: blue;
        }

        #bonus {
            color: red;
            margin-top: 100px;
        }

        h4 {
            margin: 0;
        }
    </style>
</head>
<body>
    
    <!-- Testo e lunghezza testo base -->
    <div>
        <?php 
            echo $text . '<br>';
            echo 'La lunghezza del testo &egrave; di: <span>' . strlen($text) . '</span> caratteri';
        ?>
    </div>

    <!-- Bonus -->
    <div id="bonus"> BONUS </div>
    <div>
        <form name="form" action="" method="get">
            <h4>
                Inserisci una parola da censurare:
            </h4>
            <input type="text" name="wordToBeCensored" id="wordToBeCensored">
        </form>
    </div>
    <div>
        <?php
            if (str_contains($textBonus, $asterisks)) {
                echo $textBonus . '<br />';
                echo 'La lunghezza del testo con la parola censurata &egrave; di: <span>' . strlen($textBonus) . '</span> caratteri';
            }
        ?>
    </div>
</body>
</html>
