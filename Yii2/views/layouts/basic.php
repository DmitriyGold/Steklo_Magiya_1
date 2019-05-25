<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- Подключаем bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">


            <header class="header">

                <div class="container-fluid  block_4 fixed-top">

                    <div class="container pt-0 text-uppercase">
                        <div class="row  header-top">
                            <div class="col col-lg-4 block_2">
                                <a href="#">Заказать звонок</a>
                            </div>

                            <div class="col col-lg-4 block_3">
                                <a href="#">ЭЛЕКТРОНКА</a>
                            </div>  

                            <div class="col col-lg-4 block_2">
                                <img src="/web/images/img-icons/vk.png" alt="">
                                <img src="/web/images/img-icons/vk2.png" alt="">
                                <img src="/web/images/img-icons/instagram.png" alt="">
                                <img src="/web/images/img-icons/instagram2.png" alt="">
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col col-lg-4 block_2 align-self-center">
                                <a class="navbar-brand mb-0" href="<?= Yii::$app->homeUrl ?>">С т е к л о М а г и я</a> 
                                <p><small>ИЗГОТОВЛЕНИЕ СТЕКЛОИЗДЕЛИЙ НА ЗАКАЗ</small></p>
                            </div>

                            <div class="col col-lg-4 block_3 text-center align-self-center">
                                <img src="" alt="">
                                г. Новокузнецк <br>
                                <a href="#">АДРЕСА ОФИСОВ ПРОДАЖ</a>
                            </div>  

                            <div class="col col-lg-4 block_2 text-right align-self-center">
                                <h4>+7(384-3) 36-07-26</h4>
                                <h4>+7 901-615-04-17</h4>
                                <a href="#">Заказать звонок</a>
                            </div>    
                        </div>

                        <div class="row header-menu">
                            <nav  class="col-lg-9 block_1">
                                <ul class="navbar-nav  flex-row top-right">
                                    <li class="nav-item active px-2"><a href="/site/index" class="nav-link">Главная</a></li>
                                    <li class="nav-item px-2"><a href="/site/products" class="nav-link">Продукция</a></li>
                                    <li class="nav-item px-2"><a href="/site/services" class="nav-link">Услуги</a></li>
                                    <li class="nav-item px-2"><a href="/site/uf-print" class="nav-link">УФ печать</a></li>
                                    <li class="nav-item px-2"><a href="/site/catalogs" class="nav-link">Каталоги</a></li>
                                    <li class="nav-item px-2"><a href="/site/contact" class="nav-link">Контакты</a></li>
                                </ul>  
                            </nav>
                            <div class="col-lg-3 block_2">
                                <h5>ВЫЗВАТЬ ЗАМЕРЩИКА</h5>                            
                            </div>  
                        </div>

                    </div>

                </div>
                <img src="/web/images/img-icons/instagram2.png" alt="">

            </header>




            <div class="container mt-5">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
                <img src="/web/images/img-icons/instagram2.png" alt="" width="120px" height="120px">
                <img src="/web/images/111.jpg" alt="">
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; ООО "Стекломагия", 2011 - <?= date('Y') ?></p>

              <!--  <p class="pull-right"><?= Yii::powered() ?></p>  -->
            </div>
        </footer> 

        <?php $this->endBody() ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
    </body>
</html>
<?php $this->endPage() ?>
