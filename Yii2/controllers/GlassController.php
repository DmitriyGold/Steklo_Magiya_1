<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of GlassController
 *
 * @author Наталья
 */
class GlassController extends AppController{
    //put your code here
    
    // полированное стекло
        public function actionGlass1() {
        return $this->render('glass1');
    }
    
    // рифленое стекло
            public function actionGlass2() {
        return $this->render('glass2');
    }
    
    
    // матированное стекло
            public function actionGlass3() {
        return $this->render('glass3');
    }
    
    // декоративное зеркало
            public function actionGlass4() {
        return $this->render('glass4');
    }
        // зеркальное полотно
            public function actionGlass5() {
        return $this->render('glass5');
    }
}
