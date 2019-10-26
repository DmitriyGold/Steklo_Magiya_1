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
            'parent_id' => $this->integer()->defaultValue(0)->notNull(), // поле родителя, по умолчанию 0 - главный родитель
            'name' => $this->string()->notNull()->unique(), // наименование продукции, услуги, ...
            'name_img' => $this->string(), // наименование картинки, для родителя картинка паралакса
            'content_title' => $this->string(), // заглавие описания
            'content' => $this->string(), // описание
            'keywords' => $this->string(), // ключевые слова
            'description' => $this->string(), // описание  
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
