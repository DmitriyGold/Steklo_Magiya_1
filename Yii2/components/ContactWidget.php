<?php
/*Форма обратной связи во всплывающем окне будет работать на каждой странице 
 * сайта, поэтому реализуем виджет который будет инициализировать модель ContactForm,
 *  отправлять сообщение в случае правильного заполнения формы и сообщать 
 * об отправке пользователю (посетителю сайта).*/
namespace app\components;
 
use Yii;
use yii\base\Widget;
use app\models\ContactForm;
 
class ContactWidget extends Widget
{
 
    public function run()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        return $this->render('ContactWidget', [
            'model' => $model,
        ]);
    }
 
}