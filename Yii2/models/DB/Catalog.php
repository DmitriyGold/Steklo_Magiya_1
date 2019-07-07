<?php

namespace app\models\db;

use yii\db\ActiveRecord;

class Catalog
        extends ActiveRecord {

    public static function tableName() {
        return 'catalog';
    }

}
