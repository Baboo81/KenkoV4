<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class EnfantsController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('enfants');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.enfants', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/enfants.css",
            'enfantsData' => $data,
        ]);

    }

}
