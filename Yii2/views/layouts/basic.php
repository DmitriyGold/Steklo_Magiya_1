<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'Стекломагия_нов',
                'brandUrl' => Yii::$app->homeUrl,
                'renderInnerContainer' => true,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'Продукция', 'url' => ['/site/products']],
                    ['label' => 'Услуги', 'url' => ['/site/services']],
                    ['label' => 'УФ печать', 'url' => ['/site/uf-print']],
                    ['label' => 'Каталоги', 'url' => ['/site/catalogs']],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
         ['label' => 'Контакты2', 'url' => ['/site/contact']],                    
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; ООО "Стекломагия", 2011 - <?= date('Y') ?></p>

              <!--  <p class="pull-right"><?= Yii::powered() ?></p>  -->
            </div>
        </footer> 

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
