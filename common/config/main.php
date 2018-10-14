<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'main-*' => [
                    'class'                 => yii\i18n\DbMessageSource::class,
                    'sourceLanguage'        => 'ru',
                    'forceTranslation'      => false,
                    'enableCaching'         => true,
                    'cachingDuration'       => 60,
                ],
            ],
        ],
    ],
];
