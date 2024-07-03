<?php

namespace App;

class FileUpload
{
    public static function upload(string $name = 'file', string $target_dir = ''): void
    {
        $info = new \SplFileInfo(isset($_FILES['monfichier']['name']) ? $_FILES['monfichier']['name'] : '');
        $repertoireDestination = dirname(__FILE__).'/'.$target_dir.'/';
        $nomDestination = (string) $name.date('YmdHis').'.'.$info->getExtension();
        $message = '';
        if (isset($_FILES['monfichier']['tmp_name'])) {
            if (is_uploaded_file($_FILES['monfichier']['tmp_name'])) {
                if (rename($_FILES['monfichier']['tmp_name'], $repertoireDestination.$nomDestination)) {
                    $message = 'Fichier uploadé avec succès';
                } else {
                    $message = "L'uploade du fichier a échoué".$repertoireDestination.'répertoire non trouvé';
                }
            } else {
                $message = "Le fichier n'a pas été uploadé ";
            }
        }

        echo $message;
    }
}
