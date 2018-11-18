<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $body;
    public $url;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, phone and body are required
            [['name', 'email', 'phone', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['url', 'string'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Nombre',
            'email' => 'Correo',
            'phone' => 'Teléfono',
            'body' => 'Mensaje',
            'url' => 'Url',
            'verifyCode' => 'Código de verificación',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($url = '')
    {
        return Yii::$app->mailer->compose(
                 'contact-html',
                 [
                   'name'  => $this->name,
                   'phone' => $this->phone,
                   'email'  => $this->email,
                   'body'  => $this->body,
                   'url' => $url
                 ]
             )
             ->setTo(Yii::$app->params['adminEmail'])
             ->setFrom([Yii::$app->params['webEmail'] => 'Open Housse Web'])
             ->setSubject('Nuevo mensaje de la página web')
             ->send();
    }
}
