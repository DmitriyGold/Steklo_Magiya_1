<?php

use yii\helpers\Html;

$this->title = 'Матированное стекло';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Матированное</span> <span class="text-uppercase text-blue ">стекло:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'DSCF9642-min',
            "1" => 'DSCF9643-min',
            "2" => 'DSCF9644-min',
            "3" => 'DSCF9645-min',
            "4" => 'DSCF9646-min',
            "5" => 'DSCF9647-min',
            "6" => 'DSCF9648-min',
            "7" => 'DSCF9650-min',
            "8" => 'DSCF9653-min',
            "9" => 'DSCF9654-min',
            "10" => 'DSCF9655-min',
            "11" => 'DSCF9656-min',
            "12" => 'DSCF9657-min',
            "13" => 'DSCF9668-min',
            "14" => 'DSCF9669-min',
            "15" => 'DSCF9670-min',
            "16" => 'DSCF9671-min',
            "17" => 'DSCF9672-min',
            "18" => 'DSCF9673-min',
            "19" => 'DSCF9674-min',
            "20" => 'DSCF9675-min',
            "21" => 'DSCF9676-min',
            "22" => 'DSCF9677-min',
            "23" => 'DSCF9678-min',
            "24" => 'DSCF9681-min',
            "25" => 'DSCF9683-min',
            "26" => 'DSCF9685-min',
            "27" => 'DSCF9690-min',
            "28" => 'DSCF9691-min',
            "29" => 'DSCF9692-min',
            "30" => 'DSCF9697-min',
            "31" => 'DSCF9698-min',
            "32" => 'DSCF9699-min',
            "33" => 'DSCF9705-min'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/glass/3/" . $value . ".JPG";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'матированное стекло']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>