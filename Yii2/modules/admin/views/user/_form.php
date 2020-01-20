<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form pt-5">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'user_phone')->textInput(['maxlength' => true]) ?>
   
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Отменить',['index', 'id' => $model->id], ['class' => 'btn btn-secondary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'reset btn btn-dark']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
