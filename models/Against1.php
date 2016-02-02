<?php

namespace app\models;

use Yii;
use app\models\Factors1;

/**
 * This is the model class for table "against1".
 *
 * @property integer $factor
 * @property integer $id
 * @property string $factor_code
 * @property string $name
 * @property integer $optional
 */
class Against1 extends \yii\db\ActiveRecord
{
    public function beforeValidate()
    {
        if(preg_match('/\*/',$this->name)) {
            $this->optional=1;
        } else {
            $this->optional=0;
        }
        return parent::beforeValidate();
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'against1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factor', 'optional'], 'integer'],
            [['factor_code', 'name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'factor' => 'Factor',
            'id' => 'ID',
            'factor_code' => 'Factor Code',
            'name' => 'Противопоказание',
            'optional' => 'Optional',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFactors()
    {
        return $this->hasOne(Factors1::className(), ['id'=>'factor']);
    }
}
