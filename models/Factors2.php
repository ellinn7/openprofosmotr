<?php

namespace app\models;

use Yii;
use app\models\Specialists2;
use app\models\Procedures2;
use app\models\Against2;

/**
 * This is the model class for table "factors2".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $period
 */
class Factors2 extends \yii\db\ActiveRecord
{
    public $specialists_str='';
    public $procedures_str='';
    public $againsts_str='';
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factors2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'period'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Код',
            'name' => 'Наименование работ и профессий',
            'period' => 'Период',
            'specialists_str' => 'Участие врачей-специалистов',
            'procedures_str' => 'Лабораторные и функциональные исследования',
            'againsts_str' => 'Дополнительные медицинские противопоказания',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialists()
    {
        return $this->hasMany(Specialists2::className(), ['factor' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProcedures()
    {
        return $this->hasMany(Procedures2::className(), ['factor' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgainsts()
    {
        return $this->hasMany(Against2::className(), ['factor' => 'id']);
    }
    
    /**
     * @return string $this->specialists->name
     */
    public function getSpec_str()
    {
        $arr=[];
        if($this->specialists) {
            foreach($this->specialists as $specialist) {
                $arr[]=$specialist->name;
            }
        }
        return implode('<br>',$arr);
    }
    
    /**
     * @return string $this->procedures->name
     */
    public function getProc_str()
    {
        $arr=[];
        if($this->procedures) {
            foreach($this->procedures as $procedure) {
                $arr[]=$procedure->name;
            }
        }
        return implode('<br>',$arr);
    }
    
    /**
     * @return string $this->againsts->name
     */
    public function getAg_str()
    {
        $arr=[];
        if($this->againsts) {
            foreach ($this->againsts as $against) {
                $arr[]=$against->name;
            }
        }
        return implode('<br>',$arr);
    }
}
