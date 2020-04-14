<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\TestWidget;
use yii\bootstrap4\ActiveForm;

$this->title = SITE_TITLE;
?>

<?php if (Yii::$app->session->hasFlash('message1')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('message1') ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('message2')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('message2') ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password') ?>
<?= $form->field($model, 'text') ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end(); ?>


<div class="site-index">

    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="3"></li>
            <li data-target="#mainCarousel" data-slide-to="4"></li>
            <li data-target="#mainCarousel" data-slide-to="5"></li>
            <li data-target="#mainCarousel" data-slide-to="6"></li>
            <li data-target="#mainCarousel" data-slide-to="7"></li>
        </ol>




        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php @web ?>/images/carousel/1.jpg" class="d-block w-100" alt="производство">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Резка и обработка стекла и зеркал по Вашим размерам</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/2.jpg" class="d-block w-100" alt="уф печать">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Объемная УФ печать на различных поверхностях</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/3.jpg" class="d-block w-100" alt="зеркальное панно">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Зеркальное панно</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/4.jpg" class="d-block w-100" alt="кухонные фартуки">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Кухонные фартуки</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/5.jpg" class="d-block w-100" alt="декоративное зеркало">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Декоративное зеркало</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/6.jpg" class="d-block w-100" alt="лакобель">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Лакированное стекло "Лакобель"</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/7.jpg" class="d-block w-100" alt="элементы декора">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Декор в интерьере</strong></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php @web ?>/images/carousel/8.jpg" class="d-block w-100" alt="витражи">
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
        <h1  class="d-none d-lg-block">Изготовление стеклоизделий и зеркал на заказ.</h1>
        <h2  class="display-6 d-lg-none">Изготовление стеклоизделий и зеркал на заказ.</h2>        
        <hr class="my-4">
        <p class="lead">Наша компания — стеклообрабатывающее предприятие полного цикла, имеющее многолетний опыт в индивидуальном производстве и декорировании 
            стеклянных и зеркальных изделий.</p> 
    </div>

    <div class="body-content">

        <div  class="parallax1"></div>

        <div id="product" class="row"></div>

        <div class="row my-5">

            <div  class="d-none d-md-block line-yellow col-md-3">
            </div>  

            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase \"><strong><span>Продукция</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>


        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/mirrors"> <img src="<?php @web ?>/images/product main/gl1.jpg" alt="зеркала">                                      
                            <div class="card-content">
                                <h3>Зеркала</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/lacobel"> <img src="<?php @web ?>/images/product main/gl2.jpg" alt="Лакобель">                                      
                            <div class="card-content">
                                <h3>Лакобель</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/skinali"> <img src="<?php @web ?>/images/product main/gl3.jpg" alt="Кухонные фартуки">                                      
                            <div class="card-content">
                                <h3>Кухонные фартуки</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/decor"> <img src="<?php @web ?>/images/product main/gl4.jpg" alt="Элементы декора">                                      
                            <div class="card-content">
                                <h3>Элементы декора</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/mirrors2"> <img src="<?php @web ?>/images/product main/gl5.jpg" alt="Декоративные зеркала">                                      
                            <div class="card-content">
                                <h3>Декоративные зеркала</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/tables"> <img src="<?php @web ?>/images/product main/gl6.jpg" alt="Мебель из стекла">                                      
                            <div class="card-content">
                                <h3>Мебель из стекла</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/partitions"> <img src="<?php @web ?>/images/product main/gl7.jpg" alt="Перегородки">                                      
                            <div class="card-content">
                                <h3>Перегородки</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/vitrage"> <img src="<?php @web ?>/images/product main/gl8.jpg" alt="Витражи">                                      
                            <div class="card-content">
                                <h3>Витражи</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/shower_stall"> <img src="<?php @web ?>/images/product main/gl9.jpg" alt="Душевые кабинки">                                      
                            <div class="card-content">
                                <h3>Душевые кабинки</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/product/furniture"> <img src="<?php @web ?>/images/product main/gl10.jpg" alt="Фурнитура">                                      
                            <div class="card-content">
                                <h3>Фурнитура</h3>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>


        </div>

        </br>

        <a href="<?= \yii\helpers\Url::to('/admin') ?>">!!<?= Yii::$app->getSecurity()->generateRandomString(); ?> !!!!</a>

        </br>

        <div class="parallax2"></div>

        </br>

        <div id="servise" class="row"></div>

        <div class="row my-5">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>Услуги</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>  


        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv1.jpg" alt="Резка стекла в размер">                                      
                            <div class="card-content-services">
                                <h4>Резка стекла в размер</h4>
                                <p>любой геометрической формы, толщины, сложности по Вашим эскизам</p> 
                                <h5>Обработка прямолинейных и криволинейных кромок.</h5>
                                <p>Выполняется на итальянском оборудовании фирмы Bavelloni , что позволяет производить качественную обработку кромки стекла и зеркал.
                                    Тип профиля кромки: еврокромка (трапеция).</p>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv2.jpg" alt="Фацет">                                      
                            <div class="card-content-services">
                                <h4>Фацет</h4>
                                <p>изготовление технологических вырезов в стекле. 
                                    Толщина изделия, в котором просверливается отверстие, может составлять от 4 до 12 мм.
                                    Также мы осуществляем зенковку отверстий (обработка отверстий с целью получения конических или цилиндрических углублений, 
                                    опорных плоскостей вокруг отверстий или снятия фасок центровых отверстий) под закалку, под крепеж.</p>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv3.jpg" alt="Сверление отверстий">                                      
                            <div class="card-content-services">
                                <h4>Сверление отверстий</h4>
                                <p>Изготовление технологических вырезов в стекле. 
                                    Толщина изделия, в котором просверливается отверстие, может составлять от 4 до 12 мм.
                                    Также мы осуществляем зенковку отверстий (обработка отверстий с целью получения конических или цилиндрических углублений, 
                                    опорных плоскостей вокруг отверстий или снятия фасок центровых отверстий) под закалку, под крепеж.</p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv4.jpg" alt="Уф склейка стекла">                                      
                            <div class="card-content-services">
                                <h4>Уф склейка стекла</h4>
                                <p>Склейка производится специальным бесцветным клеем «Bohle»/Германия,который полимеризуется под воздействием ультрафиолетового излучения. 
                                    Витрины, стеклянные столы, выставочные стенды, стойки под бытовую технику - это неполный перечень того, что, возможно, создать с помощью
                                    ультрафиолетовой склейки.</p>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv5.jpg" alt="Триплекс">                                      
                            <div class="card-content-services">
                                <h4>Триплекс</h4>
                                <p>– безопасное многослойное стекло. Оно характеризуется высокой прочностью. Применяется при изготовлении лестничных ступеней, ограждений, и т.д.</p>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv6.jpg" alt="Гнутое стекло">                                      
                            <div class="card-content-services">
                                <h4>Гнутое стекло</h4>
                                <p>Моллирование позволяет получать различные криволинейные поверхности, как правило, сферических или цилиндрических форм.
                                    Они широко используются в изготовлении аквариумов, мебели, стеклянных перегородок, створок душевых кабин и т.д.</p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv7.jpg" alt="Закаленное стекло">                                      
                            <div class="card-content-services">
                                <h4>Закаленное стекло</h4>
                                <p>Обладает повышенной прочностью и способностью отлично переносить резкие температурные перепады </p>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv8.jpg" alt="Выезд на замер. Монтаж">                                      
                            <div class="card-content-services">
                                <h4>Выезд на замер. Монтаж</h4>
                                <p>Качественно и в срок</p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php @web ?>/images/service main/serv9.jpg" alt="Доставка">                                      
                            <div class="card-content-services text-center ">
                                <h4>Доставка</h4>
                                <p>по Новокузнецку и области <br>в удобное для Вас время</p>
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
        </div>



        <div id="uf-print" class="row"></div>

        <div class="row my-5">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>УФ-печать</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>

        <div class="parallax3">
            <h2 class="text-center parallax-content">Печать фотографического качества (1440 dpi) на различных материалах</h2>
        </div>

        </br>

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/ufprint/ufprint1"> <img src="<?php @web ?>/images/ufprint/uf1.jpg" alt="УФ печать на стекле">                                      
                            <div class="card-content">
                                <h3>УФ печать на стекле</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/ufprint/ufprint2"> <img src="<?php @web ?>/images/ufprint/uf2.jpg" alt="УФ печать на пластике">                                      
                            <div class="card-content">
                                <h3>УФ печать на пластике</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/ufprint/ufprint3"> <img src="<?php @web ?>/images/ufprint/uf3.jpg" alt="УФ печать на плитке">                                      
                            <div class="card-content">
                                <h3>УФ печать на плитке</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/ufprint/ufprint4"> <img src="<?php @web ?>/images/ufprint/uf4.jpg" alt="УФ печать на дереве">                                      
                            <div class="card-content">
                                <h3>УФ печать на дереве</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/ufprint/ufprint5"> <img src="<?php @web ?>/images/ufprint/uf5.jpg" alt="УФ печать на холсте">                                      
                            <div class="card-content">
                                <h3>УФ печать на холсте</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>


        </div>

        <br>
        <br>


        <div class="row my-5">
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
            <div class="col-md-6 text-center">
                <p class=" display-4 text-uppercase"><strong><span>Ассортимент стекла</span> <span class="text-blue">:</span></strong></p>
            </div>   
            <div class="d-none d-md-block line-yellow col-md-3">
            </div>   
        </div>  


        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/glass/glass1"> <img src="<?php @web ?>/images/glass/1.jpg" alt="Полированное стекло">                                      
                            <div class="card-content">
                                <h3>Полированное стекло</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/glass/glass2"> <img src="<?php @web ?>/images/glass/2.jpg" alt="Рифленое стекло">                                      
                            <div class="card-content">
                                <h3>Рифленое стекло</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/glass/glass3"> <img src="<?php @web ?>/images/glass/3.jpg" alt="Матированное стекло">                                      
                            <div class="card-content">
                                <h3>Матированное стекло</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/glass/glass4"> <img src="<?php @web ?>/images/glass/4.jpg" alt="Декоративное зеркало">                                      
                            <div class="card-content">
                                <h3>Декоративное зеркало</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card">
                        <a href="/glass/glass5"> <img src="<?php @web ?>/images/glass/5.jpg" alt="Зеркальное полотно">                                      
                            <div class="card-content">
                                <h3>Зеркальное полотно</h3>
                              <!--  <p>Lorem ipsum..</p> -->
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

        </div>

    </div>
