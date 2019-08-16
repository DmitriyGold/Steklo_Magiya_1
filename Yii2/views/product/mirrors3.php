<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Зеркальное панно-->
    <br>
    <h2><strong><span class="text-uppercase">Зеркальное</span> <span class="text-uppercase text-blue ">панно:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
        <br>

    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/panno"),
                2) as
                $value) {

            $value = "@web/images/product/panno/" . $value;
            ?>

            <div class="col-12 col-lg-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Зеркальное панно']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>
