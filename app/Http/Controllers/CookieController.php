<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CookieController extends Controller
{
    public function save(Request $request)
    {
        $preferences = [
            'analytics' => $request->has('analytics'),
            'marketing' => $request->has('marketing'),
        ];

        if (Auth::check()) {
            $user = Auth::user();
            $user->cookie_preferences = json_encode($preferences);
            $user->save();
        } else {
            cookie()->queue(
                'cookie_preferences',
                json_encode($preferences),
                60 * 24 * 365 // 1 an
            );
        }

        return redirect()->back()->with('success', 'Préférences enregistrées avec succès !');
    }
}
