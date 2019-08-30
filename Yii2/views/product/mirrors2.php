<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Декоративные зеркала-->
    <br>
    <h2><strong><span class="text-uppercase">Декоративные</span> <span class="text-uppercase text-blue ">зеркала:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>

    <div class="row">
        <?php
$array = [
    "0" => 'decor_11',
    "1" => 'decor_12',
    "2" => 'decor_13',
    "3" => 'decor_14',
    "4" => 'decor_15',
    "5" => 'decor_16',
    "6" => 'decor_17',
    "7" => 'decor_19',
    "8" => 'decor_20',
    "9" => 'decor_21',
    "10" => 'decor_22',
    "11" => 'decor_23',
    "12" => 'decor_7',
    "13" => 'decor_8',
    "14" => 'decor_9',
    "15" => 'decor_9_1',
    "16" => 'decor_a2',
    "17" => 'decor_a5',
    "18" => 'decor_a6',
    "19" => 'decor_a7',
    "20" => 'decor_a8'
];
        
        
        foreach ($array as
                $value) {

            $value = "@web/images/product/decor-mirrors/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Декоративные зеркала']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>
