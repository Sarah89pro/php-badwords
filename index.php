<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //dichiarazione variabili
    $text = 'C’era una volta una bambina, bella e gentile.
    Indossava sempre un cappuccio di velluto rosso, che le era stato regalato dalla sua adorata nonnina,
    così che tutti la chiamavano “Cappuccetto rosso”.';

    $length_text = strlen($text);//length stringa
    ?>

    <!--visualizzare a schermo il paragrafo-->
    <p>Paragrafo: <?php echo $text; ?></p>

    <!--Visualizzare a schermo la lunghezza di testo del paragrafo.-->
    <p>Il paragrafo è composto da <?php echo $length_text; ?> caratteri.</p>

    <!--Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi,
    ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola,
    all'interno del testo creato da voi sopra, con tre *.
    Stampare a schermo il paragrafo con il testo censurato.-->

    <?php
    $bad = $_GET ['bad']; //da query bad=volta;
    //replace
    $bad_replaced = str_replace($bad, '***', $text);
    ?>
    
    <p>Questa è la parola da modificare nel paragrafo: "<?php echo $bad; ?>"</p>

    <p>Questo è il paragrafo modificato: <?php echo $bad_replaced; ?></p>


</body>
</html>