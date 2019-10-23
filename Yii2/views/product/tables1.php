<?php

use yii\helpers\Html;

$this->title = 'Стеклянные столики';
?>

<div class="text-center">

    <!--Стеклянные столики-->
    <br>
    <h2><strong><span class="text-uppercase">Стеклянные</span> <span class="text-uppercase text-blue ">столики:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'a2',
            "1" => 'c2',
            "2" => 'c22',
            "3" => 'c23',
            "4" => 'c24',
            "5" => 'c25',
            "6" => 'c26',
            "7" => 'c28',
            "8" => 'c29',
            "9" => 'c3',
            "10" => 'c32',
            "11" => 'c33',
            "12" => 'c34',
            "13" => 'c35',
            "14" => 'c36',
            "15" => 'c37',
            "16" => 'c38',
            "17" => 'c4',
            "18" => 'c42',
            "19" => 'c44',
            "20" => 'c45',
            "21" => 'c46',
            "22" => 'c47',
            "23" => 'c5',
            "24" => 'c6',
            "25" => 'c7',
            "26" => 'c8',
            "27" => 'c9',
            "28" => 'd22',
            "29" => 'd23',
            "30" => 'd24',
            "31" => 'd25',
            "32" => 'd26',
            "33" => 'd27',
            "34" => 'd29',
            "35" => 'd5',
            "36" => 'd6',
            "37" => 'd7',
            "38" => 'd8',
            "39" => 'd9',
            "40" => 'e22',
            "41" => 'e25',
            "42" => 'e26',
            "43" => 'e6',
            "44" => 'e8',
            "45" => 'f11',
            "46" => 'f12',
            "47" => 'f13',
            "48" => 'f14',
            "49" => 'f15',
            "50" => 'f16',
            "51" => 'f17',
            "52" => 'f19',
            "53" => 'f22',
            "54" => 'f23',
            "55" => 'f3',
            "56" => 'f4',
            "57" => 'f5',
            "58" => 'f6',
            "59" => 'f7',
            "60" => 'f8',
            "61" => 'f9',
            "62" => 'z22',
            "63" => 'z23',
            "64" => 'z24',
            "65" => 'z4',
            "66" => 'z5',
            "67" => 'z6',
            "68" => 'z7',
            "69" => 'z8',
            "70" => 'z9'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/tables/1/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'стеклянные столики']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>