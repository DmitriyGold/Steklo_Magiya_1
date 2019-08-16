<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">
    
        <!--Декоративные зеркала-->
    <br>
    <h2><strong><span class="text-uppercase">Декоративные</span> <span class="text-uppercase text-blue ">зеркала:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>    
    <br>
    <img src="../../web/images/product/decor/decor_17.jpg" alt=""/>
    <div class="row">
        <?php
        foreach (array_splice(scandir("../web/images/product/decor"),
                2) as
                $value) {

            $value = "@web/images/product/decor/" . $value;
            ?>

            <div class="col-12 col-lg-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'Декоративные зеркала']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>
