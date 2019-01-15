<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use Yii;

/**
 * Description of TestController
 *
 * @author Родители
 */
class TestController extends AppController{
    //put your code here
    
public function actionMy1(){
  //  return 'Моя тестовая страница';
    
    debug(yii::$app);
    
}
}