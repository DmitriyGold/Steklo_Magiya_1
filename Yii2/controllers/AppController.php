<?php

//Главный контроллер. Содержит общие для всего приложения функции

namespace app\controllers;

use \yii\web\Controller;


class AppController extends Controller {
    
    public function debug($arr){
        echo '<pre>' . print_r($arr,TRUE) . '</pre>';  
    }
    
}
