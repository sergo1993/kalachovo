<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute'=>'site/index',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'skype_sergo199323',
            'baseUrl'=> '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ''=>'site/index',
                'aerial-photo'=>'site/aerial_photo',
                'informaciya'=>'site/informaciya',
                'information'=>'site/information',
                'raspolojenie'=>'site/raspolojenie',
                'kupit'=>'site/kupit',
                'photo'=>'site/photo',
                'reklama'=>'site/reklama',
                'srochnaya-prodazha'=>'site/srochnaya_prodazha',
                'srochnyi-vykup'=>'site/srochnyi_vykup',
                'uchastok-91'=>'site/uchastok_91',
                'uchastok-116'=>'site/uchastok_116',
                'uchastok-172'=>'site/uchastok_172',
				'uchastok-175'=>'site/uchastok_175',
                'uchastok-200'=>'site/uchastok_200',
                'uchastok-301'=>'site/uchastok_301',
                'uchastok-408'=>'site/uchastok_408',
                'uchastok-481'=>'site/uchastok_481',
                'uchastok-482'=>'site/uchastok_482',
                'uchastok-500'=>'site/uchastok_500',
                'uchastok-505'=>'site/uchastok_505',
                'uchastok-522'=>'site/uchastok_522',
                'uchastok-533'=>'site/uchastok_533',
                'uchastok-533-2'=>'site/uchastok_533_2',
                'uchastok-558'=>'site/uchastok_558',
                'uchastok-615'=>'site/uchastok_615',
                'uchastok-619'=>'site/uchastok_619',
                'uchastok-625'=>'site/uchastok_625',
                'uchastok-629'=>'site/uchastok_629',
                'uchastok-630'=>'site/uchastok_630',
                'uchastok-632'=>'site/uchastok_632',
                'uchastok-644'=>'site/uchastok_644',
                'uchastok-685'=>'site/uchastok_685',
                'uchastok-765'=>'site/uchastok_765',
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
//    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
//        // uncomment the following to add your IP if you are not connecting from localhost.
//        //'allowedIPs' => ['127.0.0.1', '::1'],
//    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
