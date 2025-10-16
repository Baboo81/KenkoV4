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

    public function show()
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

    //Gestion de l'accès à Kenko-Ho :
    public function checkAccess(Request $request)
    {
        $code = $request->input('code');
        $authorizedCode = 'Zi35Fs7@';

        if ($code === $authorizedCode) {
            return response('success');
        } else {
            return response('error', 403);
        }
    }
}
