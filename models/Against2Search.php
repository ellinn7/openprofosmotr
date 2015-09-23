<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Against2;

/**
 * Against2Search represents the model behind the search form about `app\models\Against2`.
 */
class Against2Search extends Against2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'factor', 'optional'], 'integer'],
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
        $query = Against2::find();

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
            'factor' => $this->factor,
            'optional' => $this->optional,
        ]);

        $query->andFilterWhere(['like', 'factor_code', $this->factor_code])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
