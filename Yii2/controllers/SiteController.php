<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\db\Gallery;
use app\models\db\Catalog;
use app\models\db\Product;

class SiteController
        extends AppController {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {


        /** работа с моделью галереи */
//        $gallery_arr = Gallery::find()-> all();
//        $gallery_arr = Gallery::find()->orderBy([[id]=>SORT_ASC])->all();
//        $gallery_arr = Gallery::find()->asArray()->all();
//        $gallery_arr = Gallery::find()->where(['id' => 2])->all();
//        $gallery_arr = Gallery::find()->where('category = 3')->all();    //limet(2)
//        $galleri_all = Gallery::find()->where(['like', 'path_img', 'ler'])->all();
//        $query = 'SELECT * FROM `gallery` WHERE `id`=2';
//        $gallery_arr = Gallery::findBySql($query)->all();
        //      $gallery_arr =  Gallery::findOne(3); // берется первичный ключ

        $gallery_arr = Gallery::find()
                ->asArray()
                ->all();


        return $this->render('index',
                        compact(gallery_arr));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login',
                        [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact',
                        [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    /* Секция навигации "Продукция" */
    public function actionProducts() {

        return $this->render('products',
                        compact(product_arr));
    }

  
    /*Секция навигации "Услуги" */
    public function actionServices() {
        return $this->render('services');
    }

    public function actionUfPrint() {
        return $this->render('uf_print');
    }

    public function actionCatalogs() {
        return $this->render('catalogs');
    }

}
