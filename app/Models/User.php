<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordFR;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les champs pouvant être remplis en masse (mass assignable)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Les champs à cacher lors de la sérialisation (par ex. JSON)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les casts de colonnes pour que Laravel gère automatiquement leur type
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'cookie_preferences' => 'array', // <-- Permet d'accéder directement au JSON comme un tableau PHP
    ];

    /**
     * Notification de réinitialisation du mot de passe
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordFR($token));
    }
}
