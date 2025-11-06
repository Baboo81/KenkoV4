<?php

namespace App\Http\Controllers\Auth;

// On importe les classes nécessaires
use App\Http\Controllers\Controller;   // Classe de base pour tous les contrôleurs Laravel
use Illuminate\Http\Request;           // Gère les données envoyées via le formulaire (comme l'email)
use Illuminate\Support\Facades\Password; // Facade pour utiliser le système de réinitialisation de mot de passe intégré à Laravel

class ForgotPasswordController extends Controller
{
    /**
     * Affiche la vue contenant le formulaire "mot de passe oublié".
     */
    public function show()
    {
        // Retourne la vue située dans resources/views/auth/forgot-password.blade.php
        return view('auth.forgot-password');
    }

    /**
     * Traite l'envoi du formulaire quand l'utilisateur demande un lien de réinitialisation.
     */
    public function send(Request $request)
    {
        // Étape 1 : Validation de l'email
        $request->validate([
            'email' => 'required|email' // Le champ "email" est obligatoire et doit être une adresse valide
        ]);

        // Étape 2 : Envoi du lien de réinitialisation via le service Password de Laravel
        $status = Password::sendResetLink(
            $request->only('email') // On transmet l'email à la méthode
        );

        // Étape 3 : Gestion du retour
        // Si Laravel renvoie le statut "RESET_LINK_SENT", tout s'est bien passé
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)]) // Retour à la même page avec un message de succès
            : back()->withErrors(['email' => __($status)]); // Sinon, on retourne avec un message d'erreur
    }
}
