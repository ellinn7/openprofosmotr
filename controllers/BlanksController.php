<?php
/**
 * Печать бланков
 * 
 * @author Elena Zorina
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Patients;

require_once '../extensions/mpdf60/mpdf.php';

class BlanksController extends Controller
{
    /**
     * public property
     * @var layout
     */
    public $layout='print';

    /**
     * вызов ПДФ
     * @param string $html
     */
    protected function pdf($html,$format)
    {
        $pdf=new \mPDF('',$format,0,'',5,5,8,5);        
        $pdf->writeHtml($html);
        $pdf->Output("output.pdf","I");
    }

    /**
     * Проф. маршрут
     */
    public function actionRout()
    {   
        $this->pdf($this->render('rout',[
            'model'=>new Patients,
        ]),
        'A4-L');
    }
 
    /**
     * Печать формы с основными данными и согласия на обработку ПД
     */
    public function actionPersonal()
    {
        $this->pdf($this->render('personal'),'A4-P');
    }
    
    /**
     * Паспорт здоровья работника
     */
    public function actionPassport()
    {
        $this->pdf($this->render('passport'),'A4-L');
    }
        
    /**
     * Заключение периодического медицинского осмотра
     */
    public function actionResume()
    {
        $this->pdf($this->render('resume'),'A4-L');
    }
    
    /**
     * Талон, анализ крови
     */
    public function actionTalon()
    {
        $this->pdf($this->render('talon'),'A4-L');
    }
    
    /**
     * Анализы
     */
    public function actionAnalysis()
    {
        $this->pdf($this->render('analysis'),'A4-P');
    }
    
}
