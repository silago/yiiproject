<?php
class WtsConfigForm extends CFormModel
{
    public $applicationName;
    public $applicationShortDesc;
    public $giiPassword;
    public $adminEmail;
    public $fromEmail;

    public function rules()
    {
        return array(
            array('applicationName, giiPassword, adminEmail, fromEmail, applicationShortDesc', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'applicationName' => Yii::t('app', 'Наименование приложения'),
            'applicationShortDesc' => Yii::t('app', 'Краткое описание приложения'),
            'giiPassword' => Yii::t('app', 'Пароль для генератора кода Gii'),
            'adminEmail' => Yii::t('app', 'Email администратора'),
            'fromEmail' => Yii::t('app', 'Email отправителя'),
        );
    }
}
?>
