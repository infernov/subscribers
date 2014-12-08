<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Подписка на рассылку');
?>
<div class="subscribe-form">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'subscription-form']); ?>
            <?= $form->field($model, 'email', [
                'inputOptions' => [
                    'placeholder' => 'your@email.com',
                ]]) ?>
            <div class="form-group">
                <?= Html::submitButton('Подписаться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
