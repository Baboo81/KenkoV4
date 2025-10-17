<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
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
        $data = $this->loadPageData('faq');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('faq', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/faq.css",
            'faqData' => $data,
        ]);

    }
}
