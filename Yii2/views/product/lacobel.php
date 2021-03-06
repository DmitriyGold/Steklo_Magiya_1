<?php

use yii\helpers\Html;

$this->title = 'Зеркала';
?>

<div class="text-center">

    <br>
    <h2><strong><span class="text-uppercase">Лакобель</span> <span class="text-uppercase text-blue ">:</span></strong></h2>
    <br>
    <h4>Окрашенное стекло с лакированным покрытием.</h4>
    <p>Область применения: облицовка стен, дверцы шкафов, декор и другие элементы мебели.</p>
    <a href="#lacobel-ral"> Каталог цветов RAL.</a>

    <br>
    <div class="line-yellow"></div>        
    <br>

    <div class="row">
        <?php
        $array = [
            "0" => 'b1',
            "1" => 'b11',
            "2" => 'b12',
            "3" => 'b13',
            "4" => 'b3',
            "5" => 'b4',
            "6" => 'b6',
            "7" => 'b8',
            "8" => 'b9',
            "9" => 'd2',
            "10" => 'd3',
            "11" => 'd5',
            "12" => 'd6',
            "13" => 'd7',
            "14" => 'd8',
            "15" => 'd9',
            "16" => 'e1',
            "17" => 'e11',
            "18" => 'e2',
            "19" => 'e3',
            "20" => 'e5',
            "21" => 'e7',
            "22" => 'e8',
            "23" => 'e9',
            "24" => 'g1',
            "25" => 'g2',
            "26" => 'g3',
            "27" => 'g4',
            "28" => 'g5',
            "29" => 'g6',
            "30" => 'g7',
            "31" => 'g8',
            "32" => 'g9',
            "33" => 'h1',
            "34" => 'h11',
            "35" => 'h12',
            "36" => 'h13',
            "37" => 'h14',
            "38" => 'h16',
            "39" => 'h17',
            "40" => 'h18',
            "41" => 'h19',
            "42" => 'h21',
            "43" => 'h22',
            "44" => 'h23',
            "45" => 'h24',
            "46" => 'h25',
            "47" => 'h26',
            "48" => 'h27',
            "49" => 'h28',
            "50" => 'h29',
            "51" => 'h3',
            "52" => 'h31',
            "53" => 'h33',
            "54" => 'h34',
            "55" => 'h35',
            "56" => 'h4',
            "57" => 'h5',
            "58" => 'h6',
            "59" => 'h7',
            "60" => 'h8',
            "61" => 'h9',
            "62" => 'p1',
            "63" => 'p11',
            "64" => 'p12',
            "65" => 'p14',
            "66" => 'p15',
            "67" => 'p16',
            "68" => 'p17',
            "69" => 'p18',
            "70" => 'p19',
            "71" => 'p2',
            "72" => 'p3',
            "73" => 'p4',
            "74" => 'p6',
            "75" => 'p7',
            "76" => 'p8',
            "77" => 'p9',
            "78" => 'z1',
            "79" => 'z11',
            "80" => 'z12',
            "81" => 'z13',
            "82" => 'z14',
            "83" => 'z15',
            "84" => 'z16',
            "85" => 'z17',
            "86" => 'z18',
            "87" => 'z19',
            "88" => 'z2',
            "89" => 'z21',
            "90" => 'z25',
            "91" => 'z26',
            "92" => 'z3',
            "93" => 'z4',
            "94" => 'z5',
            "95" => 'z55',
            "96" => 'z7',
            "97" => 'z8',
        ];

        foreach ($array as
                $value) {
            $value = "@web/images/product/lacobel/" . $value . ".jpg";
            ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

    <?php
    echo Html::img($value,
            ['alt' => 'Лакобель']);
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

    <h4>Более 20 цветов в наличии и под заказ по каталогу RAL</h4>  

    <div class="row">
<?php
$array = [
    "0" => '0128',
    "1" => '0327',
    "2" => '0337',
    "3" => '0627',
    "4" => '0667',
    "5" => '1013',
    "6" => '1014',
    "7" => '1015',
    "8" => '1164',
    "9" => '1236',
    "10" => '1435',
    "11" => '1586',
    "12" => '1603',
    "13" => '1604',
    "14" => '2001',
    "15" => '3004',
    "16" => '4006',
    "17" => '5002',
    "18" => '7035',
    "19" => '8017',
    "20" => '9003',
    "21" => '9005',
    "22" => '9006',
    "23" => '9007',
    "24" => '9010'
];

foreach ($array as
        $value) {
    $mame_file = str_replace("',",
            "",
            $value);
    $value = "@web/images/product/lacobel-ral/" . $value . ".jpg";
    ?>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="small-box-1">

    <?php
    echo Html::img($value,
            ['alt' => 'Лакобель']);
    echo $mame_file
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