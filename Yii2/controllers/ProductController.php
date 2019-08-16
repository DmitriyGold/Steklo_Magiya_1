<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of ProductController
 *
 * @author Наталья
 */
class ProductController
        extends AppController {
    /* Секция навигации "Продукция" */

    public function actionMirrors() {
        return $this->render('mirrors');
    }

    public function actionMirrors1() {
        return $this->render('mirrors1');
    }

    public function actionMirrors2() {
        return $this->render('mirrors2');
    }

    public function actionMirrors3() {
        return $this->render('mirrors3');
    }

    public function actionMirrors4() {
        return $this->render('mirrors4');
    }

    public function actionMirrors5() {
        return $this->render('mirrors5');
    }

    public function actionLacobel() {
        return $this->render('lacobel');
    }

    public function actionSkinally() {
        return $this->render('skinali');
    }

    public function actionDecor() {
        return $this->render('decor');
    }

    /* рисунки */

    public function actionDrawings() {
        return $this->render('drawings');
    }

    /* мебель */

    public function actionAppointment() {
        return $this->render('appointment');
    }

    /* перегородки */

    public function actionPartitions() {
        return $this->render('partitions');
    }

    public function actionVitrage() {
        return $this->render('vitrage');
    }

    /* Душевые кабинки */

    public function actionStained() {
        return $this->render('stained');
    }

    public function actionFurniture() {
        return $this->render('furniture');
    }

}
