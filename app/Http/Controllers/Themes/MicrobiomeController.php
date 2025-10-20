<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class MicrobiomeController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('microbiome');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.microbiome', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/microbiome.css",
            'microbiomeData' => $data,
        ]);

    }

}
