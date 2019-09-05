<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery}}`.
 */
class m190904_120325_create_gallery_table
        extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%gallery}}',
                [
            'id' => $this->primaryKey(),
            'title_id' => $this->integer()->notNull(), // поле для связи с таблицей gallery_title
            'name_img' => $this->string(100)->notNull(), // название файла картинки
            'path_img' => $this->string(255)->notNull(), // путь к файлу картинки
            'del' => $this->boolean(), // признак удаления
            'date_time_del' => $this->dateTime(), // время удаления
        ]);

        // создадим index для колонки `title_id`
        $this->createIndex(
                'idx-title_id',
                'gallery',
                'title_id'
        );

        // add foreign key for table `gallery_title`
        $this->addForeignKey(
                'fk-title_id',
                'gallery',
                'title_id',
                'gallery_title',
                'id',
                'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        // drops foreign key for table `gallery_title`
        $this->dropForeignKey(
                'fk-title_id',
                'gallery'
        );

        // drops index for column `title_id`
        $this->dropIndex(
                'idx-title_id',
                'gallery'
        );

        $this->dropTable('{{%gallery}}');
    }

}
