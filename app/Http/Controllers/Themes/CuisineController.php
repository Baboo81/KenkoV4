<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class CuisineController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('cuisine');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.cuisine', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/cuisine.css",
            'dixHuilesData' => $data,
        ]);

    }

}
