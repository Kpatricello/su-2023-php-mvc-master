<?php

namespace App\Controller;

use App\model\UploadModel;
use Twig\Environment;

class UploadController extends AbstractController // Extend permet d'utiliser protect 
{
    
    public function __construct(protected UploadModel $model, protected Environment $twig) // Heritage des paramètres du parent
    {
        parent::__construct($twig); // Construit le Twig depuis le parent.
        $this->model = $model; 
    }
    
    public function FileUpload()
    {
        $file = $_FILES['fileToUpload']; // FILES = object php qui renvoie les donne du type file donner dans l'input de l'html
        $filepath = $this->model->SaveFile($file['name'], $file['tmp_name']);
        return $this->twig->render('success.html.twig',['filepath'=>$filepath]);
    }
}
