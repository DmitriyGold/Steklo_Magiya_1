<?php

use yii\helpers\Html;

$this->title = 'Зеркальное полотно';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Зеркальное влагостойкое</span> <span class="text-uppercase text-blue ">полотно:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => '1',
            "1" => '2',
            "2" => '3',
            "3" => '4',
            "4" => '5',
            "5" => '6'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/glass/5/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'зеркальное полотно']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>