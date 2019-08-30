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

    public function actionSkinali() {
        return $this->render('skinali');
    }

    public function actionDecor() {
        return $this->render('decor');
    }

    /* рисунки */

    public function actionDrawings() {
        return $this->render('drawings');
    }

    /* перегородки */

    public function actionPartitions() {
        return $this->render('partitions');
    }

    public function actionVitrage() {
        return $this->render('vitrage');
    }

    /* Душевые кабинки и двери из стекла*/

    public function actionShower_stall() {
        return $this->render('shower_stall');
    }

    public function actionFurniture() {
        return $this->render('furniture');
    }
    
        public function actionTables() {
        return $this->render('tables');
    }
    
          public function actionTables1() {
        return $this->render('tables1');
    }
    
            public function actionTables2() {
        return $this->render('tables2');
    }
    
            public function actionTables3() {
        return $this->render('tables3');
    }
    

}
