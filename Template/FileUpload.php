<?php
class FileUpload 
{
    public static function upload(string $name="file", string $target_dir = "" )
    {
        $repertoireDestination = dirname(__FILE__)."/".$target_dir."/";
        $nomDestination = $name.date("YmdHis")."txt";

        if (is_uploaded_file($_FILES["monfichier"]["tmp_name"])) 
        {
            if (rename($_FILES["monfichier"]["tmp_name"],$repertoireDestination.$nomDestination)) 
            {
                echo "Fichier uploadé avec succès";
            } 
            else 
            {
                echo "L'uploade du fichier a échoué".$repertoireDestination."répertoire non trouvé";
            }          
        } 
        else 
        {
            echo "Le fichier n'a pas été uploadé ";
        }
    }
}
