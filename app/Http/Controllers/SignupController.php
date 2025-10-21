<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignupController extends Controller
{
    // Affiche la page d'inscription
    public function show()
    {
        return view('auth.signup', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/auth/signup.css",
        ]);
    }

    // Traite le formulaire d'inscription
    public function store(Request $request)
    {
        // Validation des champs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création du nouvel utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Connexion automatique après inscription
        Auth::login($user);

        // Redirection vers la page d’accueil avec message
        return redirect('/')->with('success', 'Bienvenue ' . $user->name . ' ! Votre compte a été créé avec succès.');
    }
}
