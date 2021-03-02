<?php
/**
 * Created by PhpStorm.
 * User: David-KALLA
 * Date: 02/03/2021
 * Time: 17:01
 */
return [

    /*
     * Token message code
     */
    'token' => ['TOKEN_EXPIRED' => -1,
        'BLACK_LISTED_TOKEN' => -2,
        'INVALID_TOKEN' => -3,
        'NO_TOKEN' => -4,
        'USER_NOT_FOUND' => -5,
    ],

    /*
     * Request error message code
     */
    'WRONG_JSON_FORMAT' => -6,

    /*
    * Common request message code
    */
    'request' => [
        'SUCCESS' => 1000,
        'FAILURE' => -1001,
        'VALIDATION_ERROR' => -1002,
        'EXPIRED' => -1003,
        'DATA_EXIST' => -1004,
        'NOT_AUTHORIZED' => -1005,
    ],
    /*
     * Authentication message code
     */
    'auth' => ['ACCOUNT_NOT_VERIFY' => -1100,
        'WRONG_USERNAME' => -1101,
        'WRONG_PASSWORD' => -1102,
        'WRONG_CREDENTIALS' => -1103,
        'ACCOUNT_VERIFIED' => 1104,
        'NOT_EXISTS' => -1105,
    ],
];
