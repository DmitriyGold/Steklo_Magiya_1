<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<h2 class="mt-5">    Форма регистрации нового пользователя   </h2>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
    <div>
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
