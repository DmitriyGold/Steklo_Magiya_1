<?php

namespace app\models;

use Yii;
use yii\imagine\Image;
use yii\helpers\FileHelper;

class CatalogWat {

    // функция наносит водяной знак на все картинки в каталоге temp\from
    // и записывает их в каталог temp\to
    public function SaveWatermark() {

        $dir = 'temp\from';
        $files = FileHelper::findFiles($dir);

        foreach ($files as $value) {

            $name_img = substr_replace($value, '', 0, 10); // названия файла картинки

            $image = Yii::getAlias('@webroot/temp/from/' . $name_img);

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
                    ->save(Yii::getAlias('@webroot/temp/to/' . $name_img . '-watermark.jpg'));
        }
    }

}
