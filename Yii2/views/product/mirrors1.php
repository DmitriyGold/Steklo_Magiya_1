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
        foreach (array_splice(scandir("../web/images/product/mirrors"),
                2) as
                $value) {

            $value = "@web/images/product/mirrors/" . $value;
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
