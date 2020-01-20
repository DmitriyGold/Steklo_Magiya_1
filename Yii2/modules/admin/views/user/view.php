<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view pt-5">

    <h3 class="py-4"><?= Html::encode($this->title) ?></h3>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
           // 'password',
            'role',
           // 'auth_key',
            'user_email',
            'user_phone',
            'datetime',
            'ip',
        ],
    ])
    ?>

    <p>
        <?= Html::a('К списку', ['index'], ['class' => 'btn btn-success']) ?>
    </p>


</div>
