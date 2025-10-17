<?php

return [
    'titles' => [
        'main_Title' =>  "Des questions vous taraudent ?",
        'sub_Title1' => "FAQ KENKO-WEB",
        'sub_Title2' => "FAQ KENKO-HO",
    ],
    'kenkoWeb' => [
        [
            'question' => "Quels services propose Kenko-Web ?",
            'answer' => "<strong>Kenko-Web propose un service de création de site web.</strong> La création d'une maquette permet de définir le visuel du site. Cette étape permet de s'accorder sur les souhaits du client et d'établir la charte graphique."
        ],
        [
            'question' => "Puis-je avoir un site sur-mesure ?",
            'answer' => "<strong>Votre webmaster vous propose un site sur-mesure.</strong> Votre site sera conforme à vos attentes, dans la mesure du raisonnable."
        ],
        [
            'question' => "Est-ce qu'une refonte serait possible ?",
            'answer' => "<strong>La refonte de site est possible.</strong> Je travaille sans CMS pour le moment, donc le nouveau site sera développé avec mes technologies habituelles."
        ],
        [
            'question' => "Quelles technologies utilise votre webmaster ?",
            'answer' => "Votre <strong>webmaster</strong> utilise CSS, HTML, PHP, JavaScript. Pour la création graphique (logo, icônes, illustrations...), Adobe Illustrator est utilisé."
        ],
        [
            'question' => "Est-ce que le devis sera payant ?",
            'answer' => "Le devis est entièrement gratuit."
        ],
        [
            'question' => "Est-ce que le SEO (référencement) sera optimisé ?",
            'answer' => "Oui, un référencement de qualité sera mis en place."
        ],
        [
            'question' => "Quels sont les délais pour la création d'un site web ?",
            'answer' => "Le délai dépend de la complexité du projet et de la réactivité du client.<ul class='text-start my-3'>
                <li>Site vitrine (1 à 5 pages) : 2 à 4 semaines</li>
                <li>Site avec fonctionnalités spécifiques : 4 à 8 semaines</li>
                <li>Site e-commerce : 6 à 12 semaines</li>
                <li>Site sur-mesure : 3 à 6 mois</li>
            </ul>"
        ],
    ],

    'kenkoHo' => [
        [
            'question' => "Comment accéder à la plateforme Kenko-Ho ?",
            'answer' => "L'accès est réservé aux clients suivis par <strong>Christel Rodriguez Perez</strong>, conseillère dōTERRA. Vous pouvez me contacter via le formulaire de contact ou par email/téléphone (coordonnées en bas de page)."
        ],
        [
            'question' => "Que propose la plateforme Kenko-Ho ?",
            'answer' => "Kenko-Ho propose des ressources téléchargeables pour aider les clients à devenir autonomes dans leur bien-être : huiles essentielles, nutriments, alimentation, Reiki, etc."
        ],
        [
            'question' => "Est-ce que l'accès est payant ?",
            'answer' => "L'accès est gratuit, à condition d'être client dōTERRA auprès de <strong>Christel Rodriguez Perez</strong>."
        ],
        [
            'question' => "Que vous propose votre conseillère ?",
            'answer' => "Mon but est de vous aider à retrouver votre bien-être grâce aux huiles essentielles et à d'autres outils naturels."
        ],
        [
            'question' => "Quelles huiles essentielles utilisez-vous ?",
            'answer' => "J'utilise les huiles essentielles dōTERRA : 100% pures, de grade thérapeutique et certifiées CPTG."
        ],
    ],
   'contact' => [
        'title' => "N'hésitez pas à me contacter",
        'illustration' => [
            'src' => '/assets/img/FAQ/contactUs.svg',
            'alt' => "Picto représentant un personnage au téléphone",
        ],
        'methods' => [
            [
                'label' => "Contactez-moi via le formulaire",
                'type' => 'button',
                'action' => '/contact',
                'text' => "Contactez-moi",
            ],
            [
                'label' => "Contactez-moi par email",
                'type' => 'email',
                'value' => 'chrisrodriguez@hotmail.be',
                'icon' => [
                    'src' => '/assets/img/icons/email.svg',
                    'alt' => 'Icône email',
                    'height' => '10rem',
                ],
            ],
            [
                'label' => "Contactez-moi par téléphone",
                'type' => 'phone',
                'value' => '0470 / 35.05.87',
                'icon' => [
                    'src' => '/assets/img/icons/téléphone.svg',
                    'alt' => 'Icône téléphone',
                    'height' => '5rem',
                ],
            ],
        ],
    ],
];
