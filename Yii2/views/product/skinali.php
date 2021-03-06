<?php

use yii\helpers\Html;

$this->title = 'Кухонные фартуки';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Скинали</span> <span class="text-uppercase text-blue ">:</span></strong></h2>
    <br>
    <h4>Кухонные фартуки из стекла.</h4>

    <p>Изделия надежно защищают участок стены между столешницей и подвесными шкафами.</p>

    <p>На обратную сторону полотна наносится полноцветная УФ печать.
        Она характеризуется повышенной стойкостью к выцветанию. Цвета картинки будут яркими и сочными много лет.
        Для увеличения прочности и термостойкости применяется закалка стекла.</p>

    <p>Еще больше идей и вариантов оформления для кухонных фартуков смотрите<a href="/site/catalogs#skinali"> в нашем КАТАЛОГЕ</a></p>        

    <br>
    <div class="line-yellow"></div>       
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'b1',
            "1" => 'b2',
            "2" => 'b3',
            "3" => 'b4',
            "4" => 'b5',
            "5" => 'b6',
            "6" => 'b7',
            "7" => 'b8',
            "8" => 'b9',
            "9" => 'c1',
            "10" => 'c2',
            "11" => 'c3',
            "12" => 'c4',
            "13" => 'c5',
            "14" => 'c6',
            "15" => 'c7',
            "16" => 'c8',
            "17" => 'c9',
            "18" => 'd1',
            "19" => 'd11',
            "20" => 'd12',
            "21" => 'd13',
            "22" => 'd14',
            "23" => 'd15',
            "24" => 'd16',
            "25" => 'd17',
            "26" => 'd18',
            "27" => 'd19',
            "28" => 'd2',
            "29" => 'd21',
            "30" => 'd22',
            "31" => 'd23',
            "32" => 'd24',
            "33" => 'd25',
            "34" => 'd26',
            "35" => 'd27',
            "36" => 'd28',
            "37" => 'd29',
            "38" => 'd3',
            "39" => 'd32',
            "40" => 'd4',
            "41" => 'd5',
            "42" => 'd6',
            "43" => 'd7',
            "44" => 'd8',
            "45" => 'd9',
            "46" => 'k1',
            "47" => 'k11',
            "48" => 'k12',
            "49" => 'k13',
            "50" => 'k14',
            "51" => 'k3',
            "52" => 'k4',
            "53" => 'k5',
            "54" => 'k6',
            "55" => 'k7',
            "56" => 'k8',
            "57" => 'k9'
        ];

        foreach ($array as
                $value) {
            $value = "@web/images/product/skinali/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

    <?php
    echo Html::img($value,
            ['alt' => 'Скинали']);
    ?>
                </div>               
            </div>

    <?php
}
?>
        <div id="lacobel-ral"></div>
    </div>

    <br>
    <div  class="line-yellow"></div> 
    <br>

</div> 