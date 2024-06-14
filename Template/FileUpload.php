<?php
class FileUpload 
{
    public static function upload(string $name="PAtrick", string $target_dir = "" )
    {
        $repertoireDestination = dirname(__FILE__)."/";
        $nomDestination        = $name.date("YmdHis").".txt";

        if (is_uploaded_file($_FILES["monfichier"]["tmp_name"])) 
        {
            if (rename($_FILES["monfichier"]["tmp_name"],
                        $repertoireDestination.$nomDestination)) {
                echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                        " a été déplacé vers ".$repertoireDestination.$nomDestination;
            } else {
                echo "Le déplacement du fichier temporaire a échoué".
                        " vérifiez l'existence du répertoire ".$repertoireDestination;
            }          
        } 
        else 
        {
        echo "Le fichier n'a pas été uploadé (trop gros ?)";
        }
    }
}
