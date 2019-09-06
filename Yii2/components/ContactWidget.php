<?php

/* Форма обратной связи во всплывающем окне будет работать на каждой странице 
 * сайта, поэтому реализуем виджет который будет инициализировать модель ContactForm,
 *  отправлять сообщение в случае правильного заполнения формы и сообщать 
 * об отправке пользователю (посетителю сайта). */

namespace app\components;

use Yii;
use yii\base\Widget;
use app\models\ContactForm;

class ContactWidget
        extends Widget {

    public function run() {
        /* Создаем экземпляр класса */
        $model = new ContactForm();
        /* получаем данные из формы и запускаем функцию отправки contact, если все хорошо, выводим сообщение 
         * об удачной отправке сообщения на почту */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        /* иначе выводим форму обратной связи */
        return $this->render('ContactWidget',
                        [
                    'model' => $model,
        ]);
    }

}
