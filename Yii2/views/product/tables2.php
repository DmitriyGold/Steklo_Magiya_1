<?php

use yii\helpers\Html;

$this->title = 'Стеклянные ТВ тумбы';
?>

<div class="text-center">

    <!--Стеклянные ТВ тумбы-->
    <br>
    <h2><strong><span class="text-uppercase">Стеклянные</span> <span class="text-uppercase text-blue ">ТВ тумбы:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'a11',
            "1" => 'a12',
            "2" => 'a13',
            "3" => 'a14',
            "4" => 'a15',
            "6" => 'a17',
            "7" => 'a18',
            "8" => 'a19',
            "9" => 'a2',
            "10" => 'a23',
            "11" => 'a24',
            "12" => 'a3',
            "13" => 'a4',
            "14" => 'a5',
            "15" => 'a6',
            "16" => 'a7',
            "17" => 'a8',
            "18" => 'a9',
            "19" => 'b12',
            "20" => 'b14',
            "21" => 'b2',
            "22" => 'b3',
            "23" => 'b4',
            "24" => 'b5',
            "25" => 'b6',
            "26" => 'b7',
            "27" => 'b8',
            "28" => 'b9'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/tables/2/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'стеклянные ТВ тумбы']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>