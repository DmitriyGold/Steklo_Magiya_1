<?php

namespace app\components;

use yii\base\Widget;

class TestWidget extends Widget {

    public $color;
    
public function init() {
    
    if ($this->color === null) {
        $this->color = 'red';
    }
    
}

    public function run() {
        return '<span style="color: ' . . ' " >Мой виджет!</span>';
    }

}
