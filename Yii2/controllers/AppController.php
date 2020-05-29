<?php

//Главный контроллер. Содержит общие для всего приложения функции

namespace app\controllers;

use \yii\web\Controller;


class AppController extends Controller {
    
    public function debug($arr){
        echo '<pre>' . print_r($arr,TRUE) . '</pre>';  
    }
    
}

    function debug($arr) { // глобальная функции для доступа в виде
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
    
function myscandir($dir, $sort=0)
{
	$list = scandir($dir, $sort);
	
	// если директории не существует
	if (!$list) return false;
	
	// удаляем . и .. (я думаю редко кто использует)
	if ($sort == 0) unset($list[0],$list[1]);
	else unset($list[count($list)-1], $list[count($list)-1]);
	return $list;
}



