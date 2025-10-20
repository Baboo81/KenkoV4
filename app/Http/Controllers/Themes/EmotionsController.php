<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class EmotionsController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('emotions');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.emotions', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/emotions.css",
            'emotionsData' => $data,
        ]);

    }

}
