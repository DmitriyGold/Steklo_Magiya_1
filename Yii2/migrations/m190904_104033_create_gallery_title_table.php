<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery_title}}`.
 */
class m190904_104033_create_gallery_title_table
        extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%gallery_title}}',
                [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(), // название продукта
            'content' => $this->string(255), // описание
            'name_img' => $this->string(100)->notNull(), // название файла картинки
            'path_img' => $this->string(255)->notNull(), // путь к файлу картинки
            'type' => $this->integer(), // тип заголовка (продукция, уф печать, зеркала...)
            'del' => $this->boolean(), // признак удаления
            'date_time_del' => $this->dateTime(), // время удаления
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%gallery_title}}');
    }

}
