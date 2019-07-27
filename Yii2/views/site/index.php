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
                    <h4><strong>Объемная УФ печать на различных поверхностях</strong></h4>
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

    <!--
        <div>
    <?php echo"1" ?>
    <?php debug($gallery_arr) ?>
    <?php echo"2" ?>
        </div>  
    -->


    <div class="jumbotron">
        <h1  class="d-none d-lg-block">Изготовление стеклоизделий и зеркал на заказ.</h1>
        <h2  class="display-6 d-lg-none">Изготовление стеклоизделий и зеркал на заказ.</h2>        
        <hr class="my-4">
        <p class="lead">Наша компания — стеклообрабатывающее предприятие полного цикла, имеющее многолетний опыт в индивидуальном производстве и декорировании 
            стеклянных и зеркальных изделий.</p> 
    </div>

    <div class="body-content">

        <div class="row">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>Продукция</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>  
        </div>

        <div class="row">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>Услуги</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>            

        <div class="row">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>УФ-печать</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>

        <div class="row">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>Каталоги</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>

    </div>
</div>
