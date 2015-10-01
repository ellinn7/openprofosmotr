<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $file;

    /**
     * @return array the validation rules.,'extensions' => 'xls,ods',
     */
    public function rules()
    {
        return [
            [['file'],'file'],//'extensions' => 'xls,ods',],
        ];
    }
    
    public function attributeLabels() {
        return [
            'file' => 'Файл',
        ];
    }
}