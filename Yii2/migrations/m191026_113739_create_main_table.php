<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main}}`.
 */
class m191026_113739_create_main_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%main}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(), // поле родителя, по умолчанию 0 - главный родитель
            'name' => $this->string(), // наименование продукции, услуги, ...
            'img' => $this->string(), // наименование(местоположение файла) картинки, для родителя картинка паралакса
            'description' => $this->string(), // описание
            'keywords' => $this->string(), // ключевые слова
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%main}}');
    }
}
