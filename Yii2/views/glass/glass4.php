<?php

use yii\helpers\Html;

$this->title = 'Дероративное зеркало';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Декоративное </span> <span class="text-uppercase text-blue ">зеркало:</span></strong></h2>
    <br>

    <br>
    <div class="line-yellow"></div>  
    <br>

    <div class="row">
        <?php
        $array = [ "0" => '1',
            "1" => '11',
            "2" => '12',
            "3" => '13',
            "4" => '14',
            "5" => '15',
            "6" => '16',
            "7" => '17',
            "8" => '18',
            "9" => '19',
            "10" => '2',
            "11" => '22',
            "12" => '25',
            "13" => '26',
            "14" => '27',
            "15" => '3',
            "16" => '4',
            "17" => '5',
            "18" => '6',
            "19" => '7',
            "20" => '8',
            "21" => '9'
        ];

        foreach ($array as
                $value) {

            $value = "@web/images/glass/4/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

                    <?php
                    echo Html::img($value,
                            ['alt' => 'декоративное зеркало']);
                    ?>
                </div>               
            </div>

            <?php
        }
        ?>
    </div>
</div>