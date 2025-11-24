<?php

namespace App\Http\Controllers\Cookies;

use App\Http\Controllers\Controller;

class PolitiqueCookiesController extends Controller
{
    public function show()
    {
        return view('cookies.politiquesCookies', [
            'title' => 'Politique des cookies',
        ]);
    }
}
