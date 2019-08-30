<?php

use yii\helpers\Html;

$this->title = 'Стеклянные перегородки';
?>

<div class="text-center">
    
        <!--Стеклянные перегородки-->
    <br>
    <h2><strong><span class="text-uppercase">Стеклянные </span> <span class="text-uppercase text-blue ">перегородки:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [
                "0" => 'L_11',
    "1" => 'L_12',
    "2" => 'L_5',
    "3" => 'L_6',
    "4" => 'L_8',
    "5" => 'L_9',
    "6" => 'Pn_11',
    "7" => 'Pn_14',
    "8" => 'Pn_18',
    "9" => 'Pn_2',
    "10" => 'Pn_21',
    "11" => 'Pn_22',
    "12" => 'Pn_23',
    "13" => 'Pn_28',
    "14" => 'Pn_29',
    "15" => 'Pn_3',
    "16" => 'Pn_6',
    "17" => 'Pn_7',
    "18" => 'Pn_9',
    "19" => 'a4',
    "20" => 'b2',
    "21" => 'b3',
    "22" => 'b4',
    "23" => 'k2',
    "24" => 'k3',
    "25" => 'w12',
    "26" => 'w2',
    "27" => 'w3',
    "28" => 'w5',
    "29" => 'w6',
    "30" => 'w7',
    "31" => 'w8',
    "32" => 'w9',
    "33" => 'z2',
    "34" => 'z3',
    "35" => 'z4'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/partitions/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Стеклянные перегородки']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>