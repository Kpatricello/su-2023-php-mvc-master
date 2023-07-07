<?php

namespace App\model;

class UploadModel
{
    public function SaveFile($file_name,$temp_path) // donnee enregistrer sur la base de données $nom puis $lieu
    {
        $uploaddirectory='public/upload/';
        $uploadpath=$uploaddirectory.time().'_'.$file_name;
        move_uploaded_file($temp_path,$uploadpath); // déplace le fichier dans le dossier upload
        return $uploadpath;
    }
}