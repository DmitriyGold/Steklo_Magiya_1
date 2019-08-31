<?php

namespace app\controllers;

use app\models\ContactForm;
use Yii;

class ContactController extends AppController {
    /* Объявляем функцию */

    public function actionContact() {
 
        /* Создаем экземпляр класса */
        $model = new ContactForm();
        /* получаем данные из формы и запускаем функцию отправки contact, если все хорошо, выводим сообщение об удачной отправке сообщения на почту */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        /* иначе выводим форму обратной связи */
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }    

    
    public function actionContact_modal() {
        
        return $this->render('contact_modal');
    }
            
    
}
