<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Зеркала в багете-->
    <br>
    <h2><strong><span class="text-uppercase">Зеркала в</span> <span class="text-uppercase text-blue ">багете:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>
    
    <div class="row">
        <?php
        
$array = [
    "0" => 'a1',
    "1" => 'a2',
    "2" => 'a3',
    "3" => 'a4',
    "4" => 'a5',
    "5" => 'a6',
    "6" => 'a7',
    "7" => 'a8',
    "8" => 'a9',
    "9" => 'b1',
    "10" => 'b2',
    "11" => 'b3',
    "12" => 'c1',
    "13" => 'c2',
    "14" => 'c3',
    "15" => 'c4',
    "16" => 'c5',
    "17" => 'c6'
];
        
        foreach ($array as
                $value) {

            $value = "@web/images/product/baget/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                           ['alt' => 'Зеркала в багете']);
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