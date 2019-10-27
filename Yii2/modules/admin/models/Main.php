<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $name_img
 * @property string $content_title
 * @property string $content
 * @property string $keywords
 * @property string $description
 */
class Main extends \yii\db\ActiveRecord {

    public $image;
    public $gallery;

    public function behaviors() {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName() {
        return 'main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'name_img', 'content_title', 'content', 'keywords', 'description'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
//            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'parent_id' => 'Родитель',
            'name' => 'Наименование',
            'name_img' => 'Имя картинки',
            'content_title' => 'Заголовок',
            'content' => 'Текст',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'image' => 'фото',            
        ];
    }

    public function upload() {
        if ($this->validate()) {
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            
            $this->image->saveAs($path);         
            return true;            
        } else {
        return false;    
        }
    }
    
    
}
