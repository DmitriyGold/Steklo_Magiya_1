<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список зарегистрированных пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index pt-5">

    <h3 class="mt-5 pt-2"><?= Html::encode($this->title) ?></h3>
     
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            'password',
            'role',
            'auth_key',
            'user_email',
            'user_phone',
            'datetime',
            'ip',
            
            [
                'label' => ' ',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a('ред.', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-info btn-sm mb-1']) .
                            Html::a('дел.', ['delete', 'id' => $model->id], ['class' => 'btn btn-outline-danger btn-sm mb-1']);
                }
            ],
        /*  [
          'class' => 'yii\grid\ActionColumn',
          'template' => '{view} {update}',
          'buttons' => [
          'view' => function ($url) {
          return Html::a('<span class="btn btn-primary"></span>', $url);
          },
          ],
          ], */
        ],
    ]);
    ?>

    <p>
        <?= Html::a('Новый пользователь', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
