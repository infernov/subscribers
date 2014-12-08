<?php
namespace frontend\controllers;

use common\models\Subscribers;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Subscribers();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('success');
        }
        return $this->render('index', [
            'model' => $model
        ]);
    }

}
