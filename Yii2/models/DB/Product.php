<?php

namespace app\models\db;

use \yii\db\ActiveRecord;

class product
        extends ActiveRecord {

    public static function tableName() {
        return 'product';
    }

}
