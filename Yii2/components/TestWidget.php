<?php

// пример виджета
namespace app\components;

use yii\base\Widget;

class TestWidget extends Widget {

    public $color;

    public function init() { // устанавливает свойства виджета, нормализация виджета
        if ($this->color === null) {
            $this->color = 'green';
        }
    }

    public function run() { // возвращает готовый код виджета
       // return '<span style="color: ' . $this->color . ' ">Мой виджет!</span>'; //Вариант без Views
        return $this->render('test', ['color' => $this->color]);
        
    }

}
