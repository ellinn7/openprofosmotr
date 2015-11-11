<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Against1;

/**
 * Against1Search represents the model behind the search form about `app\models\Against1`.
 */
class Against1Search extends Against1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factor', 'id', 'optional'], 'integer'],
            [['factor_code', 'name'], 'safe'],
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
    public function search($params)
    {
        $query = Against1::find();

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
            'factor' => $this->factor,
            'id' => $this->id,
            'optional' => $this->optional,
        ]);

        $query->andFilterWhere(['ilike', 'factor_code', $this->factor_code])
            ->andFilterWhere(['ilike', 'name', $this->name]);

        return $dataProvider;
    }
}
