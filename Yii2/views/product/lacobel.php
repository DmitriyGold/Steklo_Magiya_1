<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Лакобель</span> <span class="text-uppercase text-blue ">:</span></strong></h2>
    <br>
    <h4>Окрашенное стекло с лакированным покрытием.</h4>
    <p>Область применения: облицовка стен, дверцы шкафов, декор и другие элементы мебели.</p>
    <a href="#lacobel-ral"> Каталог цветов RAL.</a>

    <br>
    <div class="line-yellow"></div>        
    <br>

    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/lacobel"),
                2) as
                $value) {
            $value = "@web/images/product/lacobel/" . $value;
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Лакобель']);
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

    <h4>Более 20 цветов в наличии и под заказ по каталогу RAL</h4>  

    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/lacobel-ral"),
                2) as
                $value) {
            $mame_file = str_replace(".jpg",
                    "",
                    $value);
            $value = "@web/images/product/lacobel-ral/" . $value;
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Лакобель']);
                    echo $mame_file
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>

    <br>
    <div class="line-yellow"></div> 
    <br>

</div> 