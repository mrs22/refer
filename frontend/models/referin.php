<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\referin as referinModel;

/**
 * referin represents the model behind the search form about `common\models\referin`.
 */
class referin extends referinModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vn', 'rfrcs', 'refer_date', 'hospcode', 'date_in', 'clinic', 'hn', 'icd10', 'docno', 'depcode', 'refer_point', 'staff', 'confirm_date', 'pre_diagnosis', 'ac_type', 'claim_code', 'ac_ae', 'ac_emtype', 'hos_guid', 'has_expire_date', 'expire_date', 'refer_hospcode', 'referin_number', 'referout_number', 'refer_time'], 'safe'],
            [['refer_type', 'f43_causein_id', 'referin_id'], 'integer'],
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
        $query = referinModel::find();

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
            'refer_date' => $this->refer_date,
            'date_in' => $this->date_in,
            'refer_type' => $this->refer_type,
            'confirm_date' => $this->confirm_date,
            'expire_date' => $this->expire_date,
            'f43_causein_id' => $this->f43_causein_id,
            'referin_id' => $this->referin_id,
            'refer_time' => $this->refer_time,
        ]);

        $query->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'rfrcs', $this->rfrcs])
            ->andFilterWhere(['like', 'hospcode', $this->hospcode])
            ->andFilterWhere(['like', 'clinic', $this->clinic])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'icd10', $this->icd10])
            ->andFilterWhere(['like', 'docno', $this->docno])
            ->andFilterWhere(['like', 'depcode', $this->depcode])
            ->andFilterWhere(['like', 'refer_point', $this->refer_point])
            ->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'pre_diagnosis', $this->pre_diagnosis])
            ->andFilterWhere(['like', 'ac_type', $this->ac_type])
            ->andFilterWhere(['like', 'claim_code', $this->claim_code])
            ->andFilterWhere(['like', 'ac_ae', $this->ac_ae])
            ->andFilterWhere(['like', 'ac_emtype', $this->ac_emtype])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'has_expire_date', $this->has_expire_date])
            ->andFilterWhere(['like', 'refer_hospcode', $this->refer_hospcode])
            ->andFilterWhere(['like', 'referin_number', $this->referin_number])
            ->andFilterWhere(['like', 'referout_number', $this->referout_number]);

        return $dataProvider;
    }
}
