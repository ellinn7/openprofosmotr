<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patients".
 *
 * @property integer $id
 * @property string $surname
 * @property string $name
 * @property string $patron
 * @property string $snils
 * @property string $sex
 * @property string $spec
 * @property string $phone
 * @property string $birthday
 * @property string $factors1
 * @property string $factors2
 * @property string $seniority
 * @property string $dep
 * @property string $prof
 * @property string $addresse_reg
 * @property string $addresse_fact
 * @property string $disability
 * @property integer $passport_series
 * @property integer $passport_number
 * @property string $passport_given_date
 * @property string $passport_given_who
 * @property string $insurance_company
 * @property string $insurance_number
 * @property string $living_lpu
 * @property string $descr
 * @property string $firm
 * @property string $file
 */
class Patients extends \yii\db\ActiveRecord
{   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'patron', 'snils', 'spec', 'phone', 'factors1', 'factors2', 'seniority', 'dep', 'prof', 'addresse_reg', 'addresse_fact', 'disability', 'passport_given_who', 'insurance_company', 'insurance_number', 'living_lpu', 'descr', 'firm', 'file'], 'string'],
            [['sex','surname','name','patron','birthday','firm'], 'required'],
            [['birthday', 'passport_given_date'], 'safe'],
            [['passport_series', 'passport_number'], 'integer'],
            [['sex'], 'string', 'max' => 1, 'encoding'=>'UTF-8']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patron' => 'Отчество',
            'snils' => 'СНИЛС',
            'sex' => 'Пол',
            'spec' => 'Специальность',
            'phone' => 'Телефон',
            'birthday' => 'Дата рождения',
            'factors1' => 'Приложение 1',
            'factors2' => 'Приложение 2',
            'seniority' => 'Стаж, мес.',
            'dep' => 'Подразделение',
            'prof' => 'Должность',
            'addresse_reg' => 'Адрес регистрации',
            'addresse_fact' => 'Адрес фактический',
            'disability' => 'Инвалидность',
            'passport_series' => 'Паспорт: серия',
            'passport_number' => 'Паспорт: номер',
            'passport_given_date' => 'Когда выдан',
            'passport_given_who' => 'Кем выдан',
            'insurance_company' => 'Страховая компания',
            'insurance_number' => 'Номер страхового полиса',
            'living_lpu' => 'ЛПУ по месту жительства',
            'descr' => 'Примечания',
            'firm' => 'Предприятие',
            'file' => 'Файл',
        ];
    }
    
    public function afterFind()
    {
        $birthday= new \DateTime($this->birthday);
        $this->birthday=$birthday->format('d.m.Y');
        $passport_given_date=new \DateTime($this->passport_given_date);
        $this->passport_given_date=$passport_given_date->format('d.m.Y');
        return parent::afterFind();
    }
    
    /**
     * 
     * @param type $data
     */
    public static function add($data)
    {
        $patient = new Patients();
        $patient->attributes=$data;
        $patient->save();
    }
    
}
