<?php

return [
    /*
     * Start transaction
     *
     * rLocale : le choix de la langue. fr ou en
     *
     * rOnly : Ceci est optionnel. Si vous souhaitez que votre API n’affiche que certains opérateurs,
     * vous pouvez préciser ces opérateurs ici. 1=MTN, 2=Orange, 3=Express Union, 5=Visa via UBA,
     * 10=Dohone, 14= Visa via Wari,15=Wari card,16=VISA/MASTERCARD, 17=YUP.
     */
    'start' => [
        'rH' => 'RW216B12442304739091400',
        'rDvs' => 'XAF',
        'source' => env('APP_NAME'),
        'logo' => 'assets/images/logo.png',
        'endPage' => env('APP_URL'),
        'notifyPage' => env('APP_URL'),
        'cancelPage' => env('APP_URL'),
        'cmd' => 'start',
        'rLocale' => 'fr',
        'rOnly' => '1, 2, 3, 17',
    ],

    'payout' => [
        'rHash' => '42BE330B440D5B9ED24D5B4084242B',
        'rMerchant' => '696183830',
    ],

    'result' => [
        'rH',
        'rDvs',
        'rI',
        'rMt',
        'idReqDoh',
        'mode',
    ],

    'debug' => false,
    'cashOut' => true,

    'sandbox' => 'https://www.my-dohone.com/dohone-sandbox/pay',
    'transfer-sandbox' => 'https://www.my-dohone.com/dohone-sandbox/transfert',
    'url' => 'https://www.my-dohone.com/dohone/pay',
    'transfer' => 'https://www.my-dohone.com/dohone/transfert',
];
