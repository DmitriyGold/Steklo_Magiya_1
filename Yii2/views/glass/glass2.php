<?php

use yii\helpers\Html;

$this->title = 'Рифленое стекло';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Рифленое</span> <span class="text-uppercase text-blue ">стекло:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'DSCF9631-min',
            "1" => 'DSCF9640-min',
            "2" => 'DSCF9641-min',
            "3" => 'DSCF9649-min',
            "4" => 'DSCF9651-min',
            "5" => 'DSCF9652-min',
            "6" => 'DSCF9658-min',
            "7" => 'DSCF9659-min',
            "8" => 'DSCF9660-min',
            "9" => 'DSCF9661-min',
            "10" => 'DSCF9662-min',
            "11" => 'DSCF9663-min',
            "12" => 'DSCF9664-min',
            "13" => 'DSCF9665-min',
            "14" => 'DSCF9666-min',
            "15" => 'DSCF9667-min',
            "16" => 'DSCF9679-min',
            "17" => 'DSCF9680-min',
            "18" => 'DSCF9682-min',
            "19" => 'DSCF9684-min',
            "20" => 'DSCF9686-min',
            "21" => 'DSCF9687-min',
            "22" => 'DSCF9688-min',
            "23" => 'DSCF9689-min',
            "24" => 'DSCF9693-min',
            "25" => 'DSCF9694-min',
            "26" => 'DSCF9695-min',
            "27" => 'DSCF9696-min',
            "28" => 'DSCF9700-min',
            "29" => 'DSCF9703-min',
            "30" => 'DSCF9704-min'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/glass/2/" . $value . ".JPG";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'рифленое стекло']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>