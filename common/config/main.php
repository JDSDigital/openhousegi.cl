<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'es_ES',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'formatter' => [
            'dateFormat' => 'dd MMM Y',
            'datetimeFormat' => 'dd MMM Y - H:mm:ss',
            'decimalSeparator' => ',',
            'thousandSeparator' => '.',
            'currencyCode' => 'CLP',
        ],
    ],
];
