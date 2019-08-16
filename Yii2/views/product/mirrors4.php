<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Зеркала с рисунком-->
    <br>
    <h2><strong><span class="text-uppercase">Зеркала с</span> <span class="text-uppercase text-blue ">рисунком:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>
    
    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/drawings"),
                2) as
                $value) {

            $value = "@web/images/product/drawings/" . $value;
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Зеркала с рисунком']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>