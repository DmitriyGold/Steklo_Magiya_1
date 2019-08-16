<?php

use yii\helpers\Html;

$this->title = 'Каталоги';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Каталог пескоструйных рисунков</span> <span class="text-uppercase text-blue ">:</span></strong></h1>
        <br>
        <br>


        <div class="row">

            <?php
            foreach (array_splice(scandir("../web/images/catalog/pesok"),
                    2) as
                    $value) {

                $value = "@web/images/catalog/pesok/" . $value;
                ?>

                <div class="col-12 col-lg-6">
                    <div class="small-box-1">

                        <?php
                        echo Html::img($value,
                                ['alt' => 'Пескоструйный рисунок']);
                        ?>
                    </div>               
                </div>

                <?php
            }
            ?>

        </div>

        <div id="skinali"  class="row"></div>

        <br> 
        <div class="line-yellow"></div>  
        <br> 

        <br>
        <br>
        <h2 ><strong><span class="text-uppercase">Фотопечать для кухонных фартуков (скинали) </span> <span class="text-uppercase text-blue ">:</span></strong></h2>
        <br>
        <br>


        <div class="row">

            <?php
            foreach (array_splice(scandir("../web/images/catalog/skinali"),
                    2) as
                    $value) {

                $value = "@web/images/catalog/skinali/" . $value;
                ?>

                <div class="col-12 col-lg-6">
                    <div class="small-box-1">

                        <?php
                        echo Html::img($value,
                                ['alt' => 'Пескоструйный рисунок']);
                        ?>
                    </div>               
                </div>

                <?php
            }
            ?>
        </div>


</div>



