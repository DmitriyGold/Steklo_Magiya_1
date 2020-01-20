<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190926_014805_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'role' => $this->string(), // роль пользователя: admin, user
            'auth_key' => $this->string(), // поля для запоминания авторизации. Чтобы авторизовываться по кукам
            'user_email' => $this->string(),
            'user_phone' => $this->string(),
            'datetime' => $this->dateTime(),
            'ip' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
