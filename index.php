<?php
function test(...$test){
  $content = implode('', $test);
  return "<form>{$content}</form>";
}
?>

<div>
<?= test("<input type='text'    ></input>",'<button type="submit">Envoyer</button>','<button type="submit">Envoyer</button>','<button type="submit">Envoyer</button>');?>
<input type="radio" id="huey" name="drone" value="huey" checked />
<label for="huey">Huey</label>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Fichier</title>
</head>
<body style="padding:20px;">
    <h1>List of Pages</h1>
    <a href="tps\convertisseur_money.php">Money Convert</a>
    <br>
    <a href="tps\calculatrice.php">Calculator</a>
    <br>
    <a href="tps\pay_management.php">Pay Management</a>    
</body>
</html>