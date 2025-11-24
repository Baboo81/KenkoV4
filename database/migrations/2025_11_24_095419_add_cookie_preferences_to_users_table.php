<?php

// On importe les classes nécessaires de Laravel
use Illuminate\Database\Migrations\Migration; // Classe de base pour créer une migration
use Illuminate\Database\Schema\Blueprint;   // Permet de définir la structure des tables
use Illuminate\Support\Facades\Schema;       // Fournit les méthodes pour manipuler la base de données

// Création d'une migration anonyme (nouvelle syntaxe Laravel)
return new class extends Migration
{
    /**
     * Méthode "up" : exécutée lorsque tu lances la migration
     * C'est ici qu'on applique les changements à la table.
     */
    public function up(): void
    {
        // Modifier la table "users"
        Schema::table('users', function (Blueprint $table) {
            // Ajouter une colonne "cookie_preferences" de type JSON
            // nullable() => cette colonne peut rester vide
            // after('remember_token') => place la colonne juste après la colonne 'remember_token'
            $table->json('cookie_preferences')->nullable()->after('remember_token');
        });
    }

    /**
     * Méthode "down" : exécutée lorsque tu "rollback" la migration
     * Permet d'annuler les changements appliqués par la méthode up().
     */
    public function down(): void
    {
        // Modifier la table "users"
        Schema::table('users', function (Blueprint $table) {
            // Supprimer la colonne "cookie_preferences"
            $table->dropColumn('cookie_preferences');
        });
    }
};
