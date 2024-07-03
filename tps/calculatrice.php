<?php

$valeurX = isset($_POST['valeurx']) ? (float) $_POST['valeurx'] : 0;
$valeurY = isset($_POST['valeury']) ? (float) $_POST['valeury'] : 0;
$operation = $_POST['operation'] ?? '+';

if (!empty($_POST)) {
    match ($operation) {
        '+' => $resulat = $valeurX + $valeurY,
        '*' => $resultat = $valeurX * $valeurY,
        '-' => $resulat = $valeurX - $valeurY,
        '/' => $resulat = $valeurY != 0 ? $valeurX / $valeurY : 'Erreur, division par 0 impossible',
        default => ''
    };
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page</title>
</head>
<body style="padding-left:400px;padding-right:400px;padding-top:50px">
    <a href="../index.php">Retourner</a>
<h1>Calculatrice</h1>
    <form action="" method="post">
        <p>Première valeur</p>
        <input required type="number" name="valeurx"  step="0.01" id="">
        
        <p>Deuxieme valeur</p>
        <input required type="number" step="0.01" name="valeury"  id="">
        <hr>
        <select required name="operation" id="" >
            <option value="+">addition(+)</option>
            <option value="-">soustraction(-)</option>
            <option value="*">multiplication(x)</option>
            <option value="/">division(/)</option>
        </select>
        <button type="submit">Calculer</button>
    </form>
    <p><?php if(isset($resulat)):?></p>
    <p><?=$valeurX;?><?=$operation;?><?=$valeurY;?> = <?=$resulat;?></p>
    <p><?php endif;?></p>
</body>
</html>