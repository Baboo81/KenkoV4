<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as BaseResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordFR extends BaseResetPassword
{
    /**
     * Crée le message de notification en français.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Réinitialisation de votre mot de passe')
            ->greeting('Bonjour !')
            ->line('Vous recevez cet e-mail parce que nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.')
            ->action('Réinitialiser le mot de passe', url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
            ->line('Ce lien de réinitialisation expirera dans 60 minutes.')
            ->line('Si vous n’avez pas demandé de réinitialisation de mot de passe, aucune action supplémentaire n’est requise.')
            ->salutation('Cordialement,');
    }
}
