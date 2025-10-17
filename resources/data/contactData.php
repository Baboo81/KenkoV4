<?php

return [
    'title' => 'Formulaire de contact',

    'illustration' => [
        'src' => '/assets/img/form/contact.svg',
        'alt' => 'Illustration contact',
    ],

    'fields' => [
        [
            'id' => 'name',
            'label' => 'Nom',
            'icon' => 'bi-person',
            'type' => 'text',
            'placeholder' => 'Votre nom',
        ],
        [
            'id' => 'firstName',
            'label' => 'Prénom',
            'icon' => 'bi-person',
            'type' => 'text',
            'placeholder' => 'Votre prénom',
        ],
        [
            'id' => 'tel',
            'label' => 'Téléphone',
            'icon' => 'bi-telephone',
            'type' => 'tel',
            'placeholder' => 'Votre numéro',
        ],
        [
            'id' => 'email',
            'label' => 'Email',
            'icon' => 'bi-envelope',
            'type' => 'email',
            'placeholder' => 'Votre adresse mail',
        ],
    ],

    'message_field' => [
        'id' => 'message',
        'label' => 'Message',
        'icon' => 'bi-chat-text',
        'placeholder' => 'Laissez-moi votre message',
    ],

    'buttons' => [
        'submit' => 'Envoyer',
        'back' => "Retour vers la page d'accueil",
    ],
];
