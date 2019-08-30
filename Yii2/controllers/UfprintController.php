<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of UfprintController
 *
 * @author Наталья
 */
class UfprintController
        extends AppController {

    //put your code here

    public function actionUfprint1() {
        return $this->render('ufprint1');
    }

    public function actionUfprint2() {
        return $this->render('ufprint2');
    }

    public function actionUfprint3() {
        return $this->render('ufprint3');
    }

    public function actionUfprint4() {
        return $this->render('ufprint4');
    }

    public function actionUfprint5() {
        return $this->render('ufprint5') ;
    }

}
