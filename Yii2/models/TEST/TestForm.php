<?php

namespace app\models\test;

use yii\base\Model;

class TestForm extends Model {

    //put your code here

    public $username;
    public $password;
    public $text;

        public function rules() {
        return[
            [['username', 'password'], 'required', 'message' => 'Заполните поле!'],
            [['text'], 'trim'],
        ];
    }
    
    
    public function attributeLabels() {
        return[
            'username' => 'Имя',
            'password' => 'Пароль',
            'text' => 'Текст',
        ];
    }



}
