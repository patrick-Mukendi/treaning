
<html>
<body>
  <form enctype="multipart/form-data" action="Template/FileUpload .php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    Transfère le fichier <input type="file" name="monfichier" />
    <input type="submit" />
  </form>
</body>
</html>


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