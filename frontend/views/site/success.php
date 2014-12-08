<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Поздравляем, вы подписались на рассылку!');
?>
<div class="subscribe-success">
    <div class="alert alert-success" role="alert"><?= Html::encode($this->title) ?></div>
</div>
