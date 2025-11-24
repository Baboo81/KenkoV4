<?php

namespace App\Http\Controllers\Cookies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CookiePreferencesController extends Controller
{
    /**
     * Affiche la page de gestion des préférences cookies
     */
    public function show()
    {
        $title = "Gestion des cookies";

        // Récupérer les préférences existantes (si présentes)
        $existingPreferences = [];

        if (Auth::check()) {
            $existingPreferences = json_decode(Auth::user()->cookie_preferences ?? "[]", true);
        } elseif (Cookie::has('cookie_preferences')) {
            $existingPreferences = json_decode(Cookie::get('cookie_preferences'), true);
        }

        return view('cookies.cookie-preferences', compact('title', 'existingPreferences'));
    }

    /**
     * Enregistre les préférences cookies
     */
    public function save(Request $request)
    {
        // Laravel gère automatiquement le CSRF grâce à @csrf dans le formulaire

        $preferences = [
            'analytics' => $request->boolean('analytics'),
            'marketing' => $request->boolean('marketing'),
        ];

        // Si l'utilisateur est connecté → stocker en BDD
        if (Auth::check()) {
            $user = Auth::user();
            $user->cookie_preferences = json_encode($preferences);
            $user->save();
        } else {
            // Sinon → stocker dans un cookie pour 1 an
            Cookie::queue(
                'cookie_preferences',
                json_encode($preferences),
                60 * 24 * 365 // minutes
            );
        }

        return redirect()
            ->route('cookie.preferences.show')
            ->with('success', 'Vos préférences ont été mises à jour.');
    }
}
