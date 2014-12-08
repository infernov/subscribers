<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubscribersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подписчики';
?>
<div class="subscribers-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'email'
        ],
    ]); ?>

</div>