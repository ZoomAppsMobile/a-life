<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.07.2018
 * Time: 8:50
 */

namespace backend\controllers;

use iutbay\yii2kcfinder\KCFinder;
use yii\web\Controller;

class BackendController extends Controller
{
    public function behaviors()
    {
//        $kcfOptions = array_merge(KCFinder::$kcfDefaultOptions, [
//            'disabled'=>false,
//            'denyZipDownload' => true,
//            'denyUpdateCheck' => true,
//            'denyExtensionRename' => true,
//            'theme' => 'default',
//            'access' =>[
//                'files' =>[
//                    'upload' => true,
//                    'delete' => true,
//                    'copy' => false,
//                    'move' => true,
//                    'rename' => true,
//                ],
//                'dirs' =>[
//                    'create' => true,
//                    'delete' => true,
//                    'rename' => true,
//                ],
//            ],
//            'types'=>[
//                'files' => [
//                    'type' => '',
//                ],
//                'images' => [
//                    'type' => '*img',
//                ],
//            ],
//            'thumbsDir' => '.thumbs',
//            'thumbWidth' => 100,
//            'thumbHeight' => 100,
//        ]);
//
//        \Yii::$app->session->set('KCFINDER', $kcfOptions);

        $array = explode(", ", ROLE_USER);
        return [
            'access' => [
                'class' => 'yii\filters\AccessControl',
                'except' => ['login', 'error', 'logout'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => $array,
                    ],
                ],
            ],
        ];
    }
}