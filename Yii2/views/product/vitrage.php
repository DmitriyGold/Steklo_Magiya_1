<?php

use yii\helpers\Html;

$this->title = 'Витражи';
?>

<div class="text-center">

    <!--Декоративные зеркала-->
    <br>
    <h2><strong><span class="text-uppercase">Витражи</span> <span class="text-uppercase text-blue ">:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'a2',
            "2" => 'a4',
            "3" => 'b2',
            "4" => 'b3',
            "5" => 'b4',
            "7" => 'c2',
            "8" => 'c3',
            "9" => 'c4',
            "10" => 'c5',
            "11" => 'c7',
            "13" => 'c9',
            "15" => 'd12',
            "16" => 'd13',
            "17" => 'd14',
            "18" => 'd15',
            "19" => 'd16',
            "20" => 'd17',
            "21" => 'd18',
            "22" => 'd19',
            "23" => 'd2',
            "24" => 'd21',
            "25" => 'd22',
            "26" => 'd23',
            "27" => 'd3',
            "28" => 'd4',
            "29" => 'd5',
            "30" => 'd6',
            "31" => 'd8',
            "32" => 'd9',
            "33" => 'f12',
            "34" => 'f13',
            "35" => 'f14',
            "36" => 'f15',
            "37" => 'f16',
            "38" => 'f17',
            "39" => 'f18',
            "40" => 'f19',
            "41" => 'f2',
            "42" => 'f20',
            "43" => 'f21',
            "44" => 'f22',
            "45" => 'f23',
            "46" => 'f24',
            "47" => 'f25',
            "48" => 'f26',
            "49" => 'f27',
            "50" => 'f28',
            "51" => 'f29',
            "52" => 'f3',
            "53" => 'f4',
            "54" => 'f6',
            "55" => 'f7',
            "56" => 'f8',
            "57" => 'f9',
            "58" => 'g1',
            "59" => 'g11',
            "60" => 'g12',
            "61" => 'g13',
            "62" => 'g14',
            "63" => 'g15',
            "64" => 'g16',
            "65" => 'g17',
            "66" => 'g18',
            "67" => 'g21',
            "68" => 'g23',
            "69" => 'g24',
            "70" => 'g25',
            "71" => 'g26',
            "72" => 'g27',
            "73" => 'g28',
            "74" => 'g29',
            "75" => 'g3',
            "76" => 'g32',
            "77" => 'g33',
            "78" => 'g34',
            "79" => 'g4',
            "80" => 'g5',
            "81" => 'g6',
            "82" => 'g7',
            "83" => 'g8',
            "84" => 'g9',
            "85" => 'z22',
            "86" => 'z23',
            "87" => 'z24',
            "88" => 'z25',
            "89" => 'z26',
            "90" => 'z27',
            "91" => 'z28',
            "92" => 'z3',
            "93" => 'z4'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/vitrage/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Витражи']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>