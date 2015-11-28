<?php

namespace app\models;
use app\models\Patients;
use Yii;

/**
 * This is the model class for table "firms".
 *
 * @property integer $id
 * @property string $firm
 * @property string $date
 * @property string $file
 * 
 * @property Patients[] $patients
 */
class Firms extends \yii\db\ActiveRecord
{
    /**
     * 0|1 print or not talon attribute
     */
    public $talon=0;

    /**
     * after find
     * @return parent
     */
    public function afterFind()
    {
        $rel_pat=Patients::find()->where(['firm_id'=>$this->id])->one();
        if($rel_pat) {
            $this->talon=$rel_pat->talon;
        }
        return parent::afterFind();
    }
    /**
     * after save
     * @param type $insert
     * @param type $changedAttributes
     * @return parent
     */
    public function afterSave($insert, $changedAttributes)
    {
        if(!$this->isNewRecord) {
            foreach ($this->patients as $patient) {
                $patient->talon=$this->talon;
                $patient->save();
            }
        }
        return parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm', 'file'], 'string'],
            [['talon'], 'integer'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firm' => 'Предприятие',
            'date' => 'Дата ввода',
            'file' => 'Файл',
            'talon' => 'Печатать талон',
        ];
    }
    
    public static function add($data)
    {
        $firm=new Firms();
        $firm->attributes=$data;
        $firm->date=date('d.m.Y H:i:s');
        if($firm->save()) {
            return $firm->id;
        }
        return false;
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patients::className(), ['firm_id' => 'id']);
    }
}
