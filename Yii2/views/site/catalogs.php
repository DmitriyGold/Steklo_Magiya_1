<?php

use yii\helpers\Html;

$this->title = 'Каталоги';
?>

<div class="text-center">
    <div>
        </br>
        <h2><strong><span class="text-uppercase">Каталог пескоструйных рисунков</span> <span class="text-uppercase text-blue ">:</span></strong></h1>
            </br>
            </br>
    </div>

    <div class="row">

        <?= Html::img('@web/images/catalog/pesok/catalog_1_1.jpg',
                ['alt' => 'Наш логотип'])
        ?>



        <?php
        //      print_r(array_splice(scandir("../web/images/catalog/pesok"),2));

        foreach (array_splice(scandir("../web/images/catalog/skinali"),
                2) as
                $value) {

            //Html::img("@web/images/catalog/pesok/$value", ['alt' => 'Наш логотип'])  
            //    $asss =  '@web/images/catalog/pesok/'.$value;     

            $value2 = "/images/catalog/skinali/" . $value;
            echo "<img src='$value2'>";
        }
        ?>



        <div class="line-yellow">
        </div>    



    </div>
