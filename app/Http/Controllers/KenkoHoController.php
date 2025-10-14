<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KenkoHoController extends Controller
{

    public function loadPageData($pageName)
    {
        $filePath = resource_path("data/{$pageName}Data.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }

    public function index()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('kenkoHo');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('kenko-ho', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/kenko-ho.css",
            'kenkoHoData' => $data,
        ]);

    }
}
