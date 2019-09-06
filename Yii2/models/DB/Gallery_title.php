<?php

namespace app\models\db;

use yii\db\ActiveRecord;

class Gallery_title
        extends ActiveRecord {

    public static function tableName() {
        return 'gallery_title';
    }

}
