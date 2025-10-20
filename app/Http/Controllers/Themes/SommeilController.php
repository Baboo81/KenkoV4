<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class SommeilController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('sommeil');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.sommeil', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/sommeil.css",
            'sommeilData' => $data,
        ]);

    }

}
