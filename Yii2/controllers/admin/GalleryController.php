<?php

/*
  Добавляем титульные картинки с описаниями на страницы сайта
 */

namespace app\controllers\admin;

use app\controllers\AppController;
use app\models\db\Gallery_title;
use app\models\db\Gallery;

class GalleryController
        extends AppController {

    public function actionIndex() {
        $gallery_title = Gallery_title:: find()->all();
        return $this->render('index', compact('gallery_title'));
    }

}
