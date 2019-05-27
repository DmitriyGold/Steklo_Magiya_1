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


            <header class="header fixed-top">

                <div class="container-fluid header-top">
                    <div class="container text-uppercase">                           

                        <div class="row block_3">
                            <div class="col-lg-3 align-self-lg-end  block_3">
                                <a class="navbar-brand mb-0" href="<?= Yii::$app->homeUrl ?>">С т е к л о М а г и я</a> 
                                <p><small>новокузнецкая стекольная компания</small></p>
                            </div>

                            <div class="col-lg-3 text-center align-self-lg-center  block_3">                                                                                             <a href="#">адреса офисов продаж</a>
                            </div>  

                            <div class="col-lg-4 text-center align-self-lg-center  block_3">                                                                                          <p class="h5"><strong>+7(384-3) 36-07-26</strong></p>
                                <p class="h5"><strong>+7 901-615-04-17</strong></p>
                                <p class="h6"><strong>E-mail:</strong> <a href="#">nsk-steklo@mail.ru</a></p>

                            </div>                              

                            <div class="col-lg-2 text-right align-self-lg-center block_3">
                                <button type="button" class="btn header-btn">Заказать звонок</button>
                            </div>    
                        </div>                       
                    </div>
                </div>

                <div class="container-fluid header-bottom">                        

                    <div class="container">
                        <nav  class="col-md-12 pt-0">
                            <ul class="navbar-nav flex-sm-row justify-content-sm-around align-items-center">
                                <li class="nav-item active px-2"><a href="/site/index" class="nav-link">Главная</a></li>
                                <li class="nav-item px-2"><a href="/site/products" class="nav-link">Продукция</a></li>
                                <li class="nav-item px-2"><a href="/site/services" class="nav-link">Услуги</a></li>
                                <li class="nav-item px-2"><a href="/site/uf-print" class="nav-link">УФ печать</a></li>
                                <li class="nav-item px-2"><a href="/site/catalogs" class="nav-link">Каталоги</a></li>
                                <li class="nav-item px-2"><a href="/site/contact" class="nav-link">Контакты</a></li>
                            </ul>  
                        </nav>
                        <div class="d-md-none d-flex flex-row justify-content-center border-top border-dark">                             
                            <div class="px-3 py-2"><img src="/images/img-icons/vk.svg" alt="" width="35px"></div>
                            <div class="px-3 py-2"><img src="/images/img-icons/instagram_72.svg" alt="" width="35px"></div>                                                               </div>  
                    </div>



                </div>


            </header>

            <div class="container mt-5">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <button type="button" class="btn header-btn">Заказать звонок</button>
                <p><a class="btn btn-lg btn-success" href="http://www.nsk-steklo.ru">Перейти на сайт стекольной компании</a></p>
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
    </body>
</html>
<?php $this->endPage() ?>
