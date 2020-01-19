<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\components\ContactWidget;

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <header class="header fixed-top">

                <div class="container-fluid header-top">
                    <div class="container">                           
                        
                        <div class="row p-0 pt-2 m-0">
                            <div class="col-lg-3 text-center text-lg-left align-self-lg-center">                          
                                <a href="<?= Url::to(['/site/index'])?>"><img src="<?php @web ?>/images/logo.png" alt="Логотип"></a>
                            </div>

                            <div class="col-lg-4 text-center align-self-lg-center">                                                                                            
                                <p class="h6">г. Новокузнецк </br>ул. Малоэтажная 4/4</p>
                            </div>  

                            <div class="d-none d-lg-block col-lg-3 text-center align-self-lg-center">                                                                                          
                                <p class="h5"><strong>+7(384-3) 36-07-26</strong></p>
                                <p class="h5"><strong>+7 901-615-04-17</strong></p>
                            </div>   

                            <div class="d-lg-none col-lg-3 text-center align-self-lg-center ">                                                                                          
                                <span class="h5">+7(384-3) 36-07-26, +7 901-615-04-17</span>
                            </div> 


                            <div class="col-lg-2 text-center text-lg-right align-self-lg-center p-0 m-0">
                                <button type="button" class="btn header-btn mb-1" data-toggle="modal" data-target="#myModal_Contact">
                                    заказать звонок</button>
                            </div>   

                        </div> 

                        <div class="row m-0 p-0">

                            <div class="col-4 text-left align-self-lg-center">
                                <!--  Показываем панель админки -->
                                <?php if ((!Yii::$app->user->isGuest) && (Yii::$app->user->identity->role === 'admin')) : ?>
                                    <span class="small"><a href = "<?= Url::to('/admin') ?>">Админка</a></span>                                   
                                <?php endif; ?>
                            </div>

                            <div class="col-8 text-right align-self-lg-center">
                                <?php if (!Yii::$app->user->isGuest) : ?>
                                    <span class="small"><a href = "<?= Url::to('/site/logout') ?>" class = "nav-link"><?= Yii::$app->user->identity['username'] ?> Выход</a></span>                                    
                                <?php else : ?>

                                    <span class="small"><a href = "<?= Url::to('/site/login') ?>">Вход</a></span>
                                    <span class="small"><a href = "<?= Url::to('/site/signup') ?>">Регистрация</a></span>
                                <?php endif; ?>
                            </div>   
                        </div>
                    </div>
                </div>

                <div class="container-fluid header-bottom">                        

                    <div class="container">
                        <nav  class="col-md-12 pt-0">
                            <ul class="navbar-nav flex-sm-row justify-content-sm-between align-items-center">
                                <li class="nav-item active px-2"><a href="<?= url::to(['/site/index'])?>" class="nav-link">Главная</a></li> 
                                <li class="nav-item px-2"><a href="<?= Url::to(['/site/index#product'])?>" class="nav-link">Продукция</a></li>
                                <li class="nav-item px-2"><a href="<?= Url::to(['/site/index#servise'])?>" class="nav-link">Услуги</a></li>
                                <li class="nav-item px-2"><a href="<?= Url::to(['/site/index#uf-print'])?>" class="nav-link">УФ печать</a></li>
                                <li class="nav-item px-2"><a href="<?= Url::to(['/site/catalogs'])?>" class="nav-link">Каталоги</a></li>
                                <li class="nav-item px-2"><a href="<?= Url::to(['/site/contact'])?>" class="nav-link">Контакты</a></li>
                                <li class="nav-item px-2">
                                    <span class="my-icons"> <a href="https://vk.com/nsksteklo" target="_blank"><i class="fa fa-vk"></i></a> </span>
                                    <span class="my-icons"> <a href="https://www.instagram.com/zerkalo_steklo_nvkz/" target="_blank"><i class="fa fa-instagram"></i></a>   </span>
                                    <!--<span class="my-icons"> <a href="/admin/gallery/index"><i class="fa fa-envelope" aria-hidden="true"></i></a>   </span>
                                    -->
                                </li>
                            </ul>  
                        </nav>
                    </div>
                </div>

            </header>

            <div class="container my-content">
                <?= $content ?>
                <?= ContactWidget::widget([]) ?>
            </div>
        </div>

        <footer class="footer pt-2">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-12 text-center align-self-center pt-2">
                        <p class="pull-left">&copy; ООО "Стекломагия", 2011 - <?= date('Y') ?>. Все права защищены.</p>   
                    </div>
                    <div class="col-lg-4 col-7 text-center align-self-center pt-2">
                        <p>+7(384-3) 36-07-26, +7 901-615-04-17</p>                                
                    </div>
                    <div class="col-lg-2 col-5 text-lg-right text-center align-self-center">
                        <span class="my-icons-footer"> <a href="https://vk.com/nsksteklo" target="_blank"><i class="fa fa-vk "></i></a> </span>
                        <span class="my-icons-footer"> <a href="https://www.instagram.com/zerkalo_steklo_nvkz/" target="_blank"><i class="fa fa-instagram"></i></a>   </span>  
                    </div>
                </div>

            </div>
        </footer> 



        <?php $this->endBody() ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
<?php $this->endPage() ?>