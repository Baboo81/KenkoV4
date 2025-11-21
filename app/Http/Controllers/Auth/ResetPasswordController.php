<?php

namespace App\Http\Controllers\Auth;

// Importation des classes nécessaires
use App\Http\Controllers\Controller;   // Classe de base pour tous les contrôleurs Laravel
use Illuminate\Http\Request;           // Pour récupérer et valider les données du formulaire
use Illuminate\Support\Facades\Password; // Fournit les méthodes pour réinitialiser les mots de passe
use Illuminate\Support\Facades\Hash;     // Pour hacher le nouveau mot de passe avant de le sauvegarder
use Illuminate\Support\Str;              // Pour générer une nouvelle valeur du token "remember me"

class ResetPasswordController extends Controller
{
    /**
     * Affiche le formulaire de réinitialisation du mot de passe.
     *
     * @param string $token  Le jeton (token) envoyé dans le lien par email
     */
    public function show(Request $request, $token)
    {
        // On retourne la vue "reset-password" avec le token pour le formulaire
        return view('auth.reset-password', [
            'token' => $token,
            'email' => $request->email
        ]);
    }

    /**
     * Met à jour le mot de passe dans la base de données.
     */
    public function update(Request $request)
    {
        // Étape 1 : Validation des champs du formulaire
        $request->validate([
            'token' => 'required',                   // Le token est obligatoire
            'email' => 'required|email',             // L'adresse email doit être valide
            'password' => 'required|min:8|confirmed',// Le mot de passe doit avoir au moins 8 caractères
                                                     // et correspondre au champ "password_confirmation"
        ]);

        // Étape 2 : Tentative de réinitialisation du mot de passe via le "Password Broker"
        $status = Password::reset(
            // On transmet les données nécessaires à la méthode de réinitialisation
            $request->only('email', 'password', 'password_confirmation', 'token'),

            // Étape 3 : Callback exécutée si le token et l'email sont valides
            function ($user) use ($request) {
                // On met à jour le mot de passe et le token "remember me"
                $user->forceFill([
                    'password' => Hash::make($request->password), // Hashage sécurisé du mot de passe
                    'remember_token' => Str::random(60),          // Nouveau jeton aléatoire pour les connexions persistantes
                ])->save(); // Enregistrement des modifications dans la base de données
            }
        );


        // Étape 4 : Gestion du retour selon le statut obtenu
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status)) // Succès → redirige vers la page login avec message
            : back()->withErrors(['email' => [__($status)]]);         // Échec → retour au formulaire avec message d’erreur
    }
}
