<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property int $title_id
 * @property string $name_img
 * @property string $path_img
 * @property int $del
 * @property string $date_time_del
 *
 * @property GalleryTitle $title
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_id', 'name_img', 'path_img'], 'required'],
            [['title_id', 'del'], 'integer'],
            [['date_time_del'], 'safe'],
            [['name_img'], 'string', 'max' => 100],
            [['path_img'], 'string', 'max' => 255],
            [['title_id'], 'exist', 'skipOnError' => true, 'targetClass' => GalleryTitle::className(), 'targetAttribute' => ['title_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_id' => 'Title ID',
            'name_img' => 'Name Img',
            'path_img' => 'Path Img',
            'del' => 'Del',
            'date_time_del' => 'Date Time Del',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTitle()
    {
        return $this->hasOne(GalleryTitle::className(), ['id' => 'title_id']);
    }
}
