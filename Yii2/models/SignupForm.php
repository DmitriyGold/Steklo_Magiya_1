<?php

namespace app\models;

use yii\base\Model;

/**
 * Description of SignupForm
 *
 * @author Дмитрий
 */
class SignupForm extends Model {

    //put your code here

    public $username;
    public $password;

    public function rules() {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле!'],
            // валидацую username на уникальность делает класс User :
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Этот логин уже занят'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }

}
