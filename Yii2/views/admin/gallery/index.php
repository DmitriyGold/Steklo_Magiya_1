<?php

use yii\bootstrap\ActiveForm;
?>
<h2 class="text-center">Административная часть.</h2>
<h3 class="text-center">Создание титульных картинок галерей с их описаниями. Довавление картинок в галерею.</h3>



<div class="row">

<?php debug($gallery_title); ?>



<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($gallery_title,
            'title') ?>
    <?= $form->field($gallery_title,
            'content') ?>
    <?= $form->field($gallery_title,
            'type') ?> 

    <div class="form-group">
<?= Html::submitButton('Отправить',
        ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>