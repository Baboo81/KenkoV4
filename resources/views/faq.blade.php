@extends('layouts.app')

@section('content')
<section class="">
    <div class="container text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="blob-container mx-auto">
                    <img src="/assets/img/FAQ/faq.svg" alt="Photo représentant des personnages absorbés par leurs écrans" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="my-5">
            <h1 class="text-center my-5 fs-1 fontBlack">Des questions vous taraudes ?</h1>
        </div>
        <div class="row text-center my-5">
            <div class="my-5">
                <h1 class="text-center my-5 fs-1 fontBlack">FAQ KENKO-WEB</h1>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4>Quels services propose Kenko-Web ?</h4>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><strong>Kenko-Web pour propose un service de création de site web.</strong> La création d'un site web, repose tout d'abord sur la création d'une maquette. La maquette c'est une reproduction du visuel du site, grâce à cela vous aurez l'aspect visuel du site, cela va permettre de se mettre d'accord sur ce que souhaite le client. Nous mettrons en place la charte graphique à ce moment là.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4>Puis-je avoir un site sur-mesure ?</h4>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><strong>Votre webmaster vous propose un site sur-mesure.</strong> Votre site sera conforme avec vos souhaits dans la mesure du raisonnable bien-entendu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4>Est-ce qu'une refonte serait possible ?</h4>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><strong>La refonte de site est possible.</strong> Je précise néanmoins que je travail sans CMS du moins pour le moment, ce qui fait que je déveloperais le nouveau site en utilisant les technologies que j'utilisent habituellement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h4>Quelles technologies utilise votre <strong>webmaster</strong> ?</h4>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Votre <strong>webmaster</strong> utilise les technologies suivantes : CSS, HTML, PHP, JavaScript. Pour la partie graphique (création : du logo, d'icônes, dessins, ... ) Adobe Illustrator sera utilisé.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h4>Est-ce que le devis sera payant ?</h4>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Le devis sera gratuit.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h4>Est-ce que le <strong>SEO (référencement du site) </strong> sera optimiser ?</h4>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Un référencement de qualité sera mis en place.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <h4> Quels sont les délais pour la création d'un site web ?</h4>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Le délai de création d'un site web dépend de plusieurs facteurs, notamment la complexité du projet, et des fonctionnalités souhaités et de la réactivité du client pour valider les étapes.
                            </p>
                            <ul class="text-start my-3">
                                <li>- Pour un site vitrine simple (1 à 5 pages) : 2 à 4 semaines.</li>
                                <li class="my-3">- Pour un site avec des fonctionnalités spécifiques (blog, formulaire avancés, ...) 4 à 8 semaines.</li>
                                <li class="my-3">- Pour un site e-commerce(boutique en ligne avec paiement, gestion de stock, ...) 6 à 12 semaines.</li>
                                <li class="my-3">- Site sur-mesure (dévelopement spécifique, intégrations complexes, ...) 3 à 6 mois.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center my-5">
            <div class="my-5">
                <h1 class="text-center my-5 fs-1 fontBlack">FAQ KENKO-HO</h1>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOneBis">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneBis" aria-expanded="true" aria-controls="collapseOneBis">
                            <h4> Comment accéder à la plateforme Kenko-Ho ?</h4>
                        </button>
                    </h2>
                    <div id="collapseOneBis" class="accordion-collapse collapse" aria-labelledby="headingOneBis" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Pour accéder à la plateforme Kenko-Ho, il faut être suivi par <strong>un conseiller dōTERRA et plus précisement par Christel Rodriguez Perez</strong>. Pour plus d'informations à ce sujet, contactez-moi via le formulaire de contact se trouvant sur la page : contact ou par email et par téléphone aussi, toutes les coordonnées se trouvent en-bas de chaque pages du site.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwoBis">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoBis" aria-expanded="false" aria-controls="collapseTwoBis">
                            <h4>Que propose la plateforme Kenko-Ho ?</h4>
                        </button>
                    </h2>
                    <div id="collapseTwoBis" class="accordion-collapse collapse" aria-labelledby="headingTwoBis" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>La plateforme Kenko-Ho, donne une multitude d'information téléchargeable pour permettre aux clients qui suivent un coaching auprès de leur conseillère d'apprendre à devenir autonome au niveau de leur santé.<br />Les informations que vous y trouverez traîtent : des huiles essentielles, des nutriments, de l'alimentation, du Reiki, ...</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThreeBis">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeBis" aria-expanded="false" aria-controls="collapseThreeBis">
                            <h4>Est-ce que l'accès est payant ?</h4>
                        </button>
                    </h2>
                    <div id="collapseThreeBis" class="accordion-collapse collapse" aria-labelledby="headingThreeBis" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>L'accès est gratuit, la seule restriction est d'être client auprès de votre conseillère dōTERRA (Christel Rodriguez Perez).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFourBis">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourBis" aria-expanded="false" aria-controls="collapseFourBis">
                            <h4>Que vous propose votre conseillère ?</h4>
                        </button>
                    </h2>
                    <div id="collapseFourBis" class="accordion-collapse collapse" aria-labelledby="headingFourBis" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Mon but est de vous aider à retrouver votre bien-être, pour se faire je vous ferai découvrir le monde des huiles essentielles qui regorge de richesses.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFiveBis">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveBis" aria-expanded="false" aria-controls="collapseFiveBis">
                            <h4>Quelles huiles essentielles utilisez-vous ?</h4>
                        </button>
                    </h2>
                    <div id="collapseFiveBis" class="accordion-collapse collapse" aria-labelledby="headingFiveBis" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>J'utilise les huiles essentielles de la marque dōTERRA, se sont des huiles essentielles de haute qualité 100% pures de grade thérapeutique certifiées CPTG.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="my-5">
                <h1 class="text-center my-5 fs-1 fontBlack">N'hésitez pas à me contacter</h1>
            </div>
            <section class="rounded-5 p-5 d-flex align-center justify-items-center contactUs">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/FAQ/contactUs.svg" alt="Picto représentant un personnage au téléphone">
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <p>Contactez-moi via le formulaire</p>
                        <button onclick="window.location.href='/contact';" class="button my-5">Contactez-moi</button>
                    </div>
                    <div class="text-center">
                        <p>Contactez-moi par email en cliquant sur l'enveloppe</p>
                        <a href="mailto:chrisrodriguez@hotmail.be"><img class="icons" src="/assets/img/icons/email.svg" alt="Icône email" style="height: 10rem;"></a>
                    </div>
                    <div class="text-center">
                        <p>Contactez-moi par téléphone</p>
                        <div class="d-flex justify-content-center my-5">
                            <img class="icons" src="/assets/img/icons/téléphone.svg" alt="Icône email" style="height: 5rem;">
                            <p class="mt-3">0470/35.05.87</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
