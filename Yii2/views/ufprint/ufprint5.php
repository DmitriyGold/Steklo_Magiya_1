<?php

use yii\helpers\Html;

$this->title = 'Уф печать на холсте';
?>

<div class="text-center">
    
    <br>
    <h2><strong><span class="text-uppercase">УФ печать на</span> <span class="text-uppercase text-blue ">холсте:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
$array = [
    "0" => 'b12',
    "1" => 'b13',
    "2" => 'b14',
    "3" => 'b15',
    "4" => 'b2',
    "5" => 'b3',
    "6" => 'b4',
    "7" => 'b5',
    "8" => 'b6',
    "9" => 'b7',
    "10" => 'b8',
    "11" => 'b9'
];

foreach ($array as 
                $value) {

            $value = "@web/images/ufprint/5/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'уф печать на холсте']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>