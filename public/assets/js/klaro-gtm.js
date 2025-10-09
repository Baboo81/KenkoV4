// Configuration Klaro :

var klaroConfig = {
                version: 1,
                elementID: 'klaro',
                groups: [
                    {
                        name: 'analytics',
                        title: 'Statistiques',
                        description: 'Google Tag Manager et Google Analytics pour analyser l’usage du site.',
                        purposes: ['analytics'],
                        required: false,
                        cookies: [],
                    }
                ],
                services: [
                    {
                        name: 'google-tag-manager',
                        title: 'Google Tag Manager',
                        purposes: ['analytics'],
                        cookies: [/^_ga/, /^_gid/],
                        optOut: false,
                        required: false,
                        callback: function(consent, service) {
                                if (consent) {
                                    (function(w,d,s,l,i){
                                        w[l]=w[l]||[];w[l].push({'gtm.start':
                                        new Date().getTime(),event:'gtm.js'});
                                        var f=d.getElementsByTagName(s)[0],
                                            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
                                        j.async=true;
                                        j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                                        f.parentNode.insertBefore(j,f);
                                    })(window,document,'script','dataLayer','GTM-PXTDTSDJ');
                                }
                            }
                    }
                ]
            };
