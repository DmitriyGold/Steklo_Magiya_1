<?php

namespace app\models\db;

use yii\db\ActiveRecord;

class Gallery
        extends ActiveRecord {

    public static function tableName() {
        return 'gallery';
    }

}
