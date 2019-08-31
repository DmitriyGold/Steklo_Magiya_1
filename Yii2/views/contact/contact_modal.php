<?php

use yii\bootstrap\Modal;

Modal::begin([
   'header' => 'Заголовок',
    'toogleButtun' => ['label' => 'Заказать звонок'],
    'footer' => 'футер',
]);
    
echo 'мои действия';

Modal::end();
