<?php

$devise=$_POST['type']??NULL;
$amount=isset($_POST['amount'])?(float)$_POST['amount']:NULL;
$taux=isset($_POST['taux'])?(float)$_POST['taux']:NULL;

/*
Si jamais ma variable taux à moins de 4 caractères, dans cette fonction
je multiplie sa valeur *10 jusqu'à atteindre 4 caractères

function taux(float $taux):float{
   if (strlen($taux)<4 && $taux>0)
   {   
    while(strlen($taux)<4)
      {
        $taux*=10;
      } 
   }

   return $taux;
}
*/
/**
 *cette fonction convertisseur, me permet de convertir soit de usd en fc soit le contraire
 */
function convertisseur(string $devise, float $amount,$taux):float|string{
    return match ($devise) {
        'fctousd' => $taux>0?$amount/$taux." usd":"Erreur, Taux doit etre superieur à 0",
        'usdtofc' => $taux>0?$amount*$taux." fc":"Erreur, Taux doit etre superieur à 0",
        default=>0
    };
}

/**
 * dans cette condition, je verifie 
 */
if(isset($devise,$amount,$taux))
{
    //$taux=taux($taux);
    $convertion=convertisseur($devise,$amount,$taux);
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
    <title>Convertiseur</title>
</head>
<body style="padding-top:50px; padding-right:400px;padding-left:400px;">
    <h1>Convertisseur</h1>
    <form  action="" method="post">
        <p>Type de Convertion</p>
        <select  name="type"  required>
            <option value=""></option>
            <option  value="usdtofc">USD-FC</option>
            <option value="fctousd">FC-USD </option>
          
        </select>
        <p>Montant</p>
        <input type="number" step="0.01" required value="<?=$amount?>" name="amount" id="">
        <p>Taux</p>
        <input type="number" value="<?=!empty($taux)?$taux:200?>" name="taux" id="" >
        <p><?php if($devise=="usdtofc"):?></p>
        <h5 style="margin-top:-20px; color:red;"><?=isset($convertion)?$convertion:''?></h5>
        <p><?php elseif($devise=="fctousd"):?></p>
        <h5 style="margin-top:-20px; color:red;"><?=isset($convertion)?$convertion:''?></h5>
        <p><?php endif?></p>
        <button type="submit">Convertir</button>
    </form>

</body>
</html>