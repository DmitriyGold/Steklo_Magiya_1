<?php

use yii\helpers\Html;

$this->title = 'Декор';
?>

<div class="text-center">

    <!--Элементы декора-->
    <br>
    <h2><strong><span class="text-uppercase">Элементы </span> <span class="text-uppercase text-blue ">декора:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [ 
            "0" => 'a12',
            "1" => 'a5',
            "2" => 'a6',
            "3" => 'a7',
            "4" => 'a8',
            "5" => 'a9',
            "6" => 'b2',
            "7" => 'b3',
            "8" => 'b4',
            "9" => 'b5',
            "10" => 'b6',
            "11" => 'b7',
            "12" => 'f7',
            "13" => 'z2',
            "14" => 'z3'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/product/decor/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Элементы декора']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>