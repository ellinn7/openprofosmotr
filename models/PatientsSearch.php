<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patients;

/**
 * PatientsSearch represents the model behind the search form about `app\models\Patients`.
 */
class PatientsSearch extends Patients
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'passport_series', 'passport_number','talon'], 'integer'],
            [['surname', 'name', 'patron', 'snils', 'sex', 'spec', 'phone', 'birthday', 'factors1', 'factors2', 'seniority', 'dep', 'prof', 'addresse_reg', 'addresse_fact', 'disability', 'passport_given_date', 'passport_given_who', 'insurance_company', 'insurance_number', 'living_lpu', 'descr', 'firm', 'file'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$firm_id=false)
    {
        $query = Patients::find()->orderBy('surname');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'birthday' => $this->birthday,
            'passport_series' => $this->passport_series,
            'passport_number' => $this->passport_number,
            'passport_given_date' => $this->passport_given_date,
            'passport_given_date' => $this->talon,
            'firm_id' => $firm_id?$firm_id:$this->firm_id,
        ]);

        $query->andFilterWhere(['ilike', 'surname', $this->surname])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'patron', $this->patron])
            ->andFilterWhere(['ilike', 'snils', $this->snils])
            ->andFilterWhere(['ilike', 'sex', $this->sex])
            ->andFilterWhere(['ilike', 'spec', $this->spec])
            ->andFilterWhere(['ilike', 'phone', $this->phone])
            ->andFilterWhere(['ilike', 'factors1', $this->factors1])
            ->andFilterWhere(['ilike', 'factors2', $this->factors2])
            ->andFilterWhere(['ilike', 'seniority', $this->seniority])
            ->andFilterWhere(['ilike', 'dep', $this->dep])
            ->andFilterWhere(['ilike', 'prof', $this->prof])
            ->andFilterWhere(['ilike', 'addresse_reg', $this->addresse_reg])
            ->andFilterWhere(['ilike', 'addresse_fact', $this->addresse_fact])
            ->andFilterWhere(['ilike', 'disability', $this->disability])
            ->andFilterWhere(['ilike', 'passport_given_who', $this->passport_given_who])
            ->andFilterWhere(['ilike', 'insurance_company', $this->insurance_company])
            ->andFilterWhere(['ilike', 'insurance_number', $this->insurance_number])
            ->andFilterWhere(['ilike', 'living_lpu', $this->living_lpu])
            ->andFilterWhere(['ilike', 'firm', $this->firm])
            ->andFilterWhere(['ilike', 'descr', $this->descr])
            ->andFilterWhere(['ilike', 'file', $this->file]);

        return $dataProvider;
    }
}
