<?php

use yii\helpers\Html;

$this->title = 'Душевые кабинки и двери';
?>

<div class="text-center">

    <!--Декоративные зеркала-->
    <br>
    <h2><strong><span class="text-uppercase">Душевые кабинки и </span> <span class="text-uppercase text-blue ">двери из стекла:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'b3',
            "1" => 'b5',
            "2" => 'b6',
            "3" => 'b7',
            "4" => 'b8',
            "5" => 'b9',
            "6" => 'c2',
            "7" => 'c3',
            "8" => 'c4',
            "9" => 'c5',
            "10" => 'c6',
            "11" => 'c7',
            "12" => 'c88',
            "13" => 'd2',
            "14" => 'd22',
            "15" => 'd23',
            "16" => 'd24',
            "17" => 'd25',
            "18" => 'd26',
            "19" => 'd3',
            "21" => 'd5',
            "22" => 'd6',
            "23" => 'd7',
            "24" => 'd8',
            "25" => 'd9',
            "26" => 'f11',
            "27" => 'f14',
            "28" => 'f15',
            "29" => 'f16',
            "30" => 'f17',
            "31" => 'f18',
            "32" => 'f2',
            "33" => 'f4',
            "34" => 'f5',
            "35" => 'f6',
            "36" => 'f7',
            "37" => 'f8',
            "38" => 'f9',
            "39" => 'r11',
            "40" => 'r2',
            "41" => 'r3',
            "42" => 'r4',
            "43" => 'r5',
            "44" => 'r6',
            "45" => 'r7',
            "46" => 'r8',
            "47" => 'r9'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/shower_stall/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Стеклянные двери, кабинки']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>