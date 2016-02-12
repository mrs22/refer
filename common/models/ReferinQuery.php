<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Referin]].
 *
 * @see Referin
 */
class ReferinQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Referin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Referin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}