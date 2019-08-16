<?php

use yii\helpers\Html;

$this->title = 'Кухонные фартуки';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Скинали</span> <span class="text-uppercase text-blue ">:</span></strong></h2>
    <br>
    <h4>Кухонные фартуки из стекла.</h4>

    <p>Изделия надежно защищают участок стены между столешницей и подвесными шкафами.</p>

    <p>На обратную сторону полотна наносится полноцветная УФ печать.
        Она характеризуется повышенной стойкостью к выцветанию. Цвета картинки будут яркими и сочными много лет.
        Для увеличения прочности и термостойкости применяется закалка стекла.</p>

    <p>Еще больше идей и вариантов оформления для кухонных фартуков смотрите<a href="/site/catalogs#skinali"> в нашем КАТАЛОГЕ</a></p>        

    <br>
    <div class="line-yellow"></div>       
    <br>

    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/skinali"),
                2) as
                $value) {
            $value = "@web/images/product/skinali/" . $value;
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Скинали']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
        <div id="lacobel-ral"></div>
    </div>

    <br>
    <div  class="line-yellow"></div> 
    <br>

</div> 