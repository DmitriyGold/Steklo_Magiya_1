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
            $array = [
                "0" => 'catalog_1_1',
                "1" => 'catalog_1_10',
                "2" => 'catalog_1_11',
                "3" => 'catalog_1_12',
                "4" => 'catalog_1_13',
                "5" => 'catalog_1_14',
                "6" => 'catalog_1_15',
                "7" => 'catalog_1_16',
                "8" => 'catalog_1_17',
                "9" => 'catalog_1_18',
                "10" => 'catalog_1_19',
                "11" => 'catalog_1_2',
                "12" => 'catalog_1_20',
                "13" => 'catalog_1_21',
                "14" => 'catalog_1_22',
                "15" => 'catalog_1_23',
                "16" => 'catalog_1_24',
                "17" => 'catalog_1_25',
                "18" => 'catalog_1_26',
                "19" => 'catalog_1_27',
                "20" => 'catalog_1_28',
                "21" => 'catalog_1_29',
                "22" => 'catalog_1_3',
                "23" => 'catalog_1_30',
                "24" => 'catalog_1_31',
                "25" => 'catalog_1_32',
                "26" => 'catalog_1_33',
                "27" => 'catalog_1_34',
                "28" => 'catalog_1_35',
                "29" => 'catalog_1_36',
                "30" => 'catalog_1_37',
                "31" => 'catalog_1_38',
                "32" => 'catalog_1_39',
                "33" => 'catalog_1_4',
                "34" => 'catalog_1_40',
                "35" => 'catalog_1_41',
                "36" => 'catalog_1_42',
                "37" => 'catalog_1_43',
                "38" => 'catalog_1_44',
                "39" => 'catalog_1_45',
                "40" => 'catalog_1_46',
                "41" => 'catalog_1_47',
                "42" => 'catalog_1_48',
                "43" => 'catalog_1_49',
                "44" => 'catalog_1_5',
                "45" => 'catalog_1_50',
                "46" => 'catalog_1_51',
                "47" => 'catalog_1_52',
                "48" => 'catalog_1_53',
                "49" => 'catalog_1_54',
                "50" => 'catalog_1_55',
                "51" => 'catalog_1_56',
                "52" => 'catalog_1_57',
                "53" => 'catalog_1_58',
                "54" => 'catalog_1_59',
                "55" => 'catalog_1_6',
                "56" => 'catalog_1_60',
                "57" => 'catalog_1_61',
                "58" => 'catalog_1_7',
                "59" => 'catalog_1_8',
                "60" => 'catalog_1_9'
            ];

            foreach ($array as
                    $value) {

                $value = "@web/images/catalog/pesok/" . $value . ".jpg";
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
            $array = [
                "0" => '1',
                "1" => '10',
                "2" => '11',
                "3" => '12',
                "4" => '13',
                "5" => '14',
                "6" => '15',
                "7" => '17',
                "8" => '18',
                "9" => '19',
                "10" => '2',
                "11" => '20',
                "12" => '3',
                "13" => '4',
                "14" => '5',
                "15" => '6',
                "16" => '7',
                "17" => '8',
                "18" => '9'
            ];

            foreach ($array as
                    $value) {

                $value = "@web/images/catalog/skinali/" . $value . ".jpg";
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



