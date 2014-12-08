<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property integer $id
 * @property string $email
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscribers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'required', 'message' => Yii::t('app', 'Пожалуйста, введите Ваш Email')],
            ['email', 'email', 'message' => Yii::t('app', 'Неправильный формат Email')],
            ['email', 'unique', 'message' => Yii::t('app', 'Вы уже подписаны на рассылку')],
            ['email', 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Ваш Email'),
        ];
    }
}
