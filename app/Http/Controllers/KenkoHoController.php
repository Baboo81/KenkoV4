<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;

class KenkoHoController extends Controller
{

    public function loadPageData($pageName)
    {
        $filePath = resource_path("data/{$pageName}Data.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }

    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('kenkoHo');

        //Récupération des témoignages depuis la DB :
        $testimonialsFromDB = Testimonial::latest()->get(['name', 'comment', 'rating'])->toArray();

        //Fusionner les témoignages :
        $data['testimonials'] = array_merge(
            $data['testimonials'] ?? [],
            $testimonialsFromDB
        );


        //Passer les paramètres, inclure les fichiers CSS :
        return view('kenko-ho', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/kenko-ho.css",
            'kenkoHoData' => $data,
        ]);

    }

    //Gestion de l'accès à Kenko-Ho :
    public function checkAccess(Request $request)
    {

        $code = $request->input('code');
        $authorizedCode = env('KENKO_ACCESS_CODE', 'Zi35Fs7@');

        if ($code === $authorizedCode) {
            // Stocke la validation dans la session
            $request->session()->put('kenko_access', true);

            //Debug
            Log::info('Session après checkAccess : ', session()->all());

            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error'], 403);
        }

    }
}
