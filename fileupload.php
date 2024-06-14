<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres 
$repertoireDestination = dirname(__FILE__)."/";
$nomDestination        = "fichier_du_".date("YmdHis").".txt";

if (is_uploaded_file($_FILES["monfichier"]["tmp_name"])) {
    if (rename($_FILES["monfichier"]["tmp_name"],
                   $repertoireDestination.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;
    } else {
        echo "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }          
} else {
    echo "Le fichier n'a pas été uploadé (trop gros ?)";
}
?>
</body>
</html>