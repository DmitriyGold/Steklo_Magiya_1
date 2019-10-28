<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Main', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a('Update', ['update', 'id' => 1], ['class' => 'btn btn-primary']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'parent_id',
            'name',
            'name_img',
            'content_title',
            'content',
            //'keywords',
            //'description',
            [
                'class' => 'yii\grid\ActionColumn',
                'visibleButtons' => [
                    'view' => function ($model, $key, $index) {
                        return true;
                    }
                ]
            ],
            [
                'header' => '',
                'format' => 'raw',
                'value' => function($model, $key, $index, $column) {
                    return Html::a('', ['view', 'id' => $model->id], ['class' => 'btn btn-success fa fa-eye']);
                }
            ],
            [
                'header' => '',
                'format' => 'raw',
                'value' => function($model, $key, $index, $column) {
                    return Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-success fa fa-pencil']);
                }
            ],
            [
                'header' => '',
                'format' => 'raw',
                'value' => function($model, $key, $index, $column) {
                    return Html::a('', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger fa fa-trash',
                                'data' => [
                                    'confirm' => 'Удалить запись?',
                                    'method' => 'post',
                                ],
                    ]);
                }
            ],
        ],
    ]);
    ?>
</div>
