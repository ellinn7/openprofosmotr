<?php

namespace app\models;

use Yii;
use app\models\Factors2;

/**
 * This is the model class for table "procedures2".
 *
 * @property integer $id
 * @property integer $factor
 * @property integer $optional
 * @property string $name
 * @property string $factor_code
 */
class Procedures2 extends \yii\db\ActiveRecord
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
        return 'procedures2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factor','optional'], 'integer'],
            [['name','factor_code'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'factor' => 'Factor',
            'name' => 'Процедура',
            'optional' => 'Optional',
            'factor_code' => 'Factor_code',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFactors()
    {
        return $this->hasOne(Factors2::className(), ['id'=>'factor']);
    }
}
