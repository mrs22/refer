<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "referin".
 *
 * @property string $vn
 * @property string $rfrcs
 * @property string $refer_date
 * @property string $hospcode
 * @property string $date_in
 * @property string $clinic
 * @property string $hn
 * @property string $icd10
 * @property integer $refer_type
 * @property string $docno
 * @property string $depcode
 * @property string $refer_point
 * @property string $staff
 * @property string $confirm_date
 * @property string $pre_diagnosis
 * @property string $ac_type
 * @property string $claim_code
 * @property string $ac_ae
 * @property string $ac_emtype
 * @property string $hos_guid
 * @property string $has_expire_date
 * @property string $expire_date
 * @property integer $f43_causein_id
 * @property string $refer_hospcode
 * @property string $referin_number
 * @property string $referout_number
 * @property integer $referin_id
 * @property string $refer_time
 */
class Referin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'referin';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbhosxp');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vn'], 'required'],
            [['refer_date', 'date_in', 'confirm_date', 'expire_date', 'refer_time'], 'safe'],
            [['refer_type', 'f43_causein_id', 'referin_id'], 'integer'],
            [['vn'], 'string', 'max' => 13],
            [['rfrcs', 'ac_type', 'ac_ae', 'ac_emtype', 'has_expire_date'], 'string', 'max' => 1],
            [['hospcode', 'refer_hospcode'], 'string', 'max' => 5],
            [['clinic', 'depcode'], 'string', 'max' => 3],
            [['hn'], 'string', 'max' => 9],
            [['icd10'], 'string', 'max' => 7],
            [['docno', 'staff'], 'string', 'max' => 50],
            [['refer_point'], 'string', 'max' => 10],
            [['pre_diagnosis'], 'string', 'max' => 200],
            [['claim_code'], 'string', 'max' => 20],
            [['hos_guid'], 'string', 'max' => 38],
            [['referin_number', 'referout_number'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vn' => 'Vn',
            'rfrcs' => 'Rfrcs',
            'refer_date' => 'Refer Date',
            'hospcode' => 'Hospcode',
            'date_in' => 'Date In',
            'clinic' => 'Clinic',
            'hn' => 'Hn',
            'icd10' => 'Icd10',
            'refer_type' => 'Refer Type',
            'docno' => 'Docno',
            'depcode' => 'Depcode',
            'refer_point' => 'Refer Point',
            'staff' => 'Staff',
            'confirm_date' => 'Confirm Date',
            'pre_diagnosis' => 'Pre Diagnosis',
            'ac_type' => 'Ac Type',
            'claim_code' => 'Claim Code',
            'ac_ae' => 'Ac Ae',
            'ac_emtype' => 'Ac Emtype',
            'hos_guid' => 'Hos Guid',
            'has_expire_date' => 'Has Expire Date',
            'expire_date' => 'Expire Date',
            'f43_causein_id' => 'F43 Causein ID',
            'refer_hospcode' => 'Refer Hospcode',
            'referin_number' => 'Referin Number',
            'referout_number' => 'Referout Number',
            'referin_id' => 'Referin ID',
            'refer_time' => 'Refer Time',
        ];
    }

    /**
     * @inheritdoc
     * @return ReferinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ReferinQuery(get_called_class());
    }
}
