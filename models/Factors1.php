<?php

namespace app\models;

use Yii;
use app\models\Specialists1;
use app\models\Procedures1;
use app\models\Against1;

/**
 * This is the model class for table "factors1".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $period
 */
class Factors1 extends \yii\db\ActiveRecord
{
    public $specialists_str='';
    public $procedures_str='';
    public $againsts_str='';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factors1';
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
            'code' => 'Код',
            'name' => 'Наименование вредных и (или) опасных производственных факторов',
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
        return $this->hasMany(Specialists1::className(), ['factor' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProcedures()
    {
        return $this->hasMany(Procedures1::className(), ['factor' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgainsts()
    {
        return $this->hasMany(Against1::className(), ['factor' => 'id']);
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
