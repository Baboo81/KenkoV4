<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;

abstract class ThemeController extends Controller
{
    protected function loadPageData($pageName)
    {
        $filePath = resource_path("data/themes/{$pageName}Data.php");

        if (!file_exists($filePath)) {
            abort(404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }
}
