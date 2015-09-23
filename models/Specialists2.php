<?php

namespace app\models;

use Yii;
use app\models\Factors2;

/**
 * This is the model class for table "specialists2".
 *
 * @property integer $id
 * @property integer $factor
 * @property integer $optional
 * @property string $name
 * @property string $factor_code
 */
class Specialists2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specialists2';
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
            'name' => 'Name',
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
