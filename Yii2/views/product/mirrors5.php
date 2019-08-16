<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Зеркала в багете-->
    <br>
    <h2><strong><span class="text-uppercase">Зеркала в</span> <span class="text-uppercase text-blue ">багете:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>
    
    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/baget"),
                2) as
                $value) {

            $value = "@web/images/product/baget/" . $value;
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Зеркала в багете']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>

    <br>
    <div class="line-yellow"></div>   
    <br>
</div>