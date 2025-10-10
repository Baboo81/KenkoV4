<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KenkoWebController extends Controller
{

    public function loadPageData($pageName)
    {
        $filePath = resource_path("data/{$pageName}Data.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {pageName} est introuvable !");
        }

        return include $filePath;
    }

    public function index()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('kenko-web');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('kenko-web', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/kenko-web.css",
            'kenkoWebData' => $data,
        ]);

    }
}
