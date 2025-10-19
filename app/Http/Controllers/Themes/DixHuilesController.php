<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class DixHuilesController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('dixHuiles');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.dix-huiles', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/dix-huiles.css",
            'dixHuilesData' => $data,
        ]);

    }

}
