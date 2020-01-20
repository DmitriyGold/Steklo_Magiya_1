<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */

$this->title = 'Создать нового пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="user-create pt-5">

    <h3 class="py-4"><?= Html::encode($this->title) ?></h3>
   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
