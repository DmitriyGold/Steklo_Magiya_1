<?php

namespace app\modules\admin;

use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module {

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init() {
        parent::init();

// custom initialization code goes here
    }

    public function behaviors() {
        return [
            'acces' => ['class' => AccessControl::className(), // указываем, какой класс отвечает за фильтр контроля доступа
                'rules' => [
                    [
                        'allow' => true, // разрешаем ВСЕ
                        'roles' => ['@'], // для этой роли
                        'matchCallback' => function ($rule, $action) {
                            if (\yii::$app->user->identity->role !== 'admin') {
                                return \yii::$app->getResponse()->redirect('/');
                            } else {
                                return true; // true позволяет открыть модуль
                            }
                        }
                    ],
                ],
            ],
        ];
    }

}
