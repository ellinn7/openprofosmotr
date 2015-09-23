<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Specialists1;

/**
 * Specialists1Search represents the model behind the search form about `app\models\Specialists1`.
 */
class Specialists1Search extends Specialists1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'factor', 'optional'], 'integer'],
            [['name', 'factor_code'], 'safe'],
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
        $query = Specialists1::find();

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
            'factor_code' => $this->factor_code,
            'optional' => $this->optional,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
