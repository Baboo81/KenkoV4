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
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/home.css",
            'homeData' => $data,
        ]);
    }
}
