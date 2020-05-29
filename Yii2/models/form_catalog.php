<?php

namespace app\models;

use Yii;
use yii\imagine\Image;

class form_catalog {

    public function SaveWatermark($name_img) {

        $image = Yii::getAlias('@webroot/temp/1/' . $name_img);
        $watermark = Yii::getAlias('@webroot/images/watermark.png'); // 1000x130

        $size = getimagesize($image); // Определяем размер картинки
        $imageWidth = ceil($size[0] / 2); // Ширина картинки /2
        // сдвигаем координаты водяного знака в центр
        $x = $imageWidth - 500;
        if ($x < 0) {
            $x = 0;
        }

        $imageHeight = ceil($size[1] / 2); // Высота картинки /2
        // сдвигаем координаты водяного знака в центр
        $y = $imageHeight - 65;
        if ($y < 0) {
            $y = 0;
        }

        $watermarkPositionLeft = $x; // Новая позиция watermark по оси X (горизонтально)
        $watermarkPositionTop = $y;  // Новая позиция watermark по оси Y (вертикально)
        Image::watermark($image, $watermark, [$watermarkPositionLeft, $watermarkPositionTop])
                ->save(Yii::getAlias('@webroot/images/new/' . $name_img . '-watermark.jpg'));
                               
        
    }

}
