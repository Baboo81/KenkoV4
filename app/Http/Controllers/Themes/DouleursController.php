<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class DouleursController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('douleurs');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.douleurs', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/douleurs.css",
            'douleursData' => $data,
        ]);

    }

}
