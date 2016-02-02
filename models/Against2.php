<?php

namespace app\models;

use Yii;
use app\models\Factors2;

/**
 * This is the model class for table "against2".
 *
 * @property integer $id
 * @property integer $factor
 * @property string $factor_code
 * @property string $name
 * @property integer $optional
 */
class Against2 extends \yii\db\ActiveRecord
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
        return 'against2';
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
            'id' => 'ID',
            'factor' => 'Factor',
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
        return $this->hasOne(Factors2::className(), ['id'=>'factor']);
    }
}
