<?php
$salaireHoraire = isset($_GET['salaireHoraire']) ? (float)$_GET['salaireHoraire'] : 0;
$nombreHeure = isset($_GET['nombreHeure']) ? (int)$_GET['nombreHeure'] : 0;
$nombreHeureWeekend = isset($_GET['nombreHeureWeekend']) ? (int)$_GET['nombreHeureWeekend'] : 0;
$heureNormale = isset($_GET['heureNormale']) ? (int)$_GET['heureNormale'] : 0;

$isError = NULL;
$paySurplus = 0;
$operation1 = ($heureNormale<$nombreHeure) ? $nombreHeure-$heureNormale : 0;

if($salaireHoraire < 0 || $nombreHeure < 0 || $nombreHeureWeekend < 0 || $heureNormale < 0 || empty($_POST))
{
    $isError = "Valeur negative ou vide non valide";
}
else
{

 if($operation1 != 0)
 {
    if($nombreHeureWeekend >= 2)
    {
       $paySurplus += 2 * ($salaireHoraire * 200 / 100);
       $operation1 -= $nombreHeureWeekend;
    }

    if($operation1 >= 6)
    {
       $paySurplus += 6 * ($salaireHoraire * 130 / 100);
       $operation1 -= 6;
    }
    else
    {
       $paySurplus += $operation1 * ($salaireHoraire * 130 / 100);
       $operation1 -= $operation1;
    }

    if($operation1 != 0)
    {
       $paySurplus += $operation1 * ($salaireHoraire * 150 / 100);
    }
   }
}

$paySurplus += $heureNormale * $salaireHoraire;
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
    <title>Ma Page</title>

</head>
<body style="padding-left:400px;padding-right:400px;padding-top:50px">
    <a href="../index.php">Retourner</a>
    <h1>Pay Management</h1>
    <form action="" method="get">
        <p>Salaire Horaire</p>
        <input type="number"  required name="salaireHoraire" id="" >
        <p>Nombre d'Heure</p>
        <input type="number" required name="nombreHeure" id="">
        <p>Nombre d'Heure en Weekend</p>
        <input type="number"  name="nombreHeureWeekend" id="">
        <p>Heures Normales</p>
        <input type="number" required name="heureNormale" id="">
        <button type="submit">Calculer</button>
    </form>
    <hr>
    <p><?php if($isError != NULL):?></p>
        <p style="color:red"><?=$isError;?></p>
    <p><?php elseif($paySurplus != 0):?></p>
    <p>Salaire total = <?= $paySurplus;?>$</p>
    <p><?php endif;?></p>
</body>
</html>