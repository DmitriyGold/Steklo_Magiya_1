<?php

use yii\helpers\Html;

$this->title = 'Уф печать на пластике';
?>

<div class="text-center">
    
    <br>
    <h2><strong><span class="text-uppercase">УФ печать на</span> <span class="text-uppercase text-blue ">пластике:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        
$array = [
    "0" => 'b2',
    "1" => 'b3',
    "2" => 'b4',
    "3" => 'b5',
    "4" => 'b6',
    "5" => 'b7',
    "6" => 'c3',
    "7" => 'c4',
    "8" => 'c5',
    "9" => 'c6',
    "10" => 'c7'
];
        
        foreach ($array as
                $value) {

            $value = "@web/images/ufprint/2/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'уф печать на пластике']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>