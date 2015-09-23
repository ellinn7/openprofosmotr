<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "procedures_required".
 *
 * @property integer $id
 * @property string $name
 * @property string $descr
 */
class ProceduresRequired extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'procedures_required';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','descr'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'descr' => 'Примечание',
        ];
    }
}
