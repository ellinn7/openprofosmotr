<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "procedures".
 *
 * @property integer $id
 * @property string $place
 * @property string $descr
 * @property string $procedure
 */
class Procedures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'procedures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place', 'descr', 'procedure'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'procedure' => 'Процедура',
            'place' => 'Каб.',
            'descr' => 'Примечания',
        ];
    }
}
