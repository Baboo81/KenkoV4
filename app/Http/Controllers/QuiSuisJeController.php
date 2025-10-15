<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuiSuisJeController extends Controller
{

    public function loadPageData($pageName)
    {
        $filePath = resource_path("data/{$pageName}Data.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }

    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('qui-suis-je');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('qui-suis-je', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/quiSuisJe.css",
            'kenkoHoData' => $data,
        ]);

    }
}
