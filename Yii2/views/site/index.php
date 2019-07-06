<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = SITE_TITLE;
?>
<div class="site-index">



    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php @web ?>/images/img-mainCarousel/1.jpg" class="d-block w-100" alt="производство">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Резка и обработка стекла и зеркал по Вашим размерам</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/2.jpg" class="d-block w-100" alt="уф печать">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Объемная УФ печать на различных поверхностях:</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/3.jpg" class="d-block w-100" alt="зеркальное панно">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Зеркальное панно</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/4.jpg" class="d-block w-100" alt="кухонные фартуки">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Кухонные фартуки</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/5.jpg" class="d-block w-100" alt="декоративное зеркало">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Декоративное зеркало</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/6.jpg" class="d-block w-100" alt="лакобель">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Лакированное стекло "Лакобель"</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/7.jpg" class="d-block w-100" alt="элементы декора">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Декор в интерьере</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/img-mainCarousel/8.jpg" class="d-block w-100" alt="витражи">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Витражи</strong></h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="jumbotron">
        <h1>Разработка!<small> маленький текст</small></h1>
        <hr class="my-4">
        <p class="lead">Это Ваше первое Yii2 приложение.</p> 
        <p class=display-4">Это Ваше 2 первое Yii2 приложение.</p> 
        <p><a class="btn btn-lg btn-success" href="http://www.nsk-steklo.ru">Перейти на сайт стекольной компании</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-3">
                <h2>Heading1</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default btn-success" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-md-3">
                <h2>Heading2</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-md-2">
                <h2>Heading3</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-md-2">
                <h2>Heading4</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-xs btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>   
            <div class="col-lg-12">
                <h2>Heading5</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-danger  btn-block" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>              
        </div>

    </div>
</div>
