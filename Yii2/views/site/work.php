<?php 
use yii\helpers\Url;
?>

<div class="row">
    <p>11</p><br>
    
       
    <br>
    <p>22</p>
</div>


<?php foreach ($files as $value) { ?>

    <div class="row">
        <div class="col-4">
            <?= $value ?>
        </div>
        <div class="col-4">
            <?= $value[5] ?>   // номер папки равен номеру подкатегории                     
        </div>
        <div  class="col-4">
            <?= substr($value, 7); ?>   // название файла                     
        </div>
    </div>

<?php } ?>