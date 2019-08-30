<?php

use yii\helpers\Html;

$this->title = 'Уф печать на стекле';
?>

<div class="text-center">
    
    <br>
    <h2><strong><span class="text-uppercase">УФ печать на</span> <span class="text-uppercase text-blue ">стекле:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
             
$array = [
"0" => 'b14',
    "1" => 'b16',
    "2" => 'b19',
    "3" => 'b2',
    "4" => 'b22',
    "5" => 'b3',
    "6" => 'b6',
    "7" => 'b7',
    "8" => 'b8',
    "9" => 'b9',
    "10" => 'c11',
    "11" => 'c12',
    "12" => 'c13',
    "13" => 'c14',
    "14" => 'c15',
    "15" => 'c2',
    "16" => 'c3',
    "17" => 'c4',
    "18" => 'c5',
    "19" => 'c6',
    "20" => 'c7',
    "21" => 'c8',
    "22" => 'c9',
    "23" => 'd2',
    "24" => 'd23',
    "25" => 'd24',
    "26" => 'd25',
    "27" => 'd26',
    "28" => 'd27',
    "29" => 'd28',
    "30" => 'd29',
    "31" => 'd3',
    "32" => 'd31',
    "33" => 'd32',
    "34" => 'd33',
    "35" => 'd34',
    "36" => 'd35',
    "37" => 'd36',
    "38" => 'd37',
    "39" => 'd38',
    "40" => 'd39',
    "41" => 'd4',
    "42" => 'd5',
    "43" => 'd6',
    "44" => 'd7',
    "45" => 'd8',
    "46" => 'd9',
    "47" => 'f2',
    "48" => 'f23',
    "49" => 'f24',
    "50" => 'f3',
    "51" => 'f4',
    "52" => 'f5',
    "53" => 'f6',
    "54" => 'f7',
    "55" => 'f8',
    "56" => 'f9',
];

       foreach ($array as
                $value) {

            $value = "@web/images/ufprint/1/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'уф печать на стекле']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>