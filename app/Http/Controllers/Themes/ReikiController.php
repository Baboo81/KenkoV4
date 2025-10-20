<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class ReikiController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('reiki');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.reiki', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/themes/reiki.css",
            'reikiData' => $data,
        ]);

    }

}
