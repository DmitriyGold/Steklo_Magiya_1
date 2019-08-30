<?php

use yii\helpers\Html;

$this->title = 'Фурнитура для стекла';
?>

<div class="text-center">

    <!--Зеркала-->
    <br>
    <h2><strong><span class="text-uppercase">Фурнитура для </span> <span class="text-uppercase text-blue ">крепления стекла:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [ "0" => 'F_10',
            "1" => 'F_11',
            "2" => 'F_12',
            "3" => 'F_13',
            "5" => 'F_19',
            "6" => 'F_2',
            "7" => 'F_20',
            "8" => 'F_22',
            "10" => 'F_24',
            "11" => 'F_3',
            "12" => 'F_4',
            "13" => 'F_5',
            "14" => 'F_7',
            "15" => 'F_8',
            "17" => 'z3',
            "18" => 'z4',
            "19" => 'z5',
            "21" => 'z7'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/furnitura/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Фурнитура для стекла']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>