<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class PeauController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('peau');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.peau', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/peau.css",
            'peauData' => $data,
        ]);

    }

}
