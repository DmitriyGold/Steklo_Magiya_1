<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле!'],
            [['username', 'password', 'role', 'auth_key', 'user_email', 'user_phone', 'datetime', 'ip'], 'string', 'max' => 255],
            [['datetime'], 'datetime'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'role' => 'Права',
            'auth_key' => 'Куки',
            'user_email' => 'E Mail',
            'user_phone' => 'Телефон',
            'datetime' => 'Дата время записи', 
            'ip' => 'IP адрес пользователя'
        ];
    }
}
