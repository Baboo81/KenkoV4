<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         //Inclusion des datas :
        $pageName = 'home';
        $data = include resource_path("data/{$pageName}Data.php");

        //Passer les paramètres, inclure les fichiers CSS :
        return view('home', [
            'pageTitle' => "Kenko-Web - agence web à Waterloo",
            'metaDesc' => "Kenko-web, le site web de Christel Rodriguez Perez, developer web. Fourni un service de création de site web avec SEO, design personnalisé",
            'metaKeyWords' => "Kenko-web, agence web, création de sites web, developer Full stack",
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/home.css",
            'homeData' => $data,
        ]);
    }
}
