<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "specialists".
 *
 * @property integer $id
 * @property string $place
 * @property string $descr
 * @property string $specialist
 */
class Specialists extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return Yii::$app->user->identity->specialists;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place', 'descr', 'specialist'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'place' => 'Каб.',
            'descr' => 'Примечания',
            'specialist' => 'Специалист',
        ];
    }
}
