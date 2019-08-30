<?php

use yii\helpers\Html;

$this->title = 'Уф печать на плитке';
?>

<div class="text-center">
    
    <br>
    <h2><strong><span class="text-uppercase">УФ печать на</span> <span class="text-uppercase text-blue ">плитке:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
$array = [
    "0" => 'b3',
    "1" => 'b4',
    "2" => 'b5',
    "3" => 'b7',
    "4" => 'b8',
    "5" => 'b9',
    "6" => 'c3',
    "7" => 'c4',
    "8" => 'c5',
    "9" => 'c6',
    "10" => 'c7',
    "11" => 'c8',
    "12" => 'z3'
];
        
        foreach ($array as
                $value) {

            $value = "@web/images/ufprint/3/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'уф печать на плитке']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>