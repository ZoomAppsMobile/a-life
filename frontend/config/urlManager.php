<?php

/** @var array $params */

return [
    'class' => 'yii\web\UrlManager',
//    'hostInfo' => 'http://azialife',
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'cache' => false,
    'rules' => [
        'login'=>'site/login',
        'logins'=>'site/logins',
        'lang/<url:\w+>'=>'lang/index',

        'governance' => 'governance',
        /////Меню верхнее
        'about-company'=>'menu/about-the-company',
        'about-company/<url:[\w-]+>'=>'menu/about-the-company-child',
        'about-company/<url:[\w-]+>/<url1:[\w-]+>'=>'menu/about-the-company-child-child',
//        'private-clients'=>'menu/private-clients',
        'clientsupport/faq'=>'faq',
        'clientsupport'=>'menu/client-support',
        'clientsupport/useful-tips' => 'clientsupport/useful-tips',
        'clientsupport/action-insured-event' => 'clientsupport/action-insured-event',
        'clientsupport/<url:[\w-]+>'=>'menu/client-support-child',
//        'business'=>'menu/business',
        'business/<url:[\w-]+>'=>'business/detail',
        'private-clients'=>'private',
        'private-clients/<url:[\w-]+>'=>'private/detail',
        'online-payment'=>'menu/online-payment',

        'subject/otzivi' => 'subject/otzivi',
        'subject/strahovoy-sluchay' => 'subject/strahovoy-sluchay',
        /////Меню в футере
        'media-information' => 'menu/media-information',
        'careers' => 'vacancy',
        'careers/<id:\d+>'=>'vacancy/detail',
        'careers/our-vacancies'=>'vacancy/our-vacancies',

        'news' => 'news',
        'news/<url:[\w-]+>' => 'news/onenews',

        'questions-and-answers' => 'menu/questions-and-answers',
        'company-details' => 'menu/company-details',
        'financial-indicators' => 'menu/financial-indicators',
        'offer-book' => 'menu/offer-book',
        'special-offers' => 'menu/special-offers',

        'calculator' => 'calculator',
        'calculator/kazina-response' => 'calculator/kazina-response',
        'calculator/osrns-response' => 'calculator/osrns-response',
        'calculator/bolashak-response' => 'calculator/bolashak-response',
        'calculator/mst-response' => 'calculator/mst-response',
        'calculator/country-type' => 'calculator/country-type',
        'calculator/<url:[\w-]+>' => 'calculator/child',
        'calculator/<url:[\w-]+>/<url1:[\w-]+>' => 'calculator/step2',

        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    ],
];