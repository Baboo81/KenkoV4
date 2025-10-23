<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
         //Inclusion des datas :
        $pageName = 'home';
        $data = include resource_path("data/{$pageName}Data.php");

        //On passe l'utilisateur à la vue :
        $user = Auth::user();

        //Passer les paramètres, inclure les fichiers CSS :
        return view('home', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/home.css",
            'homeData' => $data,
            'user' => $user,
        ]);
    }
}
