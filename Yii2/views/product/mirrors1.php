<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Зеркала-->
    <br>
    <h2><strong><span class="text-uppercase">Зеркала</span> <span class="text-uppercase text-blue ">:</span></strong></h2>
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
    "9" => 'b2',
    "10" => 'b3',
    "11" => 'b4',
    "12" => 'b5',
    "13" => 'b6',
    "14" => 'b7',
    "15" => 'b8',
    "16" => 'b9',
    "17" => 'c',
    "18" => 'c2',
    "19" => 'c6',
    "20" => 'c7',
    "21" => 'c8',
    "22" => 'c9',
    "23" => 'd2',
    "24" => 'd4',
    "25" => 'd6',
    "26" => 'd7',
    "27" => 'd8',
    "28" => 'd9',
    "29" => 'e2',
    "30" => 'e3',
    "31" => 'e4',
    "32" => 'e6',
    "33" => 'f1',
    "34" => 'f2',
    "35" => 'f3',
    "36" => 'f4',
    "37" => 'f5',
    "38" => 'f6',
    "39" => 'f7',
    "40" => 'f8',
    "41" => 'f9',
    "42" => 'g1',
    "43" => 'g3',
    "44" => 'g4',
    "45" => 'g5',
    "46" => 'g6',
    "47" => 'g7',
    "48" => 'g8',
    "49" => 'g9',
    "50" => 'g91',
    "51" => 'g92',
    "52" => 'z1',
    "53" => 'z2',
    "54" => 'z3',
    "55" => 'z4',
    "56" => 'z5',
    "57" => 'z6',
    "58" => 'zz1',
    "59" => 'zz2',
    "60" => 'zz3',
    "61" => 'zz4',
    "62" => 'zz5',
    "63" => 'zz7',
    "64" => 'zz9'
];
                
        foreach  ($array as
                $value) {

            $value = "@web/images/product/mirrors/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Зеркала']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>
