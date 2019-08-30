<?php

use yii\helpers\Html;

$this->title = 'Уф печать на дереве';
?>

<div class="text-center">
    
    <br>
    <h2><strong><span class="text-uppercase">УФ печать на</span> <span class="text-uppercase text-blue ">дереве:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
$array = [
    "0" => 'b2',
    "1" => 'b3',
    "3" => 'b45',
    "4" => 'b6',
    "5" => 'b7',
    "6" => 'b8',
    "7" => 'c2',
    "8" => 'c3',
    "9" => 'c4',
    "10" => 'c5',
    "11" => 'c6',
    "12" => 'c7',
    "13" => 'c8',
    "14" => 'c9',
    "15" => 'z5',
    "16" => 'z6'
];
        
        foreach ($array as
                $value) {

            $value = "@web/images/ufprint/4/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'уф печать на дереве']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>